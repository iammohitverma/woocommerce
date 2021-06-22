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
 * @package departmental-store
 */

get_header();
?>

<div class="container-fluid ds-breadcrumbs" style="background-image:url(https://store.tmdemo.in/wp-content/uploads/2021/06/bg_breadcrum-1.jpg);">
	<div class="container">
		<div clas="row">
			<div class="col-12">
				<h2>
                <?php echo get_the_title();?>
				</h2>
				<p>
					<span>Home</span>
					/
					<span>
						<?php echo get_the_title();?>
					</span>
				</p>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid px-0">
	<div class="container">
		<?php echo the_content(); ?>
	</div>
</div>

	


<?php
get_footer();
?>
