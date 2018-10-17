<?php

use frontend\components\FormHeader;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Character */
/* @var $form ActiveForm */
?>
<div class="character-form" style="max-width:920px;margin-left:auto;margin-right:auto;">
    <?php $form = ActiveForm::begin(['enableClientValidation' => false]); ?>
    <div class="row">
        <div class="col-xs-5">
            <img src="/img/alpha-complex-form.png" alt="This form is mandatory" style="max-width:100%;"/>
        </div>
        <div class="col-xs-7 text-center">
            <div class="character-image" style="height:120px;border:3px solid #7cb7e2;">
                <img src="/img/morty.jpg" alt="The mortiest Morty" style="max-width:100%;max-height:100%;">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center" style="color:#ff0000;font-size:18px;letter-spacing:4px;">► THIS FORM IS MANDATORY</div>
        </div>
    </div>
    <div class="row form-part">
        <div class="col-xs-12">
            <?= FormHeader::widget([
                'part' => 1,
                'title' => 'Core Information'
            ]); ?>
            <div class="form-content">
                <?= $this->render('form/_core-information', compact('model', 'form')) ?>
            </div>
        </div>
    </div>
    <div class="row form-part">
        <div class="col-xs-12">
            <?= FormHeader::widget([
                'part' => 2,
                'title' => 'Development'
            ]); ?>
            <div class="form-content">
                <?= $this->render('form/_development', compact('model', 'form')) ?>
            </div>
        </div>
    </div>
    <div class="row form-part">
        <div class="col-xs-12">
            <?= FormHeader::widget([
                'part' => 3,
                'title' => 'Skills'
            ]); ?>
            <div class="form-content">
                <?= $this->render('form/_skills', compact('model', 'form')) ?>
            </div>
        </div>
    </div>
    <div class="row form-part">
        <div class="col-xs-12">
            <?= FormHeader::widget([
                'part' => 4,
                'title' => 'Wellbeing'
            ]); ?>
            <div class="form-content">
                <?= $this->render('form/_wellbeing', compact('model', 'form')) ?>
            </div>
        </div>
    </div>
    <div class="row form-part">
        <div class="col-xs-12">
            <?= FormHeader::widget([
                'part' => 5,
                'title' => 'Equipment'
            ]); ?>
            <div class="form-content">
                <?= $this->render('form/_equipment', compact('model', 'form')) ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
