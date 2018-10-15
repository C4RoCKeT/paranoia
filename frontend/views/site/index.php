<?php

/* @var $this yii\web\View */

$this->title = 'Welcome to Alpha Complex!';
?>
<div class="site-index">

    <div class="jumbotron">
        <?php if (rand(1, 2) === 1): ?>
            <h1>Welcome to Alpha Complex!</h1>

            <p class="lead">The fantastic underground city where we all live.</p>
        <?php else: ?>
            <h1><span class="text-danger">Trust the computer!</span></h1>

            <p class="lead text-danger">The computer is your friend!</p>
        <?php endif; ?>

    </div>

    <div class="body-content">

    </div>
</div>
