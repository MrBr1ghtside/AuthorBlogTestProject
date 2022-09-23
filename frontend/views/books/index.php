<?php
use yii\bootstrap4\Html;
/** @var yii\web\View $this */

$this->title = 'Books';
?>

<section class="fh5co-books">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">My books</h2>
				<div class="books">
                	<?php foreach ($varInView as $item): ?>
				    	<div class="single-book">
					    	<p class="single-book__img">
                            	<?php echo"<img src ='./images/books-{$item['id']}.jpg' alt='single book and cd'>" ?>
							</p>
						<h4 class="single-book__title">
							<?= Html::a($item['book_name'], ['books/view', 'slug' => $item['slug']]) ?>
                    	</h4>
						<span class="single-book__price">
                        	<?php echo"\${$item['price']}" ?>
                    	</span>
				    	</div>
                	<?php endforeach ?>
				</div>
			</div>
	</section>