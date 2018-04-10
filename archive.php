<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Admoneo_travel
 */

get_header();
?>

  <div class="container"> 
  	
  	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<!--<header class="page-header">
				<?php
				//the_archive_title( '<h3 class="page-title">', '</h3>' );
				//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>--><!-- .page-header -->

            <div class="row"> 
			<?php

			$count_post = 0;
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
                $count_post += 1;
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				if ($count_post % 3 == 0) : 
				  //get_template_part( 'template-parts/content', get_post_type() );
				  ?></div><div class="row"><?php 
                endif;
                  

			endwhile;
			?></div><?php 




			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
  </div><!-- #container -->
<?php

get_footer();
