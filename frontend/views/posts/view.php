<?php
use yii\bootstrap4\Html;
use yii\widgets\Breadcrumbs;
/** @var yii\web\View $this */

if (!$this->title = $model->seo->title) {
    $this->title = $model->title;
}

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $model->seo->keywords,
]);

$this->registerMetaTag([
    'name' => 'description',
    'content' => $model->seo->description,
]);

$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['posts']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'slug' => $model->slug]];
?>

<section class="fh5co-books">
    <div class="site-container">
        <h2 class="universal-h2">&nbsp</h2>
            <div class="row align-items-center">
                <div class="col col-md-8 offset-md-2">
                    <h1><?= $model->title ?></h1>
                    <p>
                        <?= date('d.m.Y', $model->created_at) ?>
                    </p>
                    <span><?= $model->text ?></span>
                </div>
            </div>
        </div>
</section>