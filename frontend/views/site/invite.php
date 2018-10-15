<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Invite';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-invite">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Please help Friend Computer better organize the information about Alpha Complex inhabitants. Send the link below to a fellow Troubleshooter and you
        won't be shot a traitor.
    </p>

    <code><?= \yii\helpers\Url::to(['site/signup', 'inviteKey' => $inviteKey], true) ?></code>
</div>
