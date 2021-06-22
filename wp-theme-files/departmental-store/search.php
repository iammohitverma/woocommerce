<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                Search
				</h2>
				<p>
					<span>Home</span>
					/
					<span>
					Search
					</span>
				</p>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<main id="primary" class="container">
		<div class="row">
		<?php if ( have_posts() ) : ?>

			<header class="page-header search-page">
				<h3 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'departmental-store' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h3>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</div>
	</main><!-- #main -->
	</div>
<?php
get_footer();
