<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package klinika
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="description" content="BPCoders">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'klinika'); ?></a>

    <section class="top">
        <header id="masthead" class="site-header header">
            <div class="header__content">
                <div class="site-branding">
                    <?php the_custom_logo(); ?>
                </div><!-- .site-branding -->

                <div class="header__contact-section">
                    <a href="tel:+48000000000">
                        <svg width="22" height="23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.584 1.834H6.417A1.834 1.834 0 004.584 3.67v14.675c0 1.013.82 1.835 1.833 1.835h9.166a1.834 1.834 0 001.834-1.835V3.67c0-1.013-.821-1.835-1.834-1.835zM11 16.51h.01" stroke="#9F9F9F" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>+48 000 000 000</span>
                    </a>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <button class="main-navigation__mobile-menu menu-toggle" aria-controls="primary-menu"
                            aria-expanded="false">
                        <svg width="41" height="40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.922 20h30M5.922 10h30M5.922 30h30" stroke="#fff" stroke-width="2" stroke-linejoin="round"/></svg>
                    </button>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id' => 'primary-menu',
                        )
                    );
                    ?>
                </nav><!-- #site-navigation -->
            </div>
        </header><!-- #masthead -->
        <div id="slider"></div>
    </section>
