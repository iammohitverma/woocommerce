<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
					Product Details
				</h2>
				<p>
					<span>Home</span>
					/
					<span>Product</span>
					/
					<span>
						<?php echo get_the_title();?>
					</span>
				</p>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid ds-single">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					// the_post_navigation(
					// 	array(
					// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'departmental-store' ) . '</span> <span class="nav-title">%title</span>',
					// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'departmental-store' ) . '</span> <span class="nav-title">%title</span>',
					// 	)
					// );

					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;

				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
</div>

<?php print_r(the_post()); ?>
<?php
get_footer();
