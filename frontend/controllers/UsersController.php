<?php

namespace frontend\controllers;

use common\models\User;
use frontend\models\forms\UserForm;
use promocat\twofa\models\TwoFaForm;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;

/**
 * UsersController implements the CRUD actions for User model.
 */
class UsersController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionView($id = null)
    {
        if ($id === null) {
            $id = Yii::$app->user->getId();
        }
        if (($model = User::find()->where(['id' => $id])->one()) !== null) {
            return $this->render('view', [
                'model' => $model,
            ]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws ForbiddenHttpException
     * @throws NotFoundHttpException
     * @throws \yii\base\Exception
     */
    public function actionUpdate($id)
    {
        $model = new UserForm();
        $model->setModel($this->findModel($id));
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }
        return $this->render('update', [
            'model' => $model
        ]);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested user does not exist.');
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        if ($model->isCurrentUser()) {
            throw new ForbiddenHttpException('You are not allowed to delete yourself.');
        }
        $model->delete();
        return $this->redirect(['index']);
    }

    /**
     * Enables Two Factor Authentication an existing User model.
     *
     * @param integer $id
     *
     * @return mixed
     * @throws NotFoundHttpException
     * @throws ForbiddenHttpException
     */
    public function actionEnableTwoFa($id)
    {
        $model = new TwoFaForm();
        $user = $this->findModel($id);

        if ($user->id !== Yii::$app->user->id) {
            throw new ForbiddenHttpException('You are not allowed to update this user.');
        }

        if ($user->hasTwoFaEnabled()) {
            Yii::$app->session->setFlash('error', Yii::t('twofa', 'Two-Factor authentication is already enabled.'));
            return $this->redirect(['view', 'id' => $user->id]);
        }

        $model->setUser($user);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $user->id]);
        }
        return $this->render('enable-two-fa', [
            'model' => $model,
        ]);
    }

    /**
     * Enables Two Factor Authentication an existing User model.
     *
     * @param integer $id
     *
     * @return mixed
     * @throws NotFoundHttpException
     * @throws ForbiddenHttpException
     */
    public function actionDisableTwoFa($id)
    {
        $user = $this->findModel($id);
        if ($user->id !== Yii::$app->user->id) {
            throw new ForbiddenHttpException('You are not allowed to update this user.');
        }
        if (!$user->hasTwoFaEnabled()) {
            Yii::$app->session->setFlash('error', Yii::t('twofa', 'Two-Factor authentication is not enabled .'));
        } else {
            $user->disableTwoFa();
        }
        return $this->redirect(['view', 'id' => $user->id]);
    }

}
