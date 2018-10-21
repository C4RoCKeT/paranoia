<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\forms\LoginForm */

use yii\authclient\widgets\AuthChoice;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-md-8 col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="row">
                <div class="col-xs-7">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                </div>
                <div class="col-xs-5">
                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-block btn-primary', 'name' => 'login-button']) ?>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <?php
                $authAuthChoice = AuthChoice::begin([
                    'baseAuthUrl' => ['site/auth'],
                    'popupMode' => true,
                ]);
                foreach ($authAuthChoice->getClients() as $client):
                    $text = Yii::t('default', 'Sign in using {service}', ['service' => $client->getTitle()]);
                    switch ($client->getName()) {
                        case 'google':
                            $icon = 'fa-google-plus';
                            $buttonClass = 'btn-google';
                            break;
                        default:
                            $icon = 'fa-sign-in-alt';
                            $buttonClass = 'btn-' . $client->getName();
                            break;
                    }
                    echo $authAuthChoice->clientLink($client, '<i class="fa ' . $icon . '"></i>' . $text,
                        ['class' => 'btn btn-block btn-social ' . $buttonClass]);
                endforeach;
                AuthChoice::end();
                ?>
            </div>
            <div style="color:#999;margin:1em 0" class="text-center">
                <?= Html::a('I forgot my password', ['site/request-password-reset']) ?>.
            </div>
        </div>
    </div>
</div>