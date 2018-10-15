<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Character */
/* @var $form ActiveForm */
?>
<div class="character-form" style="max-width:920px;margin-left:auto;margin-right:auto;">
    <?php $form = ActiveForm::begin(); ?>
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
    <div class="row form-row">
        <div class="col-xs-12">
            <div class="form-header" style="line-height:2em;background-color:#7cb7e2;">
                <div class="form-header-number" style="padding-left:10px;width:120px;background-color:#244362;display:inline-block;color:#ffffff;"><i>///
                        PART ONE</i></div>
                <div class="form-header-description" style="padding-left:10px;font-weight:bold;color:#244362;display:inline-block;">CORE INFORMATION >>>
                </div>
            </div>
            <div class="form-content">
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'security_clearance')->dropDownList($model->securityClearanceList()) ?>
                <?= $form->field($model, 'home_sector') ?>
                <?= $form->field($model, 'clone_number') ?>
            </div>
        </div>
    </div>
    <div class="row form-row">
        <div class="col-xs-12">
            <div class="form-header" style="line-height:2em;background-color:#7cb7e2;">
                <div class="form-header-number" style="padding-left:10px;width:120px;background-color:#244362;display:inline-block;color:#ffffff;"><i>///
                        PART TWO</i></div>
                <div class="form-header-description" style="padding-left:10px;font-weight:bold;color:#244362;display:inline-block;">DEVELOPMENT >>></div>
            </div>
            <div class="form-content">
                <?= $form->field($model, 'treason_stars') ?>
                <?= $form->field($model, 'xp_points') ?>
                Stats
                <?php foreach ($model->stats() as $stat) :
                    echo $form->field($model, 'stats[' . $stat . ']')->label(mb_strtoupper($stat));
                endforeach; ?>
            </div>
        </div>
    </div>
    <div class="row form-row">
        <div class="col-xs-12">
            <div class="form-header" style="line-height:2em;background-color:#7cb7e2;">
                <div class="form-header-number" style="padding-left:10px;width:120px;background-color:#244362;display:inline-block;color:#ffffff;"><i>///
                        PART THREE</i></div>
                <div class="form-header-description" style="padding-left:10px;font-weight:bold;color:#244362;display:inline-block;">SKILLS >>></div>
            </div>
            <div class="form-content">
                <?php foreach ($model->skills() as $skill) :
                    echo $form->field($model, 'skills[' . $skill . ']')->label(mb_strtoupper($skill));
                endforeach; ?>
            </div>
        </div>
    </div>
    <div class="row form-row">
        <div class="col-xs-12">
            <div class="form-header" style="line-height:2em;background-color:#7cb7e2;">
                <div class="form-header-number" style="padding-left:10px;width:120px;background-color:#244362;display:inline-block;color:#ffffff;"><i>///
                        PART FOUR</i></div>
                <div class="form-header-description" style="padding-left:10px;font-weight:bold;color:#244362;display:inline-block;">WELLBEING >>></div>
            </div>
            <div class="form-content">
                <?= $form->field($model, 'moxie') ?>
                <?= $form->field($model, 'max_moxie') ?>
                <?= $form->field($model, 'wounds') ?>
                <?= $form->field($model, 'memory')->textarea() ?>
            </div>
        </div>
    </div>
    <div class="row form-row">
        <div class="col-xs-12">
            <div class="form-header" style="line-height:2em;background-color:#7cb7e2;">
                <div class="form-header-number" style="padding-left:10px;width:120px;background-color:#244362;display:inline-block;color:#ffffff;"><i>///
                        PART FIVE</i></div>
                <div class="form-header-description" style="padding-left:10px;font-weight:bold;color:#244362;display:inline-block;">EQUIPMENT >>></div>
            </div>
            <div class="form-content">
                <?= $form->field($model, 'equipment')->textarea() ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- characters-_form -->
