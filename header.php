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
Fix menu overlap
 <?php
 //Fix menu overlap
  if (is_admin_bar_showing()) : ?>
    <style scoped>
      .admin-menu-fix {
        min-height: 32px;
      }
      @media (max-width: 782px) {
        .admin-menu-fix {
          min-height: 46px;
        }      
      }
    </style>
    <div class="admin-menu-fix"></div>
  <?php endif; ?>

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

<!--<section class="section-background">-->

		
			
            
			
            
			<?php if (is_category( $category = 'Accommodation' )) : ?>
			  <div class="accommodation">
			    <div class="container">
			    	
			      <h1>Accommodation</h1>
			      Find your the best accommodation in Italy!
			     </div> 
              </div>  
            <?php endif;?>
           

            <?php if (is_category( $category = 'Flights' )) : ?>
              <div class="flights">
                <div class="container">	
                  <div class='skyswid'>

                    <h1>Find your flight to Italy!</h1>
                    
                      <div data-skyscanner-widget="SearchWidget"></div>
			      </div>
			    </div>     
			  </div>   
			<?php endif;?>

			<?php if (is_category( $category = 'Transport' )) : ?>
              <div class="transport">
                <div class="container">	
                  

                    <h1>Transport</h1>
                    Rail transport in Italy
                    
                      
			      
			    </div>     
			  </div>   
			<?php endif;?>

			<?php if (is_category( $category = 'Things to do' )) : ?>
              <div class="thingstodo">
                <div class="container">	
                  

                    <h1>Things to do</h1>
                    Things to do
                      
			      
			    </div>     
			  </div>   
			<?php endif;?>
			

			
		 <!-- /.container -->
	<!-- </section> --> <!-- /.section-background -->


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
