<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php
        if (!$model->isCurrentUser()) {
            echo Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]);
        }
        ?>
    </p>

    <div class="row">
        <div class="col-lg-6">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'username',
                    'email:email',
                    'status',
                    'created_at:datetime',
                    'updated_at:datetime',
                    [
                        'label' => 'Two-Factor authentication',
                        'value' => function ($user) {
                            ob_start();
                            if ($user->hasTwoFaEnabled()) {
                                echo Html::tag('span', 'Enabled', ['class' => 'label label-success']);
                            } else {
                                echo Html::tag('span', 'Disabled', ['class' => 'label label-danger']);
                            }
                            if ($user->id === Yii::$app->getUser()->getId()) {
                                if ($user->hasTwoFaEnabled()) {
                                    echo ' <small>(' . Html::a('Disable', ['disable-two-fa', 'id' => $user->id], [
                                            'data' => [
                                                'confirm' => 'Are you sure want to disable Two-Factor authentication?',
                                                'method' => 'post',
                                            ]
                                        ]) . ')</small>';
                                } else {
                                    echo ' <small>(' . Html::a('Enable', ['enable-two-fa', 'id' => $user->id]) . ')</small>';
                                }
                            }
                            return ob_get_clean();
                        },
                        'format' => 'raw'
                    ]
                ]
            ]); ?>
        </div>
        <div class="col-lg-6">

        </div>
    </div>

</div>
