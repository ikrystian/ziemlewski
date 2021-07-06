<?php

/**
 * Template part for displaying front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package klinika
 */

?>
<header class="page-top">
    <div class="header__content header__content--detailed">
        <h1 class="header__page-title"> <?php echo the_title(); ?></h1>
        <div class="header__content header__content--detailed">
            <ul class="gallery-categories">
                <li><a href="/galeria" class="active">Nasz zespół</a></li>
                <li><a href="/technologia">Technologia</a></li>
            </ul>
        </div>
    </div>
</header>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>  data-aos="fade-in">

    <ul class="gallery">
        <li class="gallery__item" data-aos="fade-in" data-aos-delay="200">
            <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/1.png" class="gallery__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/1.png" class="gallery__image" alt="">
            </a>
        </li>
        <li class="gallery__item"  data-aos="fade-in" data-aos-delay="200">
            <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/2.png" class="gallery__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/2.png" class="gallery__image" alt="">
            </a>
        </li>
        <li class="gallery__item"  data-aos="fade-in" data-aos-delay="200">
            <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/3.png" class="gallery__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/3.png" class="gallery__image" alt="">
            </a>
        </li>
        <li class="gallery__item"  data-aos="fade-in" data-aos-delay="200">
            <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/4.png" class="gallery__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/4.png" class="gallery__image" alt="">
            </a>
        </li>
        <li class="gallery__item"  data-aos="fade-in" data-aos-delay="200">
            <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/5.png" class="gallery__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/5.png" class="gallery__image" alt="">
            </a>
        </li>
        <li class="gallery__item"  data-aos="fade-in" data-aos-delay="200">
            <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/6.png" class="gallery__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/6.png" class="gallery__image" alt="">
            </a>
        </li>
        <li class="gallery__item"  data-aos="fade-in" data-aos-delay="200">
            <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/7.png" class="gallery__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/7.png" class="gallery__image" alt="">
            </a>
        </li>
        <li class="gallery__item"  data-aos="fade-in" data-aos-delay="200">
            <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/8.png" class="gallery__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/8.png" class="gallery__image" alt="">
            </a>
        </li>
        <li class="gallery__item"  data-aos="fade-in" data-aos-delay="200">
            <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/9.png" class="gallery__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/9.png" class="gallery__image" alt="">
            </a>
        </li>
    </ul>
