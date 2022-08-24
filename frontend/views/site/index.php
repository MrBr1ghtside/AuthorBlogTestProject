<?php
use yii\bootstrap4\Html;
/** @var yii\web\View $this */

$this->title = 'Author Blog';
?>
<!-- Top banner -->
<section class="fh5co-top-banner">
		<div class="top-banner__inner site-container">
			<div class="top-banner__image">
				<img src="./images/top-banner-author.jpg" alt="author image">
			</div>
			<div class="top-banner__text">
				<div class="top-banner__text-up">
					<span class="brand-span">Hello! I'm</span>
					<h2 class="top-banner__h2">Jhone</h2>
				</div>
				<div class="top-banner__text-down">
					<h2 class="top-banner__h2">Smith</h2>
					<span class="brand-span">Author, Writer, Traveler</span>
				</div>
				<p>One Man. One Mission. Can He Go Beyond? One Man. One Mission. Can He Go Beyond?</p>
				<p class="brand-button"><?= Html::a('Read bio >', ['authors/authors']) ?> </p>
			</div>
		</div>
	</section>
	<!-- Top banner end -->

	<!-- About me -->
	<section class="fh5co-about-me">
		<div class="about-me-inner site-container">
			<article class="portfolio-wrapper">
				<div class="portfolio__img">
					<img src="./images/about-me.jpg" class="about-me__profile" alt="about me profile picture">
				</div>
				<div class="portfolio__bottom">
					<div class="portfolio__name">
						<span>J</span>
						<h2 class="universal-h2">hone Smith</h2>
					</div>
					<p>Jhone Smith is a short story author, novelist, and award-winning poet.</p>
				</div>
			</article>
			<div class="about-me__text">
				<div class="about-me-slider">
					<div class="about-me-single-slide">
						<h2 class="universal-h2 universal-h2-bckg">About me</h2>
						<p><span>H</span> e has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and the British Fantasy Society journal Dark Horizons. He is also CEO of a company, specializing in custom book publishing and social media marketing services, have created a community for authors to learn and connect.He has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and have created a community for authors to learn and connect.</p>
						<h4>Author</h4>
						<p class="p-white">See me</p>
					</div>
					<div class="about-me-single-slide">
						<h2 class="universal-h2 universal-h2-bckg">About me 2</h2>
						<p><span>H</span> e has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and the British Fantasy Society journal Dark Horizons. He is also CEO of a company, specializing in custom book publishing and social media marketing services, have created a community for authors to learn and connect.He has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and have created a community for authors to learn and connect.</p>
						<h4>Author</h4>
						<p class="p-white">See me</p>
					</div>
				</div>
			</div>
		</div>
		<div class="about-me-bckg"></div>
	</section>
	<!-- About me end -->

	<!-- Books and CD -->
	<section class="fh5co-books">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">New Books</h2>
			<div class="books">
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="./images/books-1.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Olivani</h4>
					<span class="single-book__price">$15.99</span>
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="./images/books-2.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Molleon’s Life</h4>
					<span class="single-book__price">$22.99</span>
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="./images/books-3.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Love is Love</h4>
					<span class="single-book__price">$25.99</span>
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="./images/books-4.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Give Me Also</h4>
					<span class="single-book__price">$30.99</span>
				</div>
			</div>
			<div class="books-brand-button">
				<p class="brand-button"><?= Html::a('View more', ['books/books']) ?> </p>
			</div>
		</div>
	</section>
	<!-- Books end -->

	<!-- Counter -->
	<div class="fh5co-counter counters">
		<div class="counter-inner site-container">
			<div class="single-count">
				<span class="count" data-count="50">0</span>
				<div class="single-count__text">
					<img src="./images/counter-1.png" alt="counter icon">
					<p>Books</p>
				</div>
			</div>
			<div class="single-count">
				<span class="count" data-count="600">0</span>
				<div class="single-count__text">
					<img src="./images/counter-2.png" alt="counter icon">
					<p>Pages</p>
				</div>
			</div>
			<div class="single-count">
				<span class="count" data-count="2000">0</span>
				<div class="single-count__text">
					<img src="./images/counter-3.png" alt="counter icon">
					<p>Sales</p>
				</div>
			</div>
			<div class="single-count">
				<span class="count" data-count="125">0</span>
				<div class="single-count__text">
					<img src="./images/counter-4.png" alt="counter icon">
					<p>Awards</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Counter -->

	<!-- Blog -->
	<section class="fh5co-blog">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">My Blog</h2>
			<div class="blog-slider blog-inner">
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="./images/blog1.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>The Journey Under the Waves</h4>
						<span>On August 28, 2015</span>
						<p>Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
					</div>
				</div>
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="./images/blog2.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>The Journey Under the Waves</h4>
						<span>On August 28, 2015</span>
						<p>Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
					</div>
				</div>
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="./images/blog2.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>The Journey Under the Waves</h4>
						<span>On August 28, 2015</span>
						<p>Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog end -->
	
	<!-- Social -->
	<section class="fh5co-social">
		<div class="site-container">
			<div class="social">
				<h5>Follow me!!</h5>
				<div class="social-icons">
					<a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
					<a href="#" target="_blank"><img src="./images/social-pinterest.png" alt="social icon"></a>
					<a href="#" target="_blank"><img src="./images/social-youtube.png" alt="social icon"></a>
					<a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
				</div>
				<h5>Share it!</h5>
			</div>
		</div>
	</section>
	<!-- Social -->

