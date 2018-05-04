<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Admoneo_travel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<nav class="navbar navbar-default">

		<?php 
  // Fix menu overlap
		if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>'; 
			?>

			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" title="HOME">Admoneo <span>travel</span></a>
				</div> <!-- /.navbar-header -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					

					
					<?php wp_nav_menu(array(
						'theme_location'  => 'menu-1',
						'menu_id'         => 'primary-menu', 
						'menu_class'      => 'nav navbar-nav navbar-right',
						'container'       => 'ul',
						)); ?>

					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>



			
			<?php custom_header_title(); ?>





<div id="content" class="site-content">
