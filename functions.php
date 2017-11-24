<?php


// Enqueues style.css
function vattenfall_styles() {
	wp_enqueue_style( 'main_css', get_stylesheet_uri() );
    wp_enqueue_style( 'aos_css', 'https://cdn.rawgit.com/michalsnik/aos/2.0.1/dist/aos.css' );
    wp_enqueue_style( 'jquery_css', 'http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css' );
}
add_action( 'wp_enqueue_scripts', 'vattenfall_styles' );




// Enqueues scripts (app.js with dependencies aos and jquery)
function vattenfall_js() {
    wp_enqueue_script('aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js');
    wp_enqueue_script('main_js', get_template_directory_uri() . '/src/js/app.js', array('aos', 'jquery'),'', true );
}
add_action( 'wp_enqueue_scripts', 'vattenfall_js');





//SIDEBAR metod 3
function vattenfall_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'vattenfall' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Sidebar for text widgets.' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar', 'vattenfall' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Widget area in footer.' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
    ) );
}
add_action( 'widgets_init', 'vattenfall_widgets_init' );
?>
