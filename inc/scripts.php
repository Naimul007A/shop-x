<?php
//enqueue scripts or calling css &js all file
function shop_x_scripts() {
    //bootstrap css enqueue
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '5.0.2' );
    //frontawsome-all css enqueue
    wp_enqueue_style( 'frontawsome-all', get_template_directory_uri() . "/assets/frontawsome/css/all.min.css", array(), '6.2.1' );
    //frontawsome-v4 css enqueue
    wp_enqueue_style( 'frontawosome-v4', get_template_directory_uri() . "/assets/frontawsome/css/v4-shims.min.css", array(), '6.2.1' );
    //owl carousel style calling
    wp_enqueue_style( 'carousel', get_template_directory_uri() . "/owl-carousel/assets/owl.carousel.min.css", array(), '6.2.1' );
    //default style enqueue
    wp_enqueue_style( 'shop-x-style', get_stylesheet_uri(), array(), _S_VERSION );
    //rtl css enqueue
    wp_style_add_data( 'shop-x-style', 'rtl', 'replace' );
    //custom style enqueue
    wp_enqueue_style( 'shop-custom-style', get_template_directory_uri() . "/assets/css/Main-Style.css", array(), _S_VERSION );
    //custom woo-commerce style enqueue
    wp_enqueue_style( 'shop-woo-commerce-custom-style', get_template_directory_uri() . "/assets/css/woo-commerce_custom.css", array(), _S_VERSION );

    //jquery calling
    wp_enqueue_script( "jquery" );
    //bootstrap js file enqueue
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), '5.0.2', true );
    //shop-x-navigation js file enqueue
    wp_enqueue_script( 'shop-x-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    //custom script calling
    wp_enqueue_script( 'shop-x-custom-script', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
    //owl carousel script calling
    wp_enqueue_script( 'shop-x-carousel-script', get_template_directory_uri() . '/owl-carousel/owl.carousel.min.js', array(), _S_VERSION, true );
    //comment reply calling
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'shop_x_scripts' );