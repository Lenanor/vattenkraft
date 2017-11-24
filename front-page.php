
 <?php get_header(); ?>

 <?php get_template_part( 'template-parts/nav', 'barandlogo'); ?>


 <!-- SEKTION 1: blå logga, blå bubblor-->
 <section class="blue-wrap">
	<img class="blue-logo" src="<?php bloginfo('template_directory');?>/src/img/logo_blue.png">

	<img class="blue-bubbles" src="<?php bloginfo('template_directory');?>/src/img/blue_bubbles.png">
</section>



<!-- SCROLL EFFECT - bubbles -->
<section class="bubbles-section-wrap">
	<?php get_template_part( 'template-parts/bubbels', ''); ?>
</section>



<!--  SEKTION 2: Custom Post Type + ACF hö / vä -->
<section class="cpt-left-right 11" id="section2">
	<?php get_template_part( 'template-parts/content', 'textandpic'); ?>
</section>



<!-- SEKTION 3: Custom Post Type + ACF Bollar -->
<section class="cpt-circles" id="section3">
	<?php get_template_part( 'template-parts/content', 'textandcircle'); ?>
</section>


<!-- SEKTION 4: Text på själva front page -->
<section class="front-page-text" id="section4">
	<?php get_template_part('template-parts/front', 'text')?>
</section>

<!-- SEKTION 5: posts -->
<section class="posts" id="section5">
	<?php get_template_part('template-parts/posts', '')?>
</section>

<!-- SEKTION 6: sidebar med text widgets -->
<section class="main-sidebar" id="section6">
		<?php get_sidebar( 'main-sidebar' ); ?>
</section>

<?php get_footer(); ?>