<?php
use yii\bootstrap4\Html;
/** @var yii\web\View $this */

$this->title = 'Books';
?>


<section class="fh5co-books">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">	&#160;</h2>
			<div class="books">
                <?php foreach ($varInView as $item): ?>
				    <div class="single-book">
                        <?= Html::a($item['book_name'], ['books/view', 'slug' => $item['slug']]) ?>
					    <a href="" class="single-book__img">
                            <?php echo"<img src ='./images/books-{$item['id']}.jpg' alt='single book and cd'>" ?>
						    <div class="single-book_download">
							    <img src="./images/download.svg" alt="book image">
						    </div>
					    </a>
					<h4 class="single-book__title">
                        <?php echo $item->book_name ?>
                    </h4>
					<span class="single-book__price">
                        <?php echo"\${$item['price']}" ?>
                    </span>
				    </div>
                <?php endforeach ?>
			</div>
		</div>
	</section>