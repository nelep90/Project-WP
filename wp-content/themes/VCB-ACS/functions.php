<?php


/* Chargement de la feuille du style du theme parent */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-VCB-Promo17-style', get_template_directory_uri() . 'novellite/style.css' );
}
 
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
  wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
    wp_enqueue_style( 'VCB_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css',array(), VCB_VERSION ,'1.0.0', 'all');
    wp_enqueue_script( 'VCB_script', get_template_directory_uri() . '/js/main.js',array(jquery), VCB_VERSION, true);
  }
 
// Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
  register_sidebar( array(
                  'name'          => 'Sidebar',
                  'id'            => 'sidebar',
                  'before_widget' => '<div>',
                  'after_widget'  => '</div>',
                  'before_title'  => '<h2>',
                  'after_title'   => '</h2>',
  ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );

// Register a new navigation menu
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

//admin_init
add_action('admin_init','vcb_admin_scripts');

// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' ); 
