<?php
/**
 * Created by PhpStorm.
 * User: Brandon Tilstra
 * Date: 5-8-2018
 * Time: 23:15
 */

/* @var \app\models\Character $model */
?>
<div class="row">
    <div class="col-xs-6">
        <span class="form-label"><?= $model->getAttributeLabel('moxie') ?>:</span>
        <span class="form-value form-control"><?= $model->moxie ?> / <?= $model->max_moxie ?></span>
    </div>
    <div class="col-xs-6">
        <span class="form-label"><?= $model->getAttributeLabel('wounds') ?>:</span>
        <span class="form-value form-control"><?= $model->wounds ?> / 4</span>
    </div>
    <div class="col-xs-12">
        <span class="form-label"><?= $model->getAttributeLabel('memory') ?>:</span>
        <span class="form-value form-control"><?= $model->memory ?></span>
    </div>
</div>
