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
    <div class="col-xs-12">
        <?= $form->field($model, 'equipment')->error(false)->label(false)->textarea() ?>
    </div>
