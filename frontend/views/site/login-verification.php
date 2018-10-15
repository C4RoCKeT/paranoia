<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \promocat\twofa\models\TwoFaForm */

$this->title = 'Enter your verification code.';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-verification-form']); ?>
            <?= $form->field($model, 'code')->label(false)->textInput([
                'tabindex' => 1,
                'placeholder' => 'Code',
                'autofocus' => true,
                'class' => 'form-control'
            ]) ?>
            <?= $form->field($model, 'rememberMe')->hiddenInput()->label(false); ?>
            <div class="form-group">
                <?= Html::a('Cancel', ['login'], ['class' => 'btn btn-default', 'tabindex' => 3]) ?>
                <?= Html::submitButton('Login', ['tabindex' => 4, 'class' => 'btn btn-primary', 'name' => 'login-button']); ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
