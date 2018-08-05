<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \app\models\forms\LoginForm */

use yii\authclient\widgets\AuthChoice;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Username or email address') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div style="color:#999;margin:1em 0">
                If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
            </div>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

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
            echo $authAuthChoice->clientLink($client, '<i class="fa ' . $icon . '"></i>' . $text, ['class' => 'btn btn-block btn-social btn-flat ' . $buttonClass]);
        endforeach;
        AuthChoice::end();
        ?>
    </div>
</div>