<?php
use yii\bootstrap4\Html;
/** @var yii\web\View $this */
if (!$this->title = $model->seo->title) {
    $this->title = $model->book_name;
}

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $model->seo->keywords,
]);

$this->registerMetaTag([
    'name' => 'description',
    'content' => $model->seo->description,
]);

?>

<section class="fh5co-books">
    <div class="container">
        <h2 class="universal-h2">&#160;</h2>
            <div class="row">
                <div class="cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <?php echo"<img src ='./images/books-{$model['id']}.jpg' alt='single book and cd'>" ?>
                </div>
                <div class="cell col-lg-8 col-md-3 col-sm-6 col-xs-12">
                    <h1>
                        <?= $model->book_name ?>
                    </h1>
                    <span>
                        <?= $model->description ?>
                    </span>
                </div>
            </div>
        </div>
</section>