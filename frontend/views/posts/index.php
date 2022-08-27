<?php
use yii\bootstrap4\Html;
/** @var yii\web\View $this */

$this->title = 'Posts';
?>

<section class="fh5co-blog">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">My Posts</h2>
			<div class="row">
        <div class="col-md-8 offset-md-2 col-md-push-3">
            <?php foreach ($varInView as $item): ?>
                <h3> <?= Html::a($item['title'], ['posts/view', 'slug' => $item['slug']]) ?> </h3>
                <p> <?= date('d.m.Y', $item->created_at) ?> </p>
            <?php endforeach ?>
        </div>
    </div>
		</div>
	</section>