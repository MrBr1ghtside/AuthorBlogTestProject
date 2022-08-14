<?php
use yii\bootstrap4\Html;
/** @var yii\web\View $this */

$this->title = 'Posts';
?>

<section class="fh5co-books">
    <div class="site-container">
        <div class="cell col-lg-8 col-md-3 col-sm-6 col-xs-12">
            <?php foreach ($varInView as $item): ?>
                <h3> <?= Html::a($item['title'], ['posts/view', 'id' => $item['id']]) ?> </h3>
                <p> <?= date('d.m.Y',$item->created_at) ?> </p>
            <?php endforeach ?>
        </div>
    </div>
</section>