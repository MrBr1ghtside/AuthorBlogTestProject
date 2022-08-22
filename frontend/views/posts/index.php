<?php
use yii\bootstrap4\Html;
/** @var yii\web\View $this */

$this->title = 'Posts';
?>

<section class="fh5co-books bottom-10">
    <div class="site-container">
    <div class="row">
        <div class="col-md-8 offset-md-2 col-md-push-3">
            <?php foreach ($varInView as $item): ?>
                <h3> <?= Html::a($item['title'], ['posts/view', 'id' => $item['id']]) ?> </h3>
                <p> <?= date('d.m.Y', $item->created_at) ?> </p>
            <?php endforeach ?>
        </div>
    </div>
    </div>
</section>