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
            <div class="header__description">Zapraszamy na szkolenia z zakresu Medycyny Estetycznej za równo
                indywidualne jak i grupowe. Poprowadzi je dr Krzysztof Ziemlewski, prezes firmy Kliniki Ziemlewski oraz
                Tulip Medical Group. Międzynarodowy szkoleniowiec firmy Fillmed oraz twórca autorskiej metody PSC
                Therapy.
            </div>
        </div>
    </div>
</header>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section class="dr-section section"  data-aos="fade-in">
            <div class="section__container dr-section__container">
                <div class="dr-section__image-wrapper section__image-wrapper--minus-top">
                    <img src="http://localhost/klinika/wp-content/themes/klinika/images/dr-section-thumbnail.png"
                         loading="lazy" alt="first section alternative text">
                </div>
                <div class="dr-section__content">
                    <h2>Dr Krzysztof Ziemlewski</h2>
                    <p>lekarz medycyny estetycznej, związany z tą dziedziną od 2001 r. Absolwent Wydziału Lekarskiego
                        Wojskowej Akademii Medycznej w Łodzi oraz Podyplomowej Szkoły Medycyny Estetycznej w
                        Warszawie.</p>
                    <p>Międzynarodowy Key Opinion Leader w metodach wielokierunkowego odmładzania twarzy, twórca centrum
                        szkoleń i leczenia powikłań by Tulip Medical Group. Jest także uczestnikiem krajowych oraz
                        międzynarodowych konferencji i kongresów. Prowadzi również wykłady oraz szkolenia dla lekarzy z
                        zakresu medycyny estetycznej. Swoją bogatą wiedzę wykorzystuje na co dzień – umiejętnie łączy
                        różne techniki zabiegowe i kreuje własne. Ma bogate doświadczenie w wolumetrii (jego
                        specjalność) i korekcji twarzy przy pomocy kwasu hialuronowego i polimlekowego, hydroksyapatytu
                        wapnia oraz botoxu, pasjonuje go również laseroterapia przeciwstarzeniowa.</p>
                    <p>Fascynuje się regułą złotego podziału (Golden Ratio) i ciągiem Fibonacciego, organizuje unikalne
                        warsztaty z modelowania twarzy zgodnie z tą ideą. Jego profesjonalizm i zmysł estetyczny są
                        niezwykle cenione przez partnerów z branży, a współpraca z najlepszymi stała się domeną jakości
                        stworzonych przez niego Klinik Ziemlewski.</p>
                    <p>Charyzmatyczna osoba doktora zjednuje sobie jednak przede wszystkim pacjentów, których w bazie
                        Klinik jest już ponad 10 000. </p>
                </div>
            </div>
        </section>

        <section class="section section--white"  data-aos="fade-in">
            <div class="section__container">
                <h2 class="section__title">Lista szkoleń</h2>
                <div class="faq faq--grey">
                    <div class="faq__item">
                        <div class="faq__header faq__header--active">
                            <h5 class="faq__title">Podstawowe zasady zastosowania Kwasu hialuronowego oraz toksyny botulinowej</h5>
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-faq.png" alt="">
                            </div>
                        </div>
                        <div class="faq__content">
                            <p>Całodniowe szkolenie towarzyszące w pracy gabinetowej dr. Krzysztofa Ziemlewskiego</p>
                            <p><strong>Cena 2 500zł</strong></p>
                            <p>
                                <a href="" onclick="return false;" class="button button--inline">Dostępne już niebawem !</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--white"  data-aos="fade-in">
            <div class="section__container training__form-container">

                <h2 class="section__title">Nie dla Ciebie? Nie szkodzi, zostaw nam swoje dane, poinforujemy Cię o nich:</h2>
                <?php echo do_shortcode('[contact-form-7 id="159" title="Trainings form" html_class="contact-form contact-page__form training-form"]'); ?>
            </div>
        </section>

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

