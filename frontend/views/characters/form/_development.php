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
    <div class="col-xs-6">
        <span class="form-label"><?= $model->getAttributeLabel('treason_stars') ?>:</span>
        <span class="form-value form-control"><?= $model->treason_stars ?></span>
    </div>
    <div class="col-xs-6">
        <span class="form-label"><?= $model->getAttributeLabel('xp_points') ?>:</span>
        <span class="form-value form-control"><?= strtoupper($model->xp_points) ?></span>
    </div>
    <div class="col-xs-12">
        <div style="padding:5px 25px;font-weight:bold;color:#7cb7e2;margin:15px 0 10px;background:rgb(225,243,253);border:2px solid #7cb7e2;">STATS >>></div>
    </div>
    <div class="col-xs-3">
        <span class="form-label"><?= $model->getAttributeLabel('violence') ?>:</span>
        <span class="form-value form-control"><?= $model->getStat('violence') ?></span>
    </div>
    <div class="col-xs-3">
        <span class="form-label"><?= $model->getAttributeLabel('chutzpah') ?>:</span>
        <span class="form-value form-control"><?= $model->getStat('chutzpah') ?></span>
    </div>
    <div class="col-xs-3">
        <span class="form-label"><?= $model->getAttributeLabel('brains') ?>:</span>
        <span class="form-value form-control"><?= $model->getStat('brains') ?></span>
    </div>
    <div class="col-xs-3">
        <span class="form-label"><?= $model->getAttributeLabel('mechanics') ?>:</span>
        <span class="form-value form-control"><?= $model->getStat('mechanics') ?></span>
    </div>
</div>
