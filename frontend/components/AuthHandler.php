<?php

namespace frontend\components;

use common\models\Auth;
use common\models\User;
use Yii;
use yii\authclient\ClientInterface;
use yii\helpers\ArrayHelper;

/**
 * AuthHandler handles successful authentication via Yii auth component
 */
class AuthHandler {
    /**
     * @var ClientInterface
     */
    private $client;

    public function __construct(ClientInterface $client) {
        $this->client = $client;
    }

    public function handle() {
        $attributes = $this->client->getUserAttributes();
        $email = ArrayHelper::getValue($attributes, 'email');
        if ($email === null && isset($attributes['emails'])) {
            $email = $attributes['emails'][0]['value'];
        }
        $id = ArrayHelper::getValue($attributes, 'id');

        /* @var Auth $auth */
        $auth = Auth::find()->where([
            'source' => $this->client->getId(),
            'source_id' => $id,
        ])->one();

        if (Yii::$app->user->isGuest) {
            if ($auth) { // login
                /* @var User $user */
                $user = $auth->user;
                //$this->updateUserInfo($user);
                Yii::$app->user->login($user, Yii::$app->params['user.rememberMeDuration']);
            } else {
                if ($email !== null && User::find()->where(['email' => $email])->exists()) {
                    Yii::$app->getSession()->setFlash('error', Yii::t('app', "Your {client} account isn't linked yet.", ['client' => $this->client->getTitle()]));
                } else {
                    Yii::$app->getSession()->setFlash('error', Yii::t('app', "Incorrect e-mail address"));
                }
                Yii::$app->getResponse()->redirect(['login'], 403);
            }
        } else { // user already logged in
            if (!$auth) { // add auth provider
                $auth = new Auth([
                    'user_id' => Yii::$app->user->id,
                    'source' => $this->client->getId(),
                    'source_id' => (string)$attributes['id'],
                ]);
                if ($auth->save()) {
                    Yii::$app->getSession()->setFlash('success',
                        Yii::t('app', 'Linked {client} account.', [
                            'client' => $this->client->getTitle()
                        ])
                    );
                } else {
                    Yii::$app->getSession()->setFlash('error',
                        Yii::t('app', 'Unable to link {client} account: {errors}', [
                            'client' => $this->client->getTitle(),
                            'errors' => json_encode($auth->getErrors()),
                        ])
                    );
                }
            } else { // there's existing auth
                Yii::$app->getSession()->setFlash('error',
                    Yii::t('app',
                        'Unable to link {client} account. There is another user using it.',
                        ['client' => $this->client->getTitle()])
                );
            }
        }
    }
}