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
    <div class="col-xs-6 col-sm-3">
        <ul style="padding:0;margin:0;list-style:none;">
            <?php
            foreach ($model->skills() as $i => $skill) {
                if ($i % 4 === 0 && $i !== 0) {
                    echo '</ul></div><div class="col-xs-6 col-sm-3"><ul style="padding:0;margin:0;list-style:none;">';
                }
                ?>
                <li style="line-height:38px;">
                    <?= $form
                        ->field($model, 'skills[' . $skill . ']', [
                            'options' => [
                                'class' => 'form-group character-skill'
                            ]
                        ])
                        ->input('number', ['min' => -5, 'max' => 5])
                        ->label($model->getSkillLabel($skill))
                        ->error(false)
                    ?>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
