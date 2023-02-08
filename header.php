<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shop_x
 */

?>
<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'shop-x' );?></a>
        <!-- ======main header start ======-->
        <header id="masthead" class="site-header">
            <div class="container">
                <div class="small-header">
                    <div class="row">
                        <div class="mega-box col-md-11 m-auto">
                            <div class="row">
                                <div class="mega-box-left col-md-8">
                                    <?php
wp_nav_menu( array(
    'theme_location' => 'megabox-menu-2',
    'menu_id'        => 'mega-menu-header',
    'menu_class'     => 'mega-box-menu',
) );
?>
                                </div>
                                <div class="mega-box-right col-md-4">
                                    <?php
wp_nav_menu( array(
    'theme_location' => 'megabox-menu-1',
    'menu_id'        => 'mega-box-social',
    'menu_class'     => 'mega-social-icon',
) );
?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="big-header sticky-top">
                    <div class="row">
                        <div class="navbrand col-md-3">

                            <div class="nav-toggler">
                                <button><i class="fa-solid fa-bars"></i></button>
                            </div>
                            <div class="nav-branding">
                                <?php
the_custom_logo();
?>
                            </div>

                        </div>
                        <div class=" col-md-6">
                            <form action="" method="get">
                                <div class="searchbox">
                                    <input type="text" class="form-control" id="header-search" placeholder="Search..."
                                        name="s">
                                    <select name="category" id="category" class="form-control">
                                        <option value="0">Category</option>
                                        <option value="1">Men</option>
                                        <option value="2">Women</option>
                                        <option value="3">Kids</option>
                                    </select>
                                    <button type="submit" id="btn-search"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                </div>

                            </form>
                        </div>
                        <div class="store-button col-md-3">
                            <ul class="store-btn">
                                <li>

                                    <a href="http://shopx.test/shop/"><i class="fa-solid fa-store"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="http://shopx.test/my-account/"><i class="fa-regular fa-user"></i></a>
                                </li>
                                <li>
                                    <a href="http://shopx.test/cart/" class="position-relative"><i
                                            class="fa-solid fa-cart-shopping ">
                                            <span class="cart-count">
                                                3
                                            </span>

                                        </i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->
        <!-- ======main header end ======-->
        <div class="container">