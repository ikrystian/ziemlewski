<?php

/**
 * Template part for displaying front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package klinika
 */

?>
<header class="page-top page-top--offer">
    <div class="header__content header__content--detailed">

        <section class="section">
            <div class="section__container">
                <div class="offer__header">
                    <h1 class="offer__title"><?php echo the_title(); ?></h1>
                    <div class="offer__main-image">
                        <?php if( the_field('obrazek_zabiegu')) : ?>
                        <img src="<?php the_field('obrazek_zabiegu') ?>" class="offer__image"
                             alt="">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/oferta.png" class="offer__image" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="offer-cta-box">
                        <p>Innowacyjny, skuteczny i bezpieczny zabieg, który stanowi unikalne połączenie wolumetrii oraz
                            medycyny
                            regeneracyjnej.</p>
                        <h3>Zastanawiasz się czy ten zabieg jest dla Ciebie, Zadzwoń!</h3>
                        <a class="offer-cta-box__tel" href="tel:+48796 600 125">
                            <span><img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt=""></span>
                            <span>796 600 125</span>
                        </a>
                        <a href="#" class="button open-consultation-modal">Umów się na konsultacje</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</header>
<article id="post-<?php the_ID(); ?>" <?php post_class('offer'); ?>>

    <div class="offer__content">
        <section class="section" data-aos="fade-in">
            <div class="section__container ">
                <div class="offer__description">
                    <?php the_content(); ?>

                    <?php
                    if (have_rows('szczegoly_zabiegu')) :
                        ?>
                        <h2 class="section__title">Szczegóły zabiegu</h2>
                        <div class="offer__details offer-details">
                            <?php
                            while (have_rows('szczegoly_zabiegu')) : the_row();
                                ?>


                                <div>
                                    <div class="offer-details__name">
                                        <strong><?php echo get_sub_field('nazwa'); ?></strong>
                                    </div>
                                    <div class="offer-details__value"><?php echo get_sub_field('Wartosc'); ?></div>
                                </div>

                            <?php
                            endwhile;
                            ?>
                        </div>
                    <?php
                    endif;
                    ?>

                    <?php
                    if (have_rows('cennik')) :
                        ?>
                        <h2 class="section__title">Cennik</h2>
                        <div class="offer__details offer-details">
                            <?php
                            while (have_rows('cennik')) : the_row();
                                ?>
                                <div>
                                    <div class="offer-details__name">
                                        <strong><?php echo get_sub_field('nazwa'); ?></strong>
                                    </div>
                                    <div class="offer-details__value">
                                        <strong><?php echo get_sub_field('Wartosc'); ?></strong>
                                        <p><?php echo get_sub_field('opis'); ?></p>
                                    </div>
                                </div>

                            <?php
                            endwhile;
                            ?>
                        </div>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </section>

        <section class="section section--white sym" data-aos="fade-in">
            <div class="section__container">
                <h2 class="section__title">Kto wykona mój zabieg?</h2>
            </div>
            <div class="section__container section__container--flex">
                <div class="even">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/doctor.png" alt="">
                </div>
                <div class="even sym__content">
                    <h3>Dr Krzysztof Ziemlewski</h3>
                    <p>Absolwent Wydziału Lekarskiego Wojskowej Akademii Medycznej w Łodzi oraz Podyplomowej Szkoły
                        Medycyny Estetycznej w Warszawie. Pionier medycyny estetycznej w Polsce, którą zajmuje się od
                        2001r. Międzynarodowy Key Opinion Leader w metodach wielokierunkowego odmładzania twarzy.</p>
                    <a href="<?php echo get_site_url(); ?>/o-nas/" class="button button--inline">Więcej</a>
                </div>
            </div>
        </section>
        <?php if(get_field('technologia')) : ?>
        <section class="section" data-aos="fade-in">
            <div class="section__container section__container--flex  section__container--reverse">
                <div class="even">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/how.png" alt="">
                </div>
                <div class="even even--content">
                  <?php echo get_field('technologia'); ?>
                </div>
            </div>
        </section>

        <?php endif; ?>

    </div>

    <section class="section section--dark testimonials" data-aos="fade-in">
        <h2 class="section__title section__title--center">Opinie</h2>
        <div class="section__container">
            <?php echo do_shortcode('[sp_testimonial id="80"]'); ?>
        </div>
    </section>


    <?php
        if(have_rows('faqs')) :
    ?>
    <section class="section" data-aos="fade-in">
        <div class="section__container">
            <h2 class="section__title">FAQ</h2>

            <div class="faq">
                <?php while( have_rows('faqs') ) : the_row(); ?>
                <div class="faq__item">
                    <div class="faq__header ">
                        <h5 class="faq__title"><?php echo get_sub_field('question'); ?></h5>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-faq.png" alt="">
                        </div>
                    </div>
                    <div class="faq__content">
                        <p><?php echo get_sub_field('answer'); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php
        endif;
    ?>
    <section class="section section--white spec" data-aos="fade-in">
        <div class="section__container">
            <div class="section__content">
                <h2>Przebieg zabiegu krok po kroku</h2>
            </div>

            <div class="slide-section slide-section--no-margin">
                <ul class="spec-list">
                    <li class="spec-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/spec.png" class="spec-list__image"
                             loading="lazy"
                             alt="">
                        <div class="spec-list__content spec-list__content--static">
                            <p class="spec-list__description">Konsultacja lekarska</p>
                        </div>
                    </li>
                    <li class="spec-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/spec.png" class="spec-list__image"
                             loading="lazy"
                             alt="">
                        <div class="spec-list__content spec-list__content--static">
                            <p class="spec-list__description">Konsultacja lekarska</p>
                        </div>
                    </li>
                    <li class="spec-list__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/spec.png" class="spec-list__image"
                             loading="lazy"
                             alt="">
                        <div class="spec-list__content spec-list__content--static">
                            <p class="spec-list__description">Konsultacja lekarska</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section" data-aos="fade-in">
        <div class="section__container">
            <div class="recommendations">
                <div class="row">
                    <h2 class="section__title">Wskazania</h2>
                    <div class="plus">
                        <?php echo get_field('wskazania'); ?>

                    </div>
                </div>
                <div class="row">
                    <h2 class="section__title">Przeciwwskazania</h2>
                    <div class="minus">
                        <?php echo get_field('przeciwwskazania'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    <section class="section section--white"  data-aos="fade-in">-->
    <!--        <div class="section__container">-->
    <!--            <h2 class="section__title">Seo tekst</h2>-->
    <!--            <p>Innowacyjny, skuteczny i bezpieczny zabieg, który stanowi unikalne połączenie wolumetrii oraz medycyny-->
    <!--                regeneracyjnej. To rodzaj nowoczesnego lipotransferu, polegającego na pobraniu tkanki tłuszczowej-->
    <!--                pacjenta-->
    <!--                oraz wykorzystaniu jej jako autologicznego preparatu. Tkankę tę pobiera się w niewielkiej ilości z-->
    <!--                okolicy-->
    <!--                biodra, a następnie przygotowuje się ją i filtruje w specjalnym systemie. Odpowiednio oczyszczony-->
    <!--                tłuszcz-->
    <!--                może zostać przetworzony w dwa rodzaje substancji:-->
    <!--            </p>-->
    <!--            <p><strong>Nano Fat</strong> – preparat z dużą ilością komórek macierzystych,-->
    <!--                o silnych właściwościach stymulujących. Podawany jest tuż pod powierzchnię skóry w celu jej regeneracji,-->
    <!--                rewitalizacji, odżywienia i napięcia, a także zagęszczenia włosów.</p>-->
    <!--            <p><strong>Micro Fat</strong> – materiał służący jako-->
    <!--                bezpieczny, naturalny wypełniacz, będący doskonałą alternatywą dla syntetycznych preparatów. Idealny do-->
    <!--                wolumetrii. Dzięki niemu można zmniejszyć bruzdy nosowo-wargowe, zredukować oznaki zmęczenia w okolicy-->
    <!--                oczu,-->
    <!--                wymodelować kontur twarzy, usta oraz brodę, poprawić kształt nosa, zrewitalizować i odmłodzić dłonie,-->
    <!--                okolicę szyi i dekoltu.</p>-->
    <!--        </div>-->
    <!--    </section>-->

    <section class="section section--primary cta" data-aos="fade-in">
        <div class="section__container">
            <div>
                <h2>Umów się na wizytę w Twoim mieście</h2>
                <p>Czeka na Ciebie nasza centralna recepcja</p>
            </div>
            <div>
                <a href="#" class="button button--accent open-consultation-modal">Umów konsultacje</a>
            </div>
        </div>
    </section>
</article>
