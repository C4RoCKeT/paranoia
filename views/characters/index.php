<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Characters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="character-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Character', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <h2>Your characters</h2>
    <?=
    ListView::widget([
        'dataProvider' => $userCharacters,
        'itemOptions' => ['class' => 'item'],
        'layout' => "{items}\n{pager}",
        'itemView' => function ($model) {
            return Html::a(Html::encode($model->fullName), ['view', 'id' => $model->id]);
        }
    ])
    ?>
    <h2>Other characters</h2>
    <?=
    ListView::widget([
        'dataProvider' => $otherCharacters,
        'itemOptions' => ['class' => 'item'],
        'layout' => "{items}\n{pager}",
        'itemView' => function ($model) {
            return Html::a(Html::encode($model->name), ['view', 'id' => $model->id]) . ' - ' . $model->user->username;
        }
    ])
    ?>

</div>