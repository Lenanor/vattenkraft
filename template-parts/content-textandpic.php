<?php

$num_posts = ( is_front_page() ) ? 3 : -1; 
 // -1 > all posts show 


$args = array(
    'post_type' => 'text_and_picture',
    'posts_per_page' => $num_posts
);
$query = new WP_Query( $args );?>

<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>


<?php 
$image = get_field('bild');
$position = get_field('left_or_right');
$color = get_field('color_of_heading');
?>


<div class="text-picture-group-wrap <?php echo $position; ?>">

	<div class="pic">
	    <img src="<?php echo $image['url'] ?>"  />
	</div>

	<div class="text">
		<div class="<?php echo $color; ?>">
	    	<h2><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h2>
		</div>
	    <p id="trigger-11"><?php the_content(); ?></p>
	</div>

</div>



<?php endwhile; endif; wp_reset_postdata(); ?>
