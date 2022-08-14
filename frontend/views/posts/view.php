<?php
use yii\bootstrap4\Html;
/** @var yii\web\View $this */

    $this->title = $model->title;
?>

<section class="fh5co-books">
<div class="container">
    <div class="row">
        <div class="cell col-lg-8 col-md-3 col-sm-6 col-xs-12">
            <h1>
                <?= $model->title ?>
            </h1>
            <p>
                <?= date('d.m.Y', $model->created_at) ?>
            </p>
            <span>
                <?= $model->text ?>
            </span>
        </div>
    </div>
</div>
</section>