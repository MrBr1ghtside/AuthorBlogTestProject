<?php 
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>John Smith</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Admin Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Настройка информации', 'icon' => 'database', 'url' => ['/settings'],],
                    ['label' => 'Авторы', 'icon' => 'database', 'url' => ['/authors'],],
                    ['label' => 'Книги', 'icon' => 'database', 'url' => ['/books'],],
                    ['label' => 'Отзывы', 'icon' => 'database', 'url' => ['/feedbacks'],],
                    ['label' => 'Посты', 'icon' => 'database', 'url' => ['/posts'],],
                    ['label' => 'Заявки', 'icon' => 'database', 'url' => ['/contact'],],
                ],
            ]
        ) ?>
    </section>

</aside>
