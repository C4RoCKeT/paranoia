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
        <?= $form
            ->field($model, 'treason_stars')
            ->input('number', ['min' => 0])
            ->error(false)
        ?>
    </div>
    <div class="col-xs-6">
        <?= $form
            ->field($model, 'xp_points')
            ->input('number', ['min' => 0])
            ->error(false)
        ?>
    </div>
    <div class="col-xs-12">
        <div style="padding:5px 25px;font-weight:bold;color:#7cb7e2;margin:10px 0;background:rgb(225,243,253);border:2px solid #7cb7e2;">STATS >>></div>
    </div>
    <?php foreach ($model->stats() as $stat): ?>
        <div class="col-xs-3">
            <?= $form
                ->field($model, 'skills[' . $stat . ']', [
                    'options' => [
                        'class' => 'form-group character-stat'
                    ]
                ])
                ->input('number', ['min' => -5, 'max' => 5])
                ->label($model->getSkillLabel($stat))
                ->error(false)
            ?>
        </div>
    <?php endforeach; ?>

    <div class="col-xs-3">

    </div>
</div>
