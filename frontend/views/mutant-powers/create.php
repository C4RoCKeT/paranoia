<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MutantPower */

$this->title = 'Create Mutant Power';
$this->params['breadcrumbs'][] = ['label' => 'Mutant Powers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mutant-power-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
