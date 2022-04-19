<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package outfitlada
 */

get_header();
?>

	<main id="primary" class="site-main">

	<section class="pb-5">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo get_template_directory_uri();?>/img/slider/slide-1.jpg" class="d-block w-100 img-fluid" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h1>Discover the <br> best of the best</h1>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri();?>/img/slider/slide-2.jpg" class="d-block w-100 img-fluid" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h1>Discover the <br> best of the best</h1>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri();?>/img/slider/slide-3.jpg" class="d-block w-100 img-fluid" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h1>Discover the <br> best of the best</h1>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>

	<section class="container popular-products">
		<h1 class="text-center pt-5">
			Popular Products
		</h1>

		<div class="py-5">
			<?php echo do_shortcode('[products popularity columns=4 limit=4]'); ?>
		</div>
	</section>

	<section class="categories py-5">
		<div class="container">
			<h1 class="text-center pt-5">Categories</h1>

			<div class="py-5">
				<?php echo do_shortcode('[product_categories columns=4 limit=4]'); ?>
			</div>
			
		</div> 
	</section>

	<section class="call-to-action">
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
	</section>

	<section class="container special-offers py-5">
				<h1 class="text-center pt-5">
					Special Offers
				</h1>

				<div class="py-5">
					<?php echo do_shortcode('[sale_products columns=4 limit=4]'); ?>
				</div>
	</section>
	</main>

<?php
get_footer();
?>
