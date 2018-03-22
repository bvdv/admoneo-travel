<?php
/**
*Template Name: mytemp
*Template Post Type: post, category
*Template Category Type: category
*/
?>

<?php
get_header();
?>

  
<?php

echo "<br><br><br><br>";




global $post;
$args = array( 'posts_per_page' => 3, 'category_name' => 'flights' );
$lastposts = get_posts( $args );
foreach ( $lastposts as $post ) :
  setup_postdata( $post ); ?>
  <div class="container">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<br>

	<?php the_content(); ?>
		
	</div>
<?php endforeach; 
wp_reset_postdata();

?>

<?php
get_footer();
?>