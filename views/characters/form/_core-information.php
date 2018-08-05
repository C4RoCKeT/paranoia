<?php
/**
 * Created by PhpStorm.
 * User: Brandon Tilstra
 * Date: 5-8-2018
 * Time: 23:14
 */

/* @var \app\models\Character $model */
?>
<div class="row">
    <div class="col-xs-6 col-sm-4 col-md-5">
        <span class="form-label"><?= $model->getAttributeLabel('name') ?>:</span>
        <span class="form-value form-control"><?= $model->name ?></span>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3">
        <span class="form-label"><?= $model->getAttributeLabel('security_clearance') ?>:</span>
        <span class="form-value form-control"><?= strtoupper($model->security_clearance) ?></span>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-2">
        <span class="form-label"><?= $model->getAttributeLabel('home_sector') ?>:</span>
        <span class="form-value form-control"><?= $model->home_sector ?></span>
    </div>
    <div class="col-xs-4 col-sm-2">
        <span class="form-label"><?= $model->getAttributeLabel('clone_number') ?>:</span>
        <span class="form-value form-control"><?= $model->clone_number ?></span>
    </div>
    <div class="col-xs-4 col-sm-2">
        <span class="form-label"><?= $model->getAttributeLabel('gender') ?>:</span>
        <span class="form-value form-control"><?= strtoupper($model->gender) ?></span>
    </div>
    <div class="col-xs-12 col-sm-8 col-md-10">
        <span class="form-label"><?= $model->getAttributeLabel('personality') ?>:</span>
        <span class="form-value form-control"><?= $model->personality ?></span>
    </div>
</div>
