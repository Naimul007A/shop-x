<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shop_x
 */

?>
</div>
<footer id="colophon" class="site-footer">
    <section class="site-info">
        <div class="container">
            <div class="footer-last col-md-11 m-auto">
                <div class="row">
                    <div class="col-md-6 footermenu">
                        <?php
wp_nav_menu( array(
    'theme_location' => 'footer-menu-1',
    'menu_class'     => 'footer-menu',
) )
?>
                    </div>
                    <div class="col-md-6 footerinfo">
                        <?php echo get_theme_mod( 'shopx_footer_site_info' ) . "<span>Developed by<a href='#'> Naimul Islam</a> </span>"; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer();?>

</body>

</html>