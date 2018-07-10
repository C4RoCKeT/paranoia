<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\forms\UserForm */
/* @var $form yii\widgets\ActiveForm */
$updateModel = isset($updateModel) ? $updateModel : false;
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput() ?>
    <?= $form->field($model, 'email')->input('email', ['readOnly' => !$model->getModel()->isNewRecord]) ?>
    <?= $form->field($model, 'password')->passwordInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->getModel()->isNewRecord ? 'Create' : 'Update', ['class' => $model->getModel()->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
