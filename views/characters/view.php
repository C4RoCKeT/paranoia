<?php
/**
 * Created by PhpStorm.
 * User: Brandon Tilstra
 * Date: 17-6-2018
 * Time: 01:54
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Character */

$this->title = $model->fullName;
$this->params['breadcrumbs'][] = ['label' => 'Characters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="character-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this character?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="character-form" style="max-width:920px;margin-left:auto;margin-right:auto;">
        <div class="row">
            <div class="col-xs-5">
                <img src="/img/alpha-complex-form.png" alt="This form is mandatory" style="max-width:100%;"/>
            </div>
            <div class="col-xs-7 text-center">
                <div class="character-image" style="height:120px;border:3px solid #7cb7e2;">
                    <img src="/img/morty.jpg" alt="The mortiest Morty" style="max-width:100%;max-height:100%;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center" style="color:#ff0000;font-size:18px;letter-spacing:4px;">► THIS FORM IS MANDATORY</div>
            </div>
        </div>
        <div class="row form-row">
            <div class="col-xs-12">
                <div class="form-header" style="line-height:2em;background-color:#7cb7e2;">
                    <div class="form-header-number" style="padding-left:10px;width:120px;background-color:#244362;display:inline-block;color:#ffffff;"><i>///
                            PART ONE</i></div>
                    <div class="form-header-description" style="padding-left:10px;font-weight:bold;color:#244362;display:inline-block;">CORE INFORMATION >>>
                    </div>
                </div>
                <div class="form-content">

                </div>
            </div>
        </div>
        <div class="row form-row">
            <div class="col-xs-12">
                <div class="form-header" style="line-height:2em;background-color:#7cb7e2;">
                    <div class="form-header-number" style="padding-left:10px;width:120px;background-color:#244362;display:inline-block;color:#ffffff;"><i>///
                            PART TWO</i></div>
                    <div class="form-header-description" style="padding-left:10px;font-weight:bold;color:#244362;display:inline-block;">DEVELOPMENT >>></div>
                </div>
                <div class="form-content">

                </div>
            </div>
        </div>
        <div class="row form-row">
            <div class="col-xs-12">
                <div class="form-header" style="line-height:2em;background-color:#7cb7e2;">
                    <div class="form-header-number" style="padding-left:10px;width:120px;background-color:#244362;display:inline-block;color:#ffffff;"><i>///
                            PART THREE</i></div>
                    <div class="form-header-description" style="padding-left:10px;font-weight:bold;color:#244362;display:inline-block;">SKILLS >>></div>
                </div>
                <div class="form-content">

                </div>
            </div>
        </div>
        <div class="row form-row">
            <div class="col-xs-12">
                <div class="form-header" style="line-height:2em;background-color:#7cb7e2;">
                    <div class="form-header-number" style="padding-left:10px;width:120px;background-color:#244362;display:inline-block;color:#ffffff;"><i>///
                            PART FOUR</i></div>
                    <div class="form-header-description" style="padding-left:10px;font-weight:bold;color:#244362;display:inline-block;">WELLBEING >>></div>
                </div>
                <div class="form-content">

                </div>
            </div>
        </div>
        <div class="row form-row">
            <div class="col-xs-12">
                <div class="form-header" style="line-height:2em;background-color:#7cb7e2;">
                    <div class="form-header-number" style="padding-left:10px;width:120px;background-color:#244362;display:inline-block;color:#ffffff;"><i>///
                            PART FIVE</i></div>
                    <div class="form-header-description" style="padding-left:10px;font-weight:bold;color:#244362;display:inline-block;">EQUIPMENT >>></div>
                </div>
                <div class="form-content">

                </div>
            </div>
        </div>
    </div>
</div>