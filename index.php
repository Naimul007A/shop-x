<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shop_x
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- hero area start -->
    <section class="hero_area_box pt-5">
        <div class="container">
            <div class="hero-area-wrap">
                <div class="row">
                    <div class="col-md-6 hero-box-text-area">
                        <div class="hero-area-box-text">
                            <h2><?php echo get_theme_mod( 'shop-x_hero_area_headding' ) ?></h2>
                            <p><?php echo get_theme_mod( 'shop-x_hero_area_paragraph' ) ?></p>
                        </div>
                        <div class="hero-area-box-btn">
                            <div class="hero-area-box-btn-item">
                                <a href="<?php echo get_theme_mod( 'shop-x_hero_area_button_1_link' ) ?> ">
                                    <?php echo get_theme_mod( 'shop-x_hero_area_button_1' ) ?>
                                    <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                            </div>
                            <div class="hero-area-box-btn-item">
                                <a href="<?php echo get_theme_mod( 'shop-x_hero_area_button_2_link' ) ?>">
                                    <?php echo get_theme_mod( 'shop-x_hero_area_button_2' ) ?>
                                    <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                            </div>
                            <div class="hero-area-box-btn-item">
                                <a href="<?php echo get_theme_mod( 'shop-x_hero_area_button_3_link' ) ?>">
                                    <?php echo get_theme_mod( 'shop-x_hero_area_button_3' ) ?>
                                    <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                            </div>

                        </div>
                    </div>
                    <div class="hero-area-box-slide col-md-6">
                        <div class="hero-area-box-slider">
                            <div class="hero-area-box-slider-item">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <a href="<?php echo get_theme_mod( 'shop-x_hero_area_slider_1_link' ) ?>">
                                                <img src="<?php echo get_theme_mod( 'shop-x_hero_area_slider_1' ) ?>"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="<?php echo get_theme_mod( 'shop-x_hero_area_slider_2_link' ) ?>">
                                                <img src="<?php echo get_theme_mod( 'shop-x_hero_area_slider_2' ) ?>"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="<?php echo get_theme_mod( 'shop-x_hero_area_slider_3_link' ) ?>">
                                                <img src="<?php echo get_theme_mod( 'shop-x_hero_area_slider_3' ) ?>"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                        <span class="fa-solid fa-angle-left" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>

                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                        <span class="fa-solid fa-angle-right" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end -->
    <section class="store-feature">
        <div class="container">
            <div class="store-feature-wrap">
                <div class="row">
                    <div class="col-md-3">
                        <div class="store-feature-item">
                            <div class="store-feature-item-icon">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/worldwide-shipping.png' ?>"
                                    alt="">
                            </div>
                            <div class="store-feature-item-text">
                                <h6>Global Shipping</h6>
                                <p>Shop from anywhere in the world. We ship worldwide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="store-feature-item">
                            <div class="store-feature-item-icon">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/data-protection.png' ?>"
                                    alt="">
                            </div>
                            <div class="store-feature-item-text">
                                <h6>Safe Checkout</h6>
                                <p>We protect our customer's data at any cost.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="store-feature-item">
                            <div class="store-feature-item-icon">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/card-payment.png' ?>"
                                    alt="">
                            </div>
                            <div class="store-feature-item-text">
                                <h6>Easy Returns</h6>
                                <p>We have a free return& exchange policy</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="store-feature-item">
                            <div class="store-feature-item-icon">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/call-center.png' ?>"
                                    alt="">
                            </div>
                            <div class="store-feature-item-text">
                                <h6>Help & Support</h6>
                                <p>We are available 24/7 to assist you with any issue.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Category box area start -->
    <section class="category-box">
        <div class="category-box-slide container">
            <!-- Set up your HTML -->
            <div class="owl-carousel">
                <?php
// The Query
$cat_slider = new WP_Query( [
    'post_type'   => 'categoryslider',
    'post_status' => 'publish',
] );

// The Loop
if ( $cat_slider->have_posts() ) {
    $i = 1;
    while ( $cat_slider->have_posts() ) {
        $i++;
        $cat_slider->the_post();?>

                <div class="">

                    <div class="row ">
                        <div class="<?php echo "order" . $i ?> col-md-8">
                            <div class="category-slider-head">
                                <div class="category-box-slider-head">
                                    <h2 class="category-box-slider-heading">
                                        <?php the_field( 'shopx_cat_slider_heading' );?>
                                    </h2>
                                </div>

                                <div class="category-box-slider-btn">
                                    <a href="<?php the_field( 'shopx_cat_slider_box_link' );?>">More<i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>

                            <div class="category-slider-items row">
                                <div class="category-slider-item col-md-4">
                                    <!-- box 1 -->
                                    <?php
$box_1_data = get_field( 'shopx_cat_slider_slider_box_1' );
        // print_r( $box_1_data );

        $box_1_icon = $box_1_data['slider_box_1_icon']['sizes']['medium'];

        ?>
                                    <div class="cat-slide-items">
                                        <a href="<?php echo $box_1_data['slider_box_url']; ?>">

                                            <div class="cat-slide-icon">
                                                <img src="<?php echo $box_1_icon ?>" alt="">

                                            </div>
                                            <div class="cat-slide-heading">
                                                <h2><?php echo $box_1_data['slider_box_name']; ?></h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="category-slider-item col-md-4">
                                    <!-- box-2  -->
                                    <?php
$box_2_data = get_field( 'shopx_cat_slider_slider_box_2' );
        // print_r( $box_2_data );
        $image_id = $box_2_data['slider_box_1_icon'];
        $image    = wp_get_attachment_image( $image_id );

        ?>
                                    <div class="cat-slide-items">
                                        <a href="<?php echo $box_2_data['slider_box_url']; ?>">

                                            <div class="cat-slide-icon">
                                                <?php echo $image; ?>
                                            </div>
                                            <div class="cat-slide-heading">
                                                <h2>
                                                    <?php echo $box_2_data['slider_box_name']; ?>
                                                </h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="category-slider-item col-md-4">
                                    <!-- box-3  -->
                                    <?php
$box_3_data = get_field( 'shopx_cat_slider_slider_box_3' );
        // print_r( $box_3_data );
        $image_id = $box_3_data['slider_box_1_icon'];
        $image    = wp_get_attachment_image( $image_id );

        ?>
                                    <div class="cat-slide-items">
                                        <a href="<?php echo $box_3_data['slider_box_url']; ?>">

                                            <div class="cat-slide-icon">
                                                <?php echo $image; ?>
                                            </div>
                                            <div class="cat-slide-heading">
                                                <h2>
                                                    <?php echo $box_3_data['slider_box_name']; ?>
                                                </h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="category-slider-item col-md-4">
                                    <!-- box-4  -->
                                    <?php
$box_4_data = get_field( 'shopx_cat_slider_slider_box_4' );
        // print_r( $box_2_data );

        $image_id = $box_4_data['slider_box_1_icon'];
        $image    = wp_get_attachment_image( $image_id );

        ?>
                                    <div class="cat-slide-items">
                                        <a href="<?php echo $box_4_data['slider_box_url']; ?>">

                                            <div class="cat-slide-icon">
                                                <?php print_r( $image );?>
                                            </div>
                                            <div class="cat-slide-heading">
                                                <h2>
                                                    <?php echo $box_4_data['slider_box_name']; ?>
                                                </h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="category-slider-item col-md-4">
                                    <!-- box-5  -->
                                    <?php
$box_5_data = get_field( 'shopx_cat_slider_slider_box_5' );
        // print_r( $box_2_data );
        $image_id = $box_5_data['slider_box_1_icon'];
        $image    = wp_get_attachment_image( $image_id );

        ?>
                                    <div class="cat-slide-items">
                                        <a href="<?php echo $box_5_data['slider_box_url']; ?>">

                                            <div class="cat-slide-icon">
                                                <?php print_r( $image );?>
                                            </div>
                                            <div class="cat-slide-heading">
                                                <h2>
                                                    <?php echo $box_5_data['slider_box_name']; ?>
                                                </h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="category-slider-item col-md-4">
                                    <!-- box-6 -->
                                    <?php
$box_6_data = get_field( 'shopx_cat_slider_slider_box_6' );
        // print_r( $box_6_data );

        $box_6_icon = $box_6_data['slider_box_1_icon']['sizes']['medium'];

        ?>
                                    <div class="cat-slide-items">
                                        <a href="<?php echo $box_6_data['slider_box_url']; ?>">

                                            <div class="cat-slide-icon">
                                                <img src="<?php echo $box_6_icon; ?>" alt="">
                                            </div>
                                            <div class="cat-slide-heading">
                                                <h2>
                                                    <?php echo $box_6_data['slider_box_name']; ?>
                                                </h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="<?php echo "order" . $i ?> col-md-4">
                            <div class="cate-model-photo">
                                <?php the_post_thumbnail( 'full' );?>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
}

} else {
    // no posts found
    echo " no posts found";
}
/* Restore original Post Data */
wp_reset_postdata();
?>


            </div>

        </div>

    </section>

</main><!-- #main -->

<?php

get_footer();