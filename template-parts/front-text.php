<?php

	
if( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post() ?>
		<h2><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h2>
		<div class="content">
			<?php the_content(); ?>
		</div>
	<?php endwhile ?>
<?php else : ?>
	<p>Oh No, there are no posts!</p>
<?php endif ?> 
	
