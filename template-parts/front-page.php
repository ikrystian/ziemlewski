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
        <?php echo do_shortcode('[sp_testimonial id="81"]'); ?>
    </div>
</header>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php klinika_post_thumbnail(); ?>

    <section class="dr-section section">
        <div class="section__container dr-section__container">
            <div class="dr-section__image-wrapper section__image-wrapper--minus-top">
                <img src="<?php echo get_template_directory_uri(); ?>/images/dr-section-thumbnail.png"
                     loading="lazy"
                     alt="first section alternative text">
            </div>
            <div class="dr-section__content">
                <h2>Dr Krzysztof Ziemlewski</h2>
                <p>Absolwent Wydziału Lekarskiego Wojskowej Akademii Medycznej w Łodzi oraz Podyplomowej Szkoły Medycyny
                    Estetycznej w Warszawie. Pionier medycyny estetycznej w Polsce, którą zajmuje się od 2001r.
                    Międzynarodowy Key Opinion Leader w metodach wielokierunkowego odmładzania twarzy. </p>
                <p>Posiada bogate doświadczenie w korekcji i modelowaniu twarzy z użyciem kwasu hialuronowego, kwasu
                    polimlekowego, hydroksyapatytu wapnia oraz toksyny botulinowej.</p>
                <p><a href="#" class="button">Więcej informacji</a></p>
            </div>
        </div>
    </section>

    <section class="section philosophy-section">
        <div class="section__container section__container--flex section__container--reverse">
            <div class="section__image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/god-1-image.png"
                     loading="lazy"
                     alt="second section alternative text">
            </div>
            <div class="section__content">
                <h2>Filozofia Boskiej Proporcji</h2>
                <p>Dr Krzysztof Ziemlewski fascynuje się regułą złotego podziału (Golden Ratio) i ciągiem Fibonacciego,
                    organizuje unikalne warsztaty z modelowania twarzy zgodnie z tą ideą. Jego charyzma, profesjonalizm
                    i
                    zmysł estetyczny są doceniane przez pacjentów oraz partnerów z branży, a współpraca z najlepszymi
                    stała
                    się domeną jakości stworzonych przez niego Klinik Ziemlewski.</p>
            </div>
        </div>
    </section>

    <section class="section section--gray">
        <div class="section__container">
            <div class="section__content">
                <h2>Autorskie Terapie Zabiegowe</h2>
                <p>Sprawdź nasze zabiegi i umów się na konsultacje</p>
            </div>

            <div class="slide-section__wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/frame-2.png" class="slide-list__artefact"
                     loading="lazy"
                     role="presentation" alt="">
                <div class="slide-section">
                    <ul class="slide-list">
                        <li class="slide-list__item" tabindex="0"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/zabieg.png)">
                            <div class="slide-list__content">
                                <h3 class="slide-list__title">Volumetria</h3>
                                <div class="slide-list__description">
                                    <p>Terapię poleca się osobom ze zmarszczkami mimicznymi zwłaszcza górnej części
                                        twarzy:
                                        okolica czoła zmarszczki poprzeczne i podłużne oraz oczu tzw. kurze łapki</p>
                                    <a href="" class="button">Szczegóły zabiegu</a>
                                </div>

                            </div>
                        </li>

                        <li class="slide-list__item" tabindex="0"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/zabieg.png)">
                            <div class="slide-list__content">
                                <h3 class="slide-list__title">Volumetria</h3>
                                <div class="slide-list__description">
                                    <p>Terapię poleca się osobom ze zmarszczkami mimicznymi zwłaszcza górnej części
                                        twarzy:
                                        okolica czoła zmarszczki poprzeczne i podłużne oraz oczu tzw. kurze łapki</p>
                                    <a href="" class="button">Szczegóły zabiegu</a>
                                </div>

                            </div>
                        </li>

                        <li class="slide-list__item" tabindex="0"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/zabieg.png)">
                            <div class="slide-list__content">
                                <h3 class="slide-list__title">Volumetria</h3>
                                <div class="slide-list__description">
                                    <p>Terapię poleca się osobom ze zmarszczkami mimicznymi zwłaszcza górnej części
                                        twarzy:
                                        okolica czoła zmarszczki poprzeczne i podłużne oraz oczu tzw. kurze łapki</p>
                                    <a href="" class="button">Szczegóły zabiegu</a>
                                </div>

                            </div>
                        </li>

                        <li class="slide-list__item" tabindex="0"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/zabieg.png)">
                            <div class="slide-list__content">
                                <h3 class="slide-list__title">Volumetria</h3>
                                <div class="slide-list__description">
                                    <p>Terapię poleca się osobom ze zmarszczkami mimicznymi zwłaszcza górnej części
                                        twarzy:
                                        okolica czoła zmarszczki poprzeczne i podłużne oraz oczu tzw. kurze łapki</p>
                                    <a href="" class="button">Szczegóły zabiegu</a>
                                </div>

                            </div>
                        </li>

                        <li class="slide-list__item" tabindex="0"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/zabieg.png)">
                            <div class="slide-list__content">
                                <h3 class="slide-list__title">Volumetria</h3>
                                <div class="slide-list__description">
                                    <p>Terapię poleca się osobom ze zmarszczkami mimicznymi zwłaszcza górnej części
                                        twarzy:
                                        okolica czoła zmarszczki poprzeczne i podłużne oraz oczu tzw. kurze łapki</p>
                                    <a href="" class="button">Szczegóły zabiegu</a>
                                </div>

                            </div>
                        </li>

                        <li class="slide-list__item" tabindex="0"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/zabieg.png)">
                            <div class="slide-list__content">
                                <h3 class="slide-list__title">Volumetria</h3>
                                <div class="slide-list__description">
                                    <p>Terapię poleca się osobom ze zmarszczkami mimicznymi zwłaszcza górnej części
                                        twarzy:
                                        okolica czoła zmarszczki poprzeczne i podłużne oraz oczu tzw. kurze łapki</p>
                                    <a href="" class="button">Szczegóły zabiegu</a>
                                </div>

                            </div>
                        </li>

                        <li class="slide-list__item" tabindex="0"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/zabieg.png)">
                            <div class="slide-list__content">
                                <h3 class="slide-list__title">Volumetria</h3>
                                <div class="slide-list__description">
                                    <p>Terapię poleca się osobom ze zmarszczkami mimicznymi zwłaszcza górnej części
                                        twarzy:
                                        okolica czoła zmarszczki poprzeczne i podłużne oraz oczu tzw. kurze łapki</p>
                                    <a href="" class="button">Szczegóły zabiegu</a>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--dark section-about">
        <div class="section__container">
            <div class="section__image-wrapper section__image-wrapper--minus-top">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about.png"
                     loading="lazy"
                     alt="third section alternative text">
            </div>
            <div class="section__content">
                <h2>O klinikach Ziemlewski</h2>
                <p>Kliniki Ziemlewski specjalizują się w:</p>
                <ul>
                    <li>Medycynie estetycznej,</li>
                    <li>Kosmetologii hi-tech,</li>
                    <li>Ginekologii estetycznej</li>
                    <li>Szkolenia medyczne dla lekarzy</li>
                </ul>
                <p>Nasza oferta obejmuje zarówno kuracje z zastosowaniem botoksu, kwasu hialuronowego oraz nici
                    liftingujących
                    jak i wykorzystujemy terapie wyszczuplające, modelujące oraz ujędrniające ciało. Z zakresu
                    ginekologii
                    estetycznej specjalizujemy się w zabiegach waginoplastyki oraz laserowym obkurczaniu pochwy,
                    laserowym
                    leczeniu nietrzymania moczu, powiększaniu punktu G oraz ujędrnianiu warg sromowych.</p>
            </div>
        </div>
        <div class="about-stats">
            <div class="about-stats__item">
                <span class="about-stats__value">20</span>
                <span class="about-stats__title">lat doświadczenia</span>
            </div>

            <div class="about-stats__item">
                <span class="about-stats__value">5</span>
                <span class="about-stats__title">oddziałów</span>
            </div>

            <div class="about-stats__item">
                <span class="about-stats__value">10 000</span>
                <span class="about-stats__title">zadowolonych pacjentek</span>
            </div>
        </div>

    </section>

    <section class="section spec">
        <div class="section__container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/spec-bg.png" loading="lazy"  alt="" class="spec__artefact">
            <div class="section__content">
                <h2>Specjalizacje kliniki</h2>
                <p>Sprawdź nasze zabiegi i umów się na konsultacje</p>
            </div>

            <div class="slide-section">
                <ul class="spec-list">
                    <li class="spec-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/spec.png" class="spec-list__image"
                             loading="lazy"
                             alt="">
                        <div class="spec-list__content">
                            <h3 class="spec-list__title">Twarz</h3>
                            <p class="spec-list__description">Opracowaliśmy swoją własną metodę łączącą kuracje z
                                zastosowaniem botoksu, kwasu hialuronowego oraz nici liftingujących</p>
                            <a href="" class="button">Poznaj zabiegi</a>
                        </div>
                    </li>

                    <li class="spec-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/spec.png" class="spec-list__image"
                             loading="lazy"
                             alt="">
                        <div class="spec-list__content">
                            <h3 class="spec-list__title">Twarz</h3>
                            <p class="spec-list__description">Opracowaliśmy swoją własną metodę łączącą kuracje z
                                zastosowaniem botoksu, kwasu hialuronowego oraz nici liftingujących</p>
                            <a href="" class="button">Poznaj zabiegi</a>
                        </div>
                    </li>

                    <li class="spec-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/spec.png" class="spec-list__image"
                             loading="lazy"
                             alt="">
                        <div class="spec-list__content">
                            <h3 class="spec-list__title">Twarz</h3>
                            <p class="spec-list__description">Opracowaliśmy swoją własną metodę łączącą kuracje z
                                zastosowaniem botoksu, kwasu hialuronowego oraz nici liftingujących</p>
                            <a href="" class="button">Poznaj zabiegi</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>

    <section class="section section--gray section-trainings">
        <div class="section__container section__container--flex">
            <div class="section__image-wrapper section__image-wrapper--minus-top">
                <img src="<?php echo get_template_directory_uri(); ?>/images/training.png" class="section__image"
                     loading="lazy"
                     alt="">

            </div>
            <div class="section__content">
                <h2>Szkolenia dla lekarzy</h2>
                <p>Rozwijanie brand'u Kliniki Ziemlewski przełożyło się na stworzenie osobistej marki dra Krzysztofa
                    Ziemlewskiego, a jednocześnie centrum szkoleniowego pod szyldem Tulip Medical Group. To miejsce
                    stworzone przez lekarzy, dla lekarzy.</p>
                <p>Już w krótce pojawi się lista planowanych szkoleń. Zostaw nam swój kontakt, damy Ci znać o kolejnym
                    szkoleniu.</p>
                <a href="" class="button button--secondary">Sprawdź aktualną listę szkoleń</a>
            </div>
        </div>
    </section>

    <section class="section certs">
        <div class="section__container section__container--flex">
            <div class="section__image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/certs.png" class="section__image" alt="" loading="lazy">
            </div>

            <div class="section__content">
                <h2>Mówią, że znamy się na swoim fachu</h2>
                <p>Rozwijanie brand'u Kliniki Ziemlewski przełożyło się na stworzenie osobistej marki dra Krzysztofa
                    Ziemlewskiego, a jednocześnie centrum szkoleniowego pod szyldem Tulip Medical Group. To miejsce
                    stworzone przez lekarzy, dla lekarzy.</p>
                <p>Już w krótce pojawi się lista planowanych szkoleń. Zostaw nam swój kontakt, damy Ci znać o kolejnym
                    szkoleniu.</p>
            </div>
        </div>
    </section>


    <section class="section section--gray most">
        <div class="section__container">
            <h2 class="section__title section__title--center">Najczęstsze problemy naszych Pacjentek</h2>

            <ul class="most-list">
                <li class="most-list__item">
                    <span class="most-list__circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/problem.svg"
                             loading="lazy"
                             class="most-list__icon" alt="">
                    </span>
                    <h3 class="most-list__title">Tkanka tłuszczowa</h3>
                </li>

                <li class="most-list__item">
                    <span class="most-list__circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/problem.svg"
                             loading="lazy"
                             class="most-list__icon" alt="">
                    </span>
                    <h3 class="most-list__title">Rozstępy</h3>
                </li>

                <li class="most-list__item">
                    <span class="most-list__circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/problem.svg"
                             loading="lazy"
                             class="most-list__icon" alt="">
                    </span>
                    <h3 class="most-list__title">Zmarszczki</h3>
                </li>

            </ul>
            <div class="most__footer">
                <p>To nie to? Zobacz naszą pełną ofertę:</p>
                <a href="" class="button button--secondary">zobacz naszą pełną ofertę</a>
            </div>
        </div>

    </section>

    <section class="section instagram-section">
        <div class="section__content instagram-section__content">
            <h2 class="section__title section__title--center">Dołącz do nas</h2>
            <a href="http://instagram.com"> <img
                        loading="lazy"
                        src="<?php echo get_template_directory_uri(); ?>/images/isnta-title.svg"></a>
        </div>
    </section>

    <section class="section section--primary cta">
        <div class="section__container">
            <div>
                <h2>Umów się na wizytę w Twoim mieście</h2>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div>
                <a href="" class="button button--accent">Umów konsultacje</a>
            </div>
        </div>
    </section>

    <div class="entry-content">
        <?php
        the_content(
            sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'klinika'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post(get_the_title())
            )
        );

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'klinika'),
                'after' => '</div>',
            )
        );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php klinika_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
