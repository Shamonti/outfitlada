<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package outfitlada
 */

?>

	<footer id="colophon" class="site-footer">

	<div class="bg-primary text-white pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<?php dynamic_sidebar('footer-widget-col-one')?>
				</div>
				<div class="col-sm-6 col-md-3">
				  <?php dynamic_sidebar('footer-widget-col-two')?>
				</div>
				<div class="col-md-4 col-sm-12 ms-auto">
				  <?php dynamic_sidebar('footer-widget-col-three')?>
				</div>
			</div>
		</div>
	</div>

	<div class="container py-2">
		<div class="row d-flex align-items-center">

				<div class="col-6">
					<p class="m-0">&copy; <?php bloginfo('name');?> <?php echo date('Y');?> / Created by <a href="http://www.seoexpartebd.com/" target="_blank">SEO Exparte Bangladesh</a></p>
				</div>
				<div class="offset-3 col-3 h-25 d-flex align-items-center justify-content-end">
					<img src="<?php echo get_template_directory_uri();?>/img/payment-methods.png" class="img-fluid" alt="" loading="lazy">
				</div>
		</div>
	</div>

	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
