<?php
/**
 * Created by PhpStorm.
 * User: Brandon Tilstra
 * Date: 7-5-2018
 * Time: 16:03
 */

use promocat\twofa\widgets\TwoFaQr;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \promocat\twofa\models\TwoFaForm */

$this->title = 'Enable Two-Factor Authentication';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->getUser()->username, 'url' => ['view', 'id' => $model->getUser()->id]];
$this->params['breadcrumbs'][] = 'Enable Two-Factor Authentication';
?>

<div class="user-enable-2fa">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="enable-2fa-form">
        <?php $form = ActiveForm::begin(['id' => 'enable-2fa-form']); ?>
        Scan the following QR code using a TOTP compatible app, like Google Authenticator or Authy.<br/>

        <?= TwoFaQr::widget([
            'accountName' => $model->getUser()->username,
            'secret' => $model->secret,
            'issuer' => Yii::$app->params['twoFaIssuer'],
            'size' => 300
        ]); ?>
        <?= $form->field($model, 'secret')->hiddenInput()->label(false); ?>
        <br/>

        Once you have added the new account to your app, enter the generated code to enable Two Factor Authentication:
        <?= $form->field($model, 'code')->textInput(['autofocus' => true, 'placeholder' => $model->getAttributeLabel('code')])->label(false); ?>

        <div class="form-group">
            <?= Html::submitButton('Enable', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

