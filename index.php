
<?php get_header(); ?>


 <!-- FÄLT 1: Sned div + blå logga -->
 <section class="angle">

 	<div class="blue-angle"></div> 
 	<img src="<?php bloginfo('template_directory');?>/src/img/logo_blue.png">
 	<img src="<?php bloginfo('template_directory');?>/src/img/bar_blue.png">
 	
 </section>


<!--  FÄLT 2: Custom Post Type + ACF hö / vä -->
<section class="cpt-left-right">


	
</section>

<!-- FÄLT 3: Custom Post Type + ACF Bollar -->
<section class="cpt-circles"></section>

<!-- FÄLT 4: Text på själva front page -->
<section class="front-page-text"></section>

<!-- FÄLT 5: posts -->
<section class="posts">
 <?php get_template_part('template-parts/posts', '')?>
</section>

<!-- FÄLT 6: sidebar med text widgets -->
<section class="sidebar"></section>



<?php get_footer(); ?>