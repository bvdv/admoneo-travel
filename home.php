<?php
get_header();
?>

  
<?php

global $post;
$args = array('category_name' => 'accommodation', 'suppress_filters' => true );
$lastposts = get_posts( $args ); ?>
<div class="container">
 <div class="row">
<?php
foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
  
  
  	<div class="col-sm-4">	
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); //the_content(); ?>
	</div>
	 
<?php endforeach; ?>
</div>	
</div>

<?php
wp_reset_postdata();
?>

<?php
get_footer();
?>