
<?php

$num_posts = ( is_front_page() ) ? 3 : -1; 
 // -1 > all posts show 


$args = array(
    'post_type' => 'circles_text',
    'posts_per_page' => $num_posts
);

$query = new WP_Query( $args );?>

<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

<div class="text-circle-group-wrap">

	<?php $color = get_field('backgroundcolor');?>

	<div class="<?php echo $color ?>">
		<div class="text-heading-wrap">
			<h3><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h3>
			<p><?php  the_content(); ?></p>
		</div>
	</div>

</div>



<?php endwhile; endif; wp_reset_postdata(); ?>