<?php 
/**
 * Enqueue scripts and styles.
 */
 /* Load Roboto font */
function pluton_scripts() {
    /*enqueue of style*/
    wp_enqueue_style('pluton-fonts','http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext', array(), _S_VERSION, "all");
    wp_enqueue_style('pluton-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), _S_VERSION, "all");
    wp_enqueue_style('pluton-bootstrap-responsive', get_template_directory_uri() . '/css/bootstrap-responsive.css', array(), _S_VERSION, "all");
    wp_enqueue_style('pluton-style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION, "all");
    wp_enqueue_style('pluton-css', get_template_directory_uri() . '/css/pluton.css', array(), _S_VERSION, "all");
    wp_enqueue_style('pluton-jquery', get_template_directory_uri() . '/css/jquery.cslider.css', array(), _S_VERSION, "all");
	wp_enqueue_style('pluton-query-bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), _S_VERSION, "all");
    wp_enqueue_style('pluton-animate', get_template_directory_uri() . '/css/animate.css', array(), _S_VERSION, "all");
    /*Fav and touch icons --> */
    wp_enqueue_style('pluton-apple-touch-icon-144', get_template_directory_uri() . '/images/ico/apple-touch-icon-144.png', array(), _S_VERSION, "all");
    wp_enqueue_style('pluton-apple-touch-icon-114', get_template_directory_uri() . '/images/ico/apple-touch-icon-114.png', array(), _S_VERSION, "all");
    wp_enqueue_style('pluton-apple-touch-ico-72', get_template_directory_uri() . '/images/apple-touch-icon-72.png', array(), _S_VERSION, "all");
    wp_enqueue_style('pluton-apple-touch-icon-57', get_template_directory_uri() . '/images/ico/apple-touch-icon-57.png', array(), _S_VERSION, "all");
    wp_enqueue_style('pluton-favicon', get_template_directory_uri() . '/images/ico/favicon.ico', array(), _S_VERSION, "all");
  
    wp_enqueue_style( 'pluton-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'pluton-style', 'rtl', 'replace' );

    /*enqueue of script*/
    
    wp_enqueue_script('pluton-jquery', get_template_directory_uri() . '/js/jquery.js', array(), _S_VERSION, true);
    wp_enqueue_script('pluton-jquery-mixitup', get_template_directory_uri() . '/js/jquery.mixitup.js', array(), _S_VERSION, true);
    wp_enqueue_script('pluton-js-bootstrap.js', get_template_directory_uri() . '/js/bootstrap.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'pluton-modernizr-custom', get_template_directory_uri() . '/js/modernizr.custom.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'pluton-jquery-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'pluton-jquery-cslider', get_template_directory_uri() . '/js/jquery.cslider.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'pluton-jquery-placeholder', get_template_directory_uri() . '/js/jquery.placeholder.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'pluton-jquery-inview', get_template_directory_uri() . '/js/jquery.inview.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'pluton-google-map','https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap', array(), _S_VERSION, true );
    wp_enqueue_script( 'pluton-js-app', get_template_directory_uri() . '/js/app.js', array(), _S_VERSION, true );
    
    
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    
}
add_action( 'wp_enqueue_scripts', 'pluton_scripts' );


; ?>