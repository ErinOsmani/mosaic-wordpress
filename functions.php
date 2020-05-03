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


    /*   REGISTER ALL CSS FOR SITE */
    wp_register_style('open-iconic-bootstrap',get_stylesheet_directory_uri().'/css/open-iconic-bootstrap.min.css');
    wp_register_style('animate',get_stylesheet_directory_uri().'/css/animate.css');
    wp_register_style('owl',get_stylesheet_directory_uri().'/css/owl.carousel.min.css');
    wp_register_style('owl.theme',get_stylesheet_directory_uri().'/css/owl.theme.default.min.css');
    wp_register_style('magnific-popup',get_stylesheet_directory_uri().'/css/magnific-popup.css');
    wp_register_style('ionicons',get_stylesheet_directory_uri().'/css/ionicons.min.css');
    wp_register_style('bootstrap-datepicker',get_stylesheet_directory_uri().'/css/bootstrap-datepicker.css');
    // wp_register_style('pr_colorbox_style',get_stylesheet_directory_uri().'/css/jquery.timepicker.css');
    wp_register_style('flaticon',get_stylesheet_directory_uri().'/css/flaticon.css');
    wp_register_style('icomoon',get_stylesheet_directory_uri().'/css/icomoon.css');
   


    
    
    
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

    wp_enqueue_style( 'mosaic_google_fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' );
    wp_enqueue_style( 'animate');
    wp_enqueue_style( 'owl');
    wp_enqueue_style( 'owl.theme');
    wp_enqueue_style( 'magnific-popup');
    wp_enqueue_style( 'ionicons');
    wp_enqueue_style( 'bootstrap-datepicker');
    wp_enqueue_style( 'flaticon');
    wp_enqueue_style( 'icomoon');
   
    // main stylesheet
    wp_enqueue_style( 'mosaic_styles', get_stylesheet_uri() );


}
add_action( 'wp_enqueue_scripts', 'mosaic_style' );


/*
---------  Custom Project Post Type --------
*/
    
// function create_post_type() {
//     register_post_type( 'mosaic_projects',
//       array(
//         'labels' => array(
//           'name' => __( 'Projects' ),
//           'singular_name' => __( 'Projects' )
//         ),
//         'public' => true,
//         'has_archive' => false,
//         'supports' =>  array('slug' => 'Projects')
//       )
//     );
      
// }
// add_action( 'init', 'create_post_type' );

function cw_post_type_projects() {

    $supports = array(
        'title', // post title
        'thumbnail', // featured images
        'excerpt', // post excerpt
        );
    $labels = array(
        'name' => _x('Projects', 'plural'),
        'singular_name' => _x('Projects', 'singular'),
        'menu_name' => _x('Projects', 'admin menu'),
        'name_admin_bar' => _x('Projects', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Project'),
        'new_item' => __('New Project'),
        'edit_item' => __('Edit Project'),
        'view_item' => __('View Project'),
        'all_items' => __('All Project'),
        'not_found' => __('No projects found.'),
    );
    $args = array(
            'supports' => $supports,
            'labels' => $labels,
            'public' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'Projects'),
            'has_archive' => false,
            'hierarchical' => false,
    );
    register_post_type('Projects', $args);
}
add_action('init', 'cw_post_type_projects');
