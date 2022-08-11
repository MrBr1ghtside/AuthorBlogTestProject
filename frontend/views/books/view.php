<?php
use yii\bootstrap4\Html;
/** @var yii\web\View $this */

    $this->title = $model->book_name;
?>

<section class="fh5co-books">
<div class="container">
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