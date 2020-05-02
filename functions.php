<?php 

if (! function_exists('mosaic_setup')):
    function mosaic_setup(){
        // let wordpress handle the title tags
        add_theme_support('title-tag');


    }
endif;
add_action('after_setup_theme', 'mosaic_setup');


/*  Register Menus */

function register_mosaic_menus(){
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu')
        )
    );
}

add_action( 'init', 'register_mosaic_menus');

/* add stylesheet */

function mosaic_style(){

    wp_deregister_script('jquery'); // just enqueue as its already registered 
    /* REGISTER ALL JS FOR SITE */
    wp_register_script('jquery', get_stylesheet_directory_uri().'/js/jquery.min.js');
    wp_register_script('jquery-migrate-3.0.1',get_stylesheet_directory_uri().'/js/jquery-migrate-3.0.1.min.js','','', true);
    wp_register_script('popper',get_stylesheet_directory_uri().'/js/popper.min.js','','', true);
    wp_register_script('bootstrap',get_stylesheet_directory_uri().'/js/bootstrap.min.js','','', true);
    wp_register_script('jquery.easing',get_stylesheet_directory_uri().'/js/jquery.easing.1.3.js','','', true);
    wp_register_script('query.waypoints',get_stylesheet_directory_uri().'/js/jquery.waypoints.min.js','','', true);
    wp_register_script('jquery.stellar',get_stylesheet_directory_uri().'/js/jquery.stellar.min.js','','', true);
    wp_register_script('owl.carousel',get_stylesheet_directory_uri().'/js/owl.carousel.min.js','','', true);
    wp_register_script('jquery.magnific-popup',get_stylesheet_directory_uri().'/js/jquery.magnific-popup.min.js','','', true);
    wp_register_script('aos',get_stylesheet_directory_uri().'/js/aos.js','','', true);
    wp_register_script('jquery.animateNumber',get_stylesheet_directory_uri().'/js/jquery.animateNumber.min.js','','', true);
    wp_register_script('bootstrap-datepicker',get_stylesheet_directory_uri().'/js/bootstrap-datepicker.js','','', true);
    // wp_register_script('jquery.timepicker',get_stylesheet_directory_uri().'/js/jquery.timepicker.min.js');
    wp_register_script('scrollax',get_stylesheet_directory_uri().'/js/scrollax.min.js','','', true);
    wp_register_script('main',get_stylesheet_directory_uri().'/js/main.js','','', true);




    // main stylesheet
    wp_enqueue_style( 'mosaic_styles', get_stylesheet_uri() );
    wp_enqueue_style( 'mosaic_google_fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' );


    /*CALL ALL CSS AND SCRIPTS FOR SITE */
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate-3.0.1');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jquery.easing');
    wp_enqueue_script('query.waypoints');
    wp_enqueue_script('jquery.stellar');
    wp_enqueue_script('owl.carousel');
    wp_enqueue_script('jquery.magnific-popup');
    wp_enqueue_script('aos');
    wp_enqueue_script('jquery.animateNumber');
    wp_enqueue_script('bootstrap-datepicker');
    // wp_enqueue_script('jquery.timepicker');
    wp_enqueue_script('scrollax');
    wp_enqueue_script('main');

}
add_action( 'wp_enqueue_scripts', 'mosaic_style' );