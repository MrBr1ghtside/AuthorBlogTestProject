<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header" id="my-color-top">

    <?= Html::a('Панель админа', Yii::$app->homeUrl, ['class' => 'logo', 'id' => 'my-color-top']) ?>

    <nav class="navbar navbar-static-top" id="my-color-top" role="navigation">

        <a href="#" class="sidebar-toggle" id="my-push-menu" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <li>
                    <?= Html::a('ВЫХОД',
                        ['/user/security/logout'],
                        ['data-method' => 'post', 'class' => 'btn', 'style'=>'border-radius: 30px 3px;']
                    ) ?>
                </li>
            </ul>
        </div>
    </nav>
</header>