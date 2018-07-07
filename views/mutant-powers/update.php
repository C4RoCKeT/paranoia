<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MutantPower */

$this->title = 'Update Mutant Power: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Mutant Powers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mutant-power-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
