<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package departmental-store
 */

?>

	<div id="post-<?php the_ID(); ?>" class ='ds-shop-row ds-search-col col-sm-12 col-md-3' <?php # post_class(); ?>>

		<div class='product-thumb'> <?php departmental_store_post_thumbnail(); ?> </div>
		<?php the_title( sprintf( '<p class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>

		<span class="price">
			<?php global $post, $wp_query;
				$postID = $wp_query->post->ID;
				echo do_shortcode( '[add_to_cart id=' . $postID . ']' );
			?>	
		</span>

	</div><!-- #post-<?php the_ID(); ?> -->




