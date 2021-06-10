<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package klinika
 */

?>

<footer id="colophon" class="section site-footer">
    <div class="site-footer__container">
        <div class="site-footer__brand">
            <?php the_custom_logo(); ?>
        </div>
        <?php if (is_active_sidebar('sidebar-2')) : ?>

            <?php dynamic_sidebar('sidebar-2'); ?>

        <?php endif; ?>

    </div><!--site-footer__container -->
    <div class="site-info">
        <span class="sep"> | </span>
        Copyright © <?php echo date('Y'); ?> Kliniki Ziemlewski.<br>
        Wszelkie prawa zastrzeżone
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
 jQuery(document).ready(function(){
    jQuery('.main-slider').slick({
        "arrows" : false,
        "dots" : true,
        "items" : 1
    });
     AOS.init();
});    
</script>
</body>
</html>

