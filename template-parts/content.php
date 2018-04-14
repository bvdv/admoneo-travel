<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Admoneo_travel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php 
  if (!is_single()) : post_class('col-sm-4');
  endif; 
  post_class();
  ?>>
  
	<?php
    if (has_post_thumbnail()) : ?>
      <figure class="thumb-img">
	    <?php admoneo_travel_post_thumbnail(); ?>
	  </figure>
    <?php endif; ?>
    
	  <div class="entry-content">
		<?php
		the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );

		if (is_single()) :
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'admoneo-travel' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
        else : the_excerpt();
        endif;


		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'admoneo-travel' ),
			'after'  => '</div>',
		) );
		?>
	  </div><!-- .entry-content -->
    

</article><!-- #post-<?php the_ID(); ?> -->


