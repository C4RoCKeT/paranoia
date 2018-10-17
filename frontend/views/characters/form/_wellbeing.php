<?php
/**
 * Created by PhpStorm.
 * User: Brandon Tilstra
 * Date: 5-8-2018
 * Time: 23:15
 */

/* @var \common\models\Character $model */
?>
<div class="row">
    <div class="col-xs-3">
        <?= $form->field($model, 'moxie')->input('number', ['min' => 0, 'max' => 8])->error(false) ?>
    </div>
    <div class="col-xs-3">
        <?= $form->field($model, 'max_moxie')->input('number', ['min' => 0, 'max' => 8])->error(false) ?>
    </div>
    <div class="col-xs-6">
        <?= $form->field($model, 'wounds')->input('number', ['min' => 0, 'max' => 4])->error(false) ?>
    </div>
    <div class="col-xs-12">
        <?= $form->field($model, 'memory')->error(false)->textarea() ?>
    </div>
</div>
