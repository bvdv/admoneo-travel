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
		<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php" title="HOME">Admoneo <span>travel</span></a>
			</div> <!-- /.navbar-header -->

	    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
				

				
	            <?php wp_nav_menu(array(
	            	'theme_location'  => 'primary', 
	            	'menu_class'      => 'nav navbar-nav navbar-right',
	            	'container'       => 'ul',
	            	//'container_class' => 'collapse navbar-collapse',



	            )); ?>
				
				
                

                <!--
			    <ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="transport.html">Транспорт</a></li>
					<li><a href="prozhivanie.html">Проживание</a></li>
					<li><a href="zdor_bez.html">Здоровье и безопасность</a></li>
					<li><a href="media.html">Видео, книги, карты</a></li>
					<li><a href="about.html">about</a></li>
					<li><a href="services.html">services</a></li>
					<li><a href="contact.html">contact</a></li>
				</ul>--> <!-- /.nav -->
		    </div><!-- /.navbar-collapse -->
	  	</div><!-- /.container -->
	</nav>

<section class="section-background">
		<div class="container">
			<h2 class="page-header">
				<?php the_title(); ?>
			</h2>
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">&nbsp;<?php the_title(); ?></li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->


<!--	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'admoneo-travel' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$admoneo_travel_description = get_bloginfo( 'description', 'display' );
			if ( $admoneo_travel_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $admoneo_travel_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'admoneo-travel' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</header>
-->  

	<div id="content" class="site-content">
