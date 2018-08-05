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
    <div class="col-xs-6 col-sm-3">
        <ul style="padding:0;margin:0;list-style:none;">
            <?php
            foreach ($model->skills() as $i => $skill) {
                if ($i % 4 === 0 && $i !== 0) {
                    echo '</ul></div><div class="col-xs-6 col-sm-3"><ul style="padding:0;margin:0;list-style:none;">';
                }
                ?>
                <li style="line-height:38px;">
                    <span class="form-label"><?= $skill ?></span>
                    <span class="form-value form-control" style="float:right;display:inline-block;width:34px;"><?= $model->getSkill($skill) ?></span>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
