

<!-- <section class="posts-wrap"> -->
	
	<h2> Senaste nytt </h2>

	<?php $num_posts = ( is_front_page() ) ? 3 : -1; ?>

	<?php $args = array(
	    'post_type' => 'post',
	     'posts_per_page' => $num_posts
	    ); ?>
	
	<?php $allPosts = new WP_Query( $args ) ?>
	
	<?php if( $allPosts->have_posts() ) : ?>
		<?php while( $allPosts->have_posts() ) : ?>
	
				
				<div class="post-loop">
					
						<?php $allPosts->the_post()?>
						<h4><?php the_date('Y-m-d');?></h4>
						<p><?php the_excerpt() ?></p>
					
				</div>
			
	
		<?php endwhile ?>
	
		<?php else : ?>
	
		<?php echo '<p> Inga inlägg hittades. </p>'; ?>
	
	<?php  endif ?>

	<?php wp_reset_postdata() ?>

<!-- </section> -->