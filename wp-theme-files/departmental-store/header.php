<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package departmental-store
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">


<header class="container-fluid ds-header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="header-wrap">
					<div class="logo-wrap">
						<h1 class="logo_hdng">
							<a href="/">
							<?php if( get_custom_logo() ) {
                                 the_custom_logo();
							}else{ 
                             echo get_bloginfo( 'name' );
								   }
                                ?>   
                             </a>
                             </a>
						</h1>
					</div>
					<div class="search-wrap">
						<div class="inner ds-header-search">
							
							<?php echo do_shortcode( '[smart_search id="1"]' ); ?>
							
						</div>
					</div>
					<div class="login-signup-wrap">
						<div class="inner ds-right">
							<ul>
								<?php 
								// if user not login then display Login with Signup
								if(! is_user_logged_in()){						
									echo '<li><a href="https://'.$_SERVER['HTTP_HOST'].'/my-account/"><span class="icon fas fa-user-circle"></span><span class="text">Login</span></a></li>';							
									echo '<li><a href="https://'.$_SERVER['HTTP_HOST'].'/my-account/">Signup</a></li>';							
								}
								// if user login then display Logout only
									else {							
										echo '<li><a href="https://'.$_SERVER['HTTP_HOST'].'/my-account/customer-logout/?_wpnonce=241003ab42"><span class="icon fas fa-sign-out-alt"></span><span><span class="text">Logout</span></a></li>';
									}
								?>
							</ul>
						</div>
						<div class ="ds-cart-outer ds-right">
						<a href="/cart" id="cart_icon">
							<div class="ds-cart">
								<span class="pe-7s-cart icon"></span>
								<span class="items_count counter" id="cart-count">
									<?php
										$cart_count = WC()->cart->get_cart_contents_count();
										echo sprintf ( _n( '%d', '%d', $cart_count ), $cart_count );
									?>			
									</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<nav class="container-fluid ds-nav-bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-6">
				<div class="inner cat_dropdown header-cat">
					<h4>
						<span class="fas fa-bars"></span>
						Category

						<i class="fas fa-angle-down"></i>
					</h4>
					<div class="category-wrap">
						<span class="cat-close cross" id="cat-close">
							<i class="fas fa-times"></i>
						</span>
						<?php echo do_shortcode( '[searchandfilter id="category_menu"]' );?>

					</div>
				</div>
			</div>
			<div class="col-lg-9 col-6 d-flex align-items-center">
			<div class="menu-wrap">
				<div class="menu-hamburger">
					<h4>
						<span class="fas fa-bars"></span> Menu
					</h4>
					<i class="fas fa-angle-down"></i>
				</div>
					<div class="inner menu">
						<span class="d-none menu-close cross" id="menu-close">
							<i class="fas fa-times fa-angle-up fa-angle-down"></i>
						</span>
						<?php
						wp_nav_menu(  array(
							'menu'              => "menu-1", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
							'menu_class'        => "main-menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
							'menu_id'           => "primary-menu", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
							'container'         => "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
							'container_class'   => "header-main-menu", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
							'theme_location'    => "primary_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
							'before'               => '<div class="a-Wrap">', // (string) Text before the link text.
							'after'                => '</div>', // (string) Text after the link text.
						) );
						?>					
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<style>

.ds-latest-product h3.vc_custom_heading,
.ds-best-seller h3.vc_custom_heading,
.ds-slider-products h3.vc_custom_heading{
    font-size: 42px;
    font-family: 'Rozha One', serif;
    font-weight: 400;
}

.ds-latest-product h6.vc_custom_heading,
.ds-best-seller h6.vc_custom_heading,
.ds-slider-products h6.vc_custom_heading{
    font-weight: normal;
    color: var(--light-text)!important;
    opacity: 0.7;
}

</style>
