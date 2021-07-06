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
    </div>
</header>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="contact-page"  data-aos="fade-in">
        <div class="contact-page__top">
            <div class="contact-page__info">
                <p>Centralna recepcja</p>
                <p><a href="tel:+48 502 263 133">+48 502 263 133</a></p>
                <p><a href="mailto:wroclaw@klinikiziemlewski.pl">wroclaw@klinikiziemlewski.pl</a></p>
                <p>pn - pt: 10:00 - 19:00</p>
                <p>sb - nd: Nieczynne</p>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="148" title="Contact page form" html_class="contact-form contact-page__form"]'); ?>
        </div>

        <section class="section contact-page__map map-section"  data-aos="fade-in">
            <div class="map-section__mobile-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/map-desktop.png" alt="">
            </div>
            <div class="section__container">

                <dl class="cities">
                    <dt class="active">Warszawa</dt>
                    <dd>
                        <p>ul. Piękna 24/26 a lok. 27 (V piętro)</p>
                        <a href="https://goo.gl/maps/PVKkWLdfbDWZB8Ki8" target="_blank">wskazówki dojazdu</a>
                        <a href="#" class="button button--primary consultation-button">Umów konsultacje</a>
                    </dd>
                    <dt>Wrocław</dt>
                    <dd>
                        <p>ul. Moniuszki 23 lok. 1</p>
                        <a href="https://goo.gl/maps/js3QJEwPZRoAz7iM7" target="_blank">wskazówki dojazdu</a>
                        <a href="#" class="button button--primary consultation-button">Umów konsultacje</a>
                    </dd>
                    <dt>Poznań</dt>
                    <dd>
                        <p>al. Niepodległości 31</p>
                        <a href="https://goo.gl/maps/4UGCc8DeAJyPijTFA" target="_blank">wskazówki dojazdu</a>
                        <a href="#" class="button button--primary consultation-button">Umów konsultacje</a>
                    </dd>
                    <dt>Kraków</dt>
                    <dd>
                        <p>ul. Na Gródku 2</p>
                        <a href="https://goo.gl/maps/Lnj78LKEZ3MARfWx8" target="_blank">wskazówki dojazdu</a>
                        <a href="#" class="button button--primary consultation-button">Umów konsultacje</a>
                    </dd>
                    <dt>łódź</dt>
                    <dd>
                        <p>ul. Rewolucji 1905 r. 24 lok. 12</p>
                        <a href="https://goo.gl/maps/mrfvnTVzzbhcQaKc7" target="_blank">wskazówki dojazdu</a>
                        <a href="#" class="button button--primary consultation-button">Umów konsultacje</a>
                    </dd>
                </dl>

            </div>
        </section>

        <section class="section trainings"  data-aos="fade-in">
            <div class="trainings__image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/trainings-image-2.png"
                     class="trainings__trainings-image-2" alt="">
            </div>
            <div class="trainings__content">
                <div>
                    <h3 class="trainings__title">Szkolenia dla lekarzy</h3>
                    <p>Chcesz udoskonalić swoje umiejętności lub rozpocząć przygodę z medycyną estetyczną?</p>
                    <p>Zapraszamy na indywidualne szkolenia z autorskich metod dr Krzysztofa Ziemlewskiego!</p>
                    <p>Zostaw nam swój kontakt:</p>
                    <p>tel.: <a href="tel:796600125">796 600 125</a></p>
                    <p>email: <a href="mailto:cmo@tulipmedicalgroup.co">cmo@tulipmedicalgroup.com</a></p>
                </div>
            </div>
        </section>

    </div>

    <section class="section section--primary cta"  data-aos="fade-in">
        <div class="section__container">
            <div>
                <h2>Umów się na wizytę w Twoim mieście</h2>
                <p>Umów się na konsultację</p>
            </div>
            <div>
                <a href="" class="button button--accent open-consultation-modal">Umów konsultacje</a>
            </div>
        </div>
    </section>

</article>

