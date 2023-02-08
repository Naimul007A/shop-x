<?php
/**
 * shop x Theme Customizer
 *
 * @package shop_x
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function shop_x_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'shop_x_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'shop_x_customize_partial_blogdescription',
            )
        );
    }
    //footer option register
    $wp_customize->add_section( 'shop-x_footer_option', array(
        'title'        => esc_html__( 'Footer Option', 'shop-x' ),
        'descripition' => 'if you need to change your footer option.You can do it here',
    ) );
    $wp_customize->add_setting( 'shopx_footer_site_info', array(
        'default' => 'Copyright © 2022 - All Rights Reserved.',
    ) );
    $wp_customize->add_control( 'shopx_footer_site_info', array(
        'label'       => 'Footer Text',
        'description' => 'write here.what do you want.',
        'section'     => 'shop-x_footer_option',
        'setting'     => 'shopx_footer_site_info',
    ) );
    //hero area register
    $wp_customize->add_section( 'shop-x_hero_area_option', array(
        'title'       => 'Hero Area',
        'description' => 'you can change here hero area',
    ) );
    // heading text
    $wp_customize->add_setting( 'shop-x_hero_area_headding', array(
        'default' => 'Imagine the Fashion Adventures.',
    ) );
    $wp_customize->add_control( 'shop-x_hero_area_headding', array(
        'label'       => 'Headding Text',
        'description' => 'Write your headding text.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_headding',
    ) );
    // paragraph text
    $wp_customize->add_setting( 'shop-x_hero_area_paragraph', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
        ullamcorper mattis, pulvinar dapibus leo.',
    ) );
    $wp_customize->add_control( 'shop-x_hero_area_paragraph', array(
        'label'       => 'Paragraph Text',
        'description' => 'Write your paragraph text.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_paragraph',
    ) );
    // First button
    $wp_customize->add_setting( 'shop-x_hero_area_button_1', array(
        'default' => 'man',
    ) );
    $wp_customize->add_control( 'shop-x_hero_area_button_1', array(
        'label'       => 'First Button(1)',
        'description' => 'Write your button name.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_button_1',
    ) );
    // First button Link
    $wp_customize->add_setting( 'shop-x_hero_area_button_1_link', array(
        'default' => '#',
    ) );
    $wp_customize->add_control( 'shop-x_hero_area_button_1_link', array(
        'label'       => 'First Button Link',
        'description' => 'Set your link.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_button_1_link',
    ) );
    // second button
    $wp_customize->add_setting( 'shop-x_hero_area_button_2', array(
        'default' => 'women',
    ) );
    $wp_customize->add_control( 'shop-x_hero_area_button_2', array(
        'label'       => 'Second Button(2)',
        'description' => 'Write your button name.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_button_2',
    ) );
    // second button Link
    $wp_customize->add_setting( 'shop-x_hero_area_button_2_link', array(
        'default' => '#',
    ) );
    $wp_customize->add_control( 'shop-x_hero_area_button_2_link', array(
        'label'       => 'Second Button Link',
        'description' => 'Set your link.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_button_2_link',
    ) );
    // third button
    $wp_customize->add_setting( 'shop-x_hero_area_button_3', array(
        'default' => 'kids',
    ) );
    $wp_customize->add_control( 'shop-x_hero_area_button_3', array(
        'label'       => 'Third Button(3)',
        'description' => 'Write your button name.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_button_3',
    ) );
    // third button Link
    $wp_customize->add_setting( 'shop-x_hero_area_button_3_link', array(
        'default' => '#',
    ) );
    $wp_customize->add_control( 'shop-x_hero_area_button_3_link', array(
        'label'       => 'Third Button Link',
        'description' => 'Set your link.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_button_3_link',
    ) );
    // Slider Image one
    $wp_customize->add_setting( 'shop-x_hero_area_slider_1', array(
        'default' => get_bloginfo( 'template_directory' ) . '/assets/img/banner-image-1.png',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'shop-x_hero_area_slider_1', array(
        'label'       => 'Slider Image One(1)',
        'description' => 'Upload a image.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_slider_1',
    ) ) );
    // Slider Image one Link
    $wp_customize->add_setting( 'shop-x_hero_area_slider_1_link', array(
        'default' => '#',
    ) );
    $wp_customize->add_control( 'shop-x_hero_area_slider_1_link', array(
        'label'       => 'Slider Image One Link',
        'description' => 'Set your link.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_slider_1_link',
    ) );
    // Slider Image two
    $wp_customize->add_setting( 'shop-x_hero_area_slider_2', array(
        'default' => get_bloginfo( 'template_directory' ) . '/assets/img/banner-image-2.png',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'shop-x_hero_area_slider_2', array(
        'label'       => 'Slider Image Two(2)',
        'description' => 'Upload a image.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_slider_2',
    ) ) );
    // Slider Image Two Link
    $wp_customize->add_setting( 'shop-x_hero_area_slider_2_link', array(
        'default' => '#',
    ) );
    $wp_customize->add_control( 'shop-x_hero_area_slider_2_link', array(
        'label'       => 'Slider Image Two Link',
        'description' => 'Set your link.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_slider_2_link',
    ) );
    // Slider Image Three
    $wp_customize->add_setting( 'shop-x_hero_area_slider_3', array(
        'default' => get_bloginfo( 'template_directory' ) . '/assets/img/banner-image-3.png',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'shop-x_hero_area_slider_3', array(
        'label'       => 'Slider Image Three(3)',
        'description' => 'Upload a image.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_slider_3',
    ) ) );
    // Slider Image Three Link
    $wp_customize->add_setting( 'shop-x_hero_area_slider_3_link', array(
        'default' => '#',
    ) );
    $wp_customize->add_control( 'shop-x_hero_area_slider_3_link', array(
        'label'       => 'Slider Image Three Link',
        'description' => 'Set your link.',
        'section'     => 'shop-x_hero_area_option',
        'setting'     => 'shop-x_hero_area_slider_3_link',
    ) );
}
add_action( 'customize_register', 'shop_x_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function shop_x_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function shop_x_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function shop_x_customize_preview_js() {
    wp_enqueue_script( 'shop-x-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'shop_x_customize_preview_js' );