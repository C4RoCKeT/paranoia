<?php
/**
 * Created by PhpStorm.
 * User: Brandon Tilstra
 * Date: 5-8-2018
 * Time: 23:14
 */

/* @var \common\models\Character $model */
?>
<div class="row">
    <div class="col-xs-6 col-sm-4 col-md-5">
        <?= $form->field($model, 'name')->error(false) ?>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3">
        <?= $form
            ->field($model, 'security_clearance')
            ->dropDownList($model->securityClearanceList())
            ->error(false)
        ?>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-2">
        <?= $form->field($model, 'home_sector')->error(false) ?>
    </div>
    <div class="col-xs-4 col-sm-2">
        <?= $form
            ->field($model, 'clone_number')
            ->input('number', ['min' => 1])
            ->error(false)
        ?>
    </div>
    <div class="col-xs-4 col-sm-2">
        <?= $form
            ->field($model, 'gender')
            ->dropDownList($model->genderList())
            ->error(false)
        ?>
    </div>
    <div class="col-xs-12 col-sm-8 col-md-10">
        <?= $form->field($model, 'personality')->error(false) ?>
    </div>
</div>
