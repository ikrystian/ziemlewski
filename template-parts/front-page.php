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
        <div class="main-slider__wrapper">
            <div class="main-slider">
                <div class="single-slide">
                    <img class="single-slide__main-image"
                         src="<?php echo get_template_directory_uri(); ?>/images/home-slider.png" alt="">
                    <div class="single-slide__content">
                        <h2>Miejsce gdzie medycyna spotyka się ze sztuką</h2>
                        <a href="<?php echo get_site_url(); ?>/o-nas/">poznaj nas</a>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/06/zielmewski-signature.png"
                             alt="">
                    </div>
                </div>
                <div class="single-slide">
                    <img class="single-slide__main-image"
                         src="<?php echo get_template_directory_uri(); ?>/images/slider-2.jpg" alt="">
                    <div class="single-slide__content">
                        <h2>Wolumetria twarzy, nasza TOP specjalizacja</h2>
                        <a href="#" class="open-consultation-modal">Umów się na konsultację</a>
                    </div>
                </div>
                <div class="single-slide">
                    <img class="single-slide__main-image"
                         src="<?php echo get_template_directory_uri(); ?>/images/slider-3.jpg" alt="">
                    <div class="single-slide__content">
                        <h2>DAJ SKÓRZE PIĆ!- Revitrane Skin Booster HA20 </h2>
                        <a href="#" class="open-consultation-modal">Sprawdź szczegóły</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php klinika_post_thumbnail(); ?>

    <section class="dr-section section" data-aos="fade-in">
        <div class="section__container dr-section__container">
            <div class="dr-section__image-wrapper section__image-wrapper--minus-top"  data-aos="fade-left">
                <img src="<?php echo get_template_directory_uri(); ?>/images/dr-section-thumbnail.png"
                     loading="lazy"
                     alt="first section alternative text">
            </div>
            <div class="dr-section__content"  data-aos="fade-right">
                <h2>Dr Krzysztof Ziemlewski</h2>
                <p>Absolwent Wydziału Lekarskiego Wojskowej Akademii Medycznej w Łodzi oraz Podyplomowej Szkoły Medycyny
                    Estetycznej w Warszawie. Pionier medycyny estetycznej w Polsce, którą zajmuje się od 2001r.
                    Międzynarodowy Key Opinion Leader w metodach wielokierunkowego odmładzania twarzy. </p>
                <p>Posiada bogate doświadczenie w korekcji i modelowaniu twarzy z użyciem kwasu hialuronowego, kwasu
                    polimlekowego, hydroksyapatytu wapnia oraz toksyny botulinowej.</p>
                <p><a href="<?php echo site_url(); ?>/o-nas" class="button button--inline">Więcej informacji</a></p>
            </div>
        </div>
    </section>

    <section class="section philosophy-section" data-aos="fade-in">
        <div class="section__container section__container--flex section__container--reverse">
            <div class="section__image-wrapper" data-aos="fade-right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/god-1-image.png"
                     loading="lazy"
                     alt="second section alternative text">
            </div>
            <div class="section__content" data-aos="fade-left">
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

    <section class="section section--gray" data-aos="fade-in">
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
                            data-aos="fade-right"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/zabieg-2.jpg)">
                            <div class="slide-list__content">
                                <h3 class="slide-list__title">Liquid Lift</h3>
                                <div class="slide-list__description">
                                    <p>Płynny lifting twarzy to jednocześnie wypełnienie, wygładzenie i konturowanie twarzy za pomocą wypełniaczy na bazie kwasu hialuronowego. W ramach ogólnej procedury preparaty te są często stosowane w połączeniu ze sobą, ale także z botoksem.</p>
                                    <a href="/oferta/liquid-facelift" class="button">Szczegóły zabiegu</a>
                                </div>

                            </div>
                        </li>

                        <li class="slide-list__item" tabindex="0"
                            data-aos="fade-top"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/zabieg-3.jpg)">
                            <div class="slide-list__content">
                                <h3 class="slide-list__title">Perfcect Lips</h3>
                                <div class="slide-list__description">
                                    <p>Podczas zabiegu dr Karolina Pazera stosuje wyjątkową, autorską metodę modelowania ust z użyciem kwasu hialuronowego – naturalnej, wchłanialnej substancji.</p>
                                    <a href="" class="button">Szczegóły zabiegu</a>
                                </div>

                            </div>
                        </li>

                        <li class="slide-list__item" tabindex="0"
                            data-aos="fade-left"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/zabieg-4.jpg)">
                            <div class="slide-list__content">
                                <h3 class="slide-list__title">Wolumetria</h3>
                                <div class="slide-list__description">
                                    <p>Wolumetria wykonywana jest słynną autorską techniką dr. Krzysztofa Ziemlewskiego. Do zabiegu wykorzystywane są najwyższej klasy preparaty – wypełniacze m.in. z kwasem hialuronowym.</p>
                                    <a href="/oferta/wolumetria" class="button">Szczegóły zabiegu</a>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--dark section-about" data-aos="fade-in">
        <div class="section__container">
            <div class="section__image-wrapper section__image-wrapper--minus-top" data-aos="fade-left">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about.png"
                     loading="lazy"
                     alt="third section alternative text">
            </div>
            <div class="section__content" data-aos="fade-right">
                <h2>O klinikach Ziemlewski</h2>
                <p>Kliniki Ziemlewski specjalizują się w:</p>
                <ul>
                    <li>Medycynie estetycznej,</li>
                    <li>Kosmetologii hi-tech,</li>
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
            <div class="about-stats__item" data-aos="fade-top">
                <span class="about-stats__value">20</span>
                <span class="about-stats__title">lat doświadczenia</span>
            </div>

            <div class="about-stats__item" data-aos="fade-bottom"> 
                <span class="about-stats__value">5</span>
                <span class="about-stats__title">oddziałów</span>
            </div>

            <div class="about-stats__item" data-aos="fade-top">
                <span class="about-stats__value">10 000</span>
                <span class="about-stats__title">zadowolonych pacjentek</span>
            </div>
        </div>

    </section>

    <section class="section spec" data-aos="fade-in">
        <div class="section__container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/spec-bg.png" loading="lazy" alt=""
                 class="spec__artefact">
            <div class="section__content">
                <h2>Specjalizacje kliniki</h2>
                <p>Sprawdź nasze zabiegi i umów się na konsultacje</p>
            </div>

            <div class="slide-section">
                <ul class="spec-list">
                    <li class="spec-list__item" data-aos="fade-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/spec-1.jpg" class="spec-list__image"
                             loading="lazy"
                             alt="">
                        <div class="spec-list__content">
                            <h3 class="spec-list__title">Kosmetologia</h3>
                            <p class="spec-list__description">Stosowane przez nas zabiegów kosmetologicznych ma na celu podniesienie atrakcyjności ciała i twarzy z wykorzystaniem nieinwazyjnych metod.</p>
                            <a href="#" class="button open-consultation-modal">Umów się na konsultacje</a>
                        </div>
                    </li>

                    <li class="spec-list__item" data-aos="fade-bottom">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/spec-2.jpg" class="spec-list__image"
                             loading="lazy"
                             alt="">
                        <div class="spec-list__content">
                            <h3 class="spec-list__title">Modelowanie sylwetki</h3>
                            <p class="spec-list__description">Marzysz o pięknej sylwetce bez bólu i okresu rekonwalescencji? Umów się już dziś!. Mamy dla Ciebie m.in. nieinwazyjne konturowanie ciała, redukcje cellulitu i obwodu, napinanie skóry i redukcje rozstępów.</p>
                            <a href="#" class="button open-consultation-modal">Umów się na konsultacje</a>
                        </div>
                    </li>

                    <li class="spec-list__item" data-aos="fade-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/spec-3.jpg" class="spec-list__image"
                             loading="lazy"
                             alt="">
                        <div class="spec-list__content">
                            <h3 class="spec-list__title">Męskie granie</h3>
                            <p class="spec-list__description">Kto z Was Panowie nie walczy z oponką, boczkami lub podwójnym podbródkiem? Przyznajcie się bez bicia!
                                Dlatego ogłaszamy męskie granie w Klinikach.</p>
                            <a href="#" class="button open-consultation-modal">Umów się na konsultacje</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>

    <section class="section section--gray section-trainings" data-aos="fade-in">
        <div class="section__container section__container--flex" data-aos="fade-right">
            <div class="section__image-wrapper section__image-wrapper--minus-top">
                <img src="<?php echo get_template_directory_uri(); ?>/images/training.png" class="section__image"
                     loading="lazy"
                     alt="">

            </div>
            <div class="section__content" data-aos="fade-left">
                <h2>Szkolenia dla lekarzy</h2>
                <p>Rozwijanie brand'u Kliniki Ziemlewski przełożyło się na stworzenie osobistej marki dra Krzysztofa
                    Ziemlewskiego, a jednocześnie centrum szkoleniowego pod szyldem Tulip Medical Group. To miejsce
                    stworzone przez lekarzy, dla lekarzy.</p>
                <p>Już w krótce pojawi się lista planowanych szkoleń. Zostaw nam swój kontakt, damy Ci znać o kolejnym
                    szkoleniu.</p>
                <a href="<?php echo site_url(); ?>/szkolenia" class="button button--secondary">Sprawdź aktualną listę szkoleń</a>
            </div>
        </div>
    </section>

    <section class="section certs" data-aos="fade-in">
        <div class="section__container section__container--flex" data-aos="fade-left">
            <div class="section__image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/certs.png" class="section__image" alt=""
                     loading="lazy">
            </div>

            <div class="section__content" data-aos="fade-right">
                <h2>Mówią, że znamy się na swoim fachu</h2>
                <p>Rozwijanie brand'u Kliniki Ziemlewski przełożyło się na stworzenie osobistej marki dra Krzysztofa
                    Ziemlewskiego, a jednocześnie centrum szkoleniowego pod szyldem Tulip Medical Group. To miejsce
                    stworzone przez lekarzy, dla lekarzy.</p>
                <p>Już w krótce pojawi się lista planowanych szkoleń. Zostaw nam swój kontakt, damy Ci znać o kolejnym
                    szkoleniu.</p>
            </div>
        </div>
    </section>


    <section class="section section--gray most" data-aos="fade-in">
        <div class="section__container">
            <h2 class="section__title section__title--center">Najczęstsze problemy naszych Pacjentek</h2>

            <ul class="most-list">
                <li class="most-list__item" data-aos="fade-bottom">
                    <span class="most-list__circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/problem.svg"
                             loading="lazy"
                             class="most-list__icon" alt="">
                    </span>
                    <h3 class="most-list__title">Tkanka tłuszczowa</h3>
                </li>

                <li class="most-list__item" data-aos="fade-top">
                    <span class="most-list__circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/rozstepy.png"
                             loading="lazy"
                             class="most-list__icon" alt="">
                    </span>
                    <h3 class="most-list__title">Rozstępy</h3>
                </li>

                <li class="most-list__item" data-aos="fade-bottom">
                    <span class="most-list__circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/zmarszczki.png"
                             loading="lazy"
                             class="most-list__icon" alt="">
                    </span>
                    <h3 class="most-list__title">Zmarszczki</h3>
                </li>

                <li class="most-list__item" data-aos="fade-top">
                    <span class="most-list__circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/male-usta.png"
                             loading="lazy"
                             class="most-list__icon" alt="">
                    </span>
                    <h3 class="most-list__title">Małe usta</h3>
                </li>

            </ul>
        </div>

    </section>

    <section class="section instagram-section" data-aos="fade-in">
        <div class="section__content instagram-section__content">
            <h2 class="section__title section__title--center">Dołącz do nas</h2>
            <a href="https://www.instagram.com/kliniki_ziemlewski/" target="_blank">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/isnta-title.svg" alt=""></a>
        </div>
    </section>

    <section class="section section--primary cta" data-aos="fade-in">
        <div class="section__container">
            <div data-aos="fade-left">
                <h2>Umów się na wizytę w Twoim mieście</h2>
                <p>Czeka na Ciebie nasza centralna recepcja</p>
            </div>
            <div data-aos="fade-right">
                <a href="#" class="button button--accent open-consultation-modal">Umów konsultacje</a>
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
