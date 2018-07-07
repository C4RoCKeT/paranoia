<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Character */

$this->title = 'Create Character';
$this->params['breadcrumbs'][] = ['label' => 'Character', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="character-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
