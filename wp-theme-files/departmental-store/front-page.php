<?php
/**
 * The template for displaying Home Page
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

<div class="container-fluid px-0">
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>


<?php
get_footer();
