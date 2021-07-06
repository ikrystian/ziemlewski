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
    <style>
        .loader {
            position: fixed;
            top:  0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #000;
            z-index: 2000;
            display:  grid;
            place-content: center;
        }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="loader"> <?php the_custom_logo(); ?></div>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'klinika'); ?></a>

    <section class="top">
        <header id="masthead" class="site-header header">
            <div class="header__content">
                <div class="site-branding">
                    <?php the_custom_logo(); ?>
                </div><!-- .site-branding -->

                <div class="header__contact-section">
                    <a href="tel:+48502263133">
                        <svg width="22" height="23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.584 1.834H6.417A1.834 1.834 0 004.584 3.67v14.675c0 1.013.82 1.835 1.833 1.835h9.166a1.834 1.834 0 001.834-1.835V3.67c0-1.013-.821-1.835-1.834-1.835zM11 16.51h.01"
                                  stroke="#9F9F9F" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>+48 502 263 133</span>
                    </a>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <button class="main-navigation__mobile-menu menu-toggle" aria-controls="primary-menu"
                            aria-expanded="false">
                        <svg width="41" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.922 20h30M5.922 10h30M5.922 30h30" stroke="#fff" stroke-width="2"
                                  stroke-linejoin="round"/>
                        </svg>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/burger-close.png" alt="">
                    </button>
                    <div class="mobile-menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id' => 'primary-menu',
                                'menu_class' => 'mm'
                            )
                        );
                        ?>
                    </div>
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
            <div class="mega-menu__wrapper">
                <section class="mega-menu">
                    <button class="close-sub">Wstecz</button>
                    <div class="mega-menu__content">
                        <?php // if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Mega menu')) : endif; ?>
                        <?php $loop = new WP_Query( array( 'post_type' => 'treatment', 'posts_per_page' => -1 ) ); ?>
                        <ul class="full-offer">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <?php the_title( '<li><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></li>' ); ?>
                        <?php endwhile; ?>
                        </ul>
                    </div>
                </section>
            </div>
        </header><!-- #masthead -->
        <div id="slider"></div>
    </section>

    <section class="contact-overlay">
        <div class="contact-overlay__content">
            <button class="contact-overlay__hide-button">
                <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="#9A1830" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
                <span>Powrót</span>
            </button>
            <h2 class="contact-overlay__title">Umów się na konsultacje:</h2>

            <div class="contact-overlay__row">
                <?php echo do_shortcode('[contact-form-7 id="147" title="Sidebar contact form" html_class="contact-form"]'); ?>
                <div class="contact-overlay__info">
                    <h3>Centralna recepcja</h3>
                    <p><a href="tel:+48502263133">+48 502 263 133</a></p>
                    <p><a href="mailto:wroclaw@klinikiziemlewski.pl">wroclaw@klinikiziemlewski.pl</a></p>
                    <p>pn - pt: 10:00 - 19:00</p>
                    <p>sb - nd: Nieczynne</p>
                </div>
            </div>
        </div>
    </section>
    <?php wp_body_open(); ?>
