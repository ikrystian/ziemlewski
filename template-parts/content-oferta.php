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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/oferta.png" class="offer__image"
                             alt="">
                    </div>
                    <div class="offer-cta-box">
                        <p>Innowacyjny, skuteczny i bezpieczny zabieg, który stanowi unikalne połączenie wolumetrii oraz
                            medycyny
                            regeneracyjnej.</p>
                        <h3>Zastanawiasz się czy ten zabieg jest dla Ciebie, Zadzwoń!</h3>
                        <a class="offer-cta-box__tel" href="tel:+48 000 000 000">
                            <span><img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt=""></span>
                            <span>+48 000 000 000</span>
                        </a>
                        <a href="#" class="button">Umów się na konsultacje</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</header>
<article id="post-<?php the_ID(); ?>" <?php post_class('offer'); ?>>

    <div class="offer__content">
        <section class="section">
            <div class="section__container ">
                <div class="offer__description">
                    <h2 class="section__title">Na czym polega zabieg</h2>
                    <p>Innowacyjny, skuteczny i bezpieczny zabieg, który stanowi unikalne połączenie wolumetrii oraz
                        medycyny
                        regeneracyjnej. To rodzaj nowoczesnego lipotransferu, polegającego na pobraniu tkanki
                        tłuszczowej
                        pacjenta
                        oraz wykorzystaniu jej jako autologicznego preparatu. Tkankę tę pobiera się w niewielkiej ilości
                        z
                        okolicy
                        biodra, a następnie przygotowuje się ją i filtruje w specjalnym systemie. Odpowiednio
                        oczyszczony
                        tłuszcz
                        może zostać przetworzony w dwa rodzaje substancji:</p>
                    <p><strong>Nano Fat</strong> – preparat z dużą ilością komórek macierzystych, o silnych
                        właściwościach
                        stymulujących. Podawany
                        jest tuż pod powierzchnię skóry w celu jej regeneracji, rewitalizacji, odżywienia i napięcia, a
                        także
                        zagęszczenia włosów.</p>
                    <p><strong>Micro Fat</strong> – materiał służący jako bezpieczny, naturalny wypełniacz, będący
                        doskonałą
                        alternatywą dla syntetycznych preparatów. Idealny do wolumetrii. Dzięki niemu można zmniejszyć
                        bruzdy
                        nosowo-wargowe, zredukować oznaki zmęczenia w okolicy oczu, wymodelować kontur twarzy, usta oraz
                        brodę,
                        poprawić kształt nosa, zrewitalizować i odmłodzić dłonie, okolicę szyi i dekoltu.</p>

                    <h2 class="section__title">Korzyści zabiegu</h2>
                    <ul>
                        <li>rewitalizacja, regeneracja, odżywienie, napięcie skóry twarzy, dłoni, szyi i dekoltu</li>
                        <li>zmniejszenie widoczności bruzd nosowo-wargowych</li>
                        <li>redukcja oznak zmęczenia w okolicy oczu</li>
                        <li>wymodelowanie konturów twarzy</li>
                        <li>wymodelowanie kształtu ust i brody</li>
                        <li>korekta konturu nosa zagęszczenie włosów</li>
                    </ul>

                    <h2 class="section__title">Szczegóły zabiegu</h2>
                    <div class="offer__details offer-details">
                        <div>
                            <div class="offer-details__name"><strong>Czas</strong></div>
                            <div class="offer-details__value">60min.</div>
                        </div>
                        <div>
                            <div class="offer-details__name"><strong>Znieczulenie</strong></div>
                            <div class="offer-details__value">Brak</div>
                        </div>
                        <div>
                            <div class="offer-details__name"><strong>Odczucia bólowe</strong></div>
                            <div class="offer-details__value">Zabieg jest przeprowadzany w znieczuleniu. Nie jest
                                więcbolesny dla pacjenta.
                            </div>
                        </div>
                        <div>
                            <div class="offer-details__name"><strong>Sugerowana liczba</strong></div>
                            <div class="offer-details__value">1 - 3 zabiegów</div>
                        </div>
                        <div>
                            <div class="offer-details__name"><strong>Specjalista</strong></div>
                            <div class="offer-details__value">Dr. Krzysztof Zielmewski</div>
                        </div>
                        <div>
                            <div class="offer-details__name"><strong>Miejsce</strong></div>
                            <div class="offer-details__value">Warszawa, Lódź, Wrocław, Kraków, Poznań</div>
                        </div>
                        <div>
                            <div class="offer-details__name"><strong>Zdolność do pracy</strong></div>
                            <div class="offer-details__value">Bezpośrednio po zabiegu</div>
                        </div>
                    </div>
                    <h2 class="section__title">Cennik</h2>
                    <div class="offer__details offer-details">
                        <div>
                            <div class="offer-details__name"><strong>Twarz</strong></div>
                            <div class="offer-details__value">
                                <strong>Od 3500 zł</strong>
                                <p>Cena ustalana jest na podstawie konsultacji z lekarzem medycyny estetycznej</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="section section--white sym">
            <div class="section__container">
                <h2 class="section__title">Kto wykona mój zabieg?</h2>
            </div>
            <div class="section__container section__container--flex">
                <div class="even">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/doctor.png" alt="">
                </div>
                <div class="even sym__content">
                    <h3>Dr Diana Michajłow</h3>
                    <p>Dyplomowany lekarz medycyny estetycznej, członek Polskiego Towarzystwa Medycyny Estetycznej i
                        Anti-Aging.
                        Skoncentrowana na szukaniu rozwiązań dopasowanych do każdego Pacjenta, oferując nowoczesne
                        metody
                        nie
                        tylko technik anti-aging ale holistycznego podejścia do medycyny estetycznej. Otwarta,
                        zaangażowana
                        i w
                        pełni oddana Pacjentom.</p>
                    <a href="#" class="button button--inline">Więcej</a>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="section__container section__container--flex  section__container--reverse">
                <div class="even">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/how.png" alt="">
                </div>
                <div class="even even--content">
                    <h2 class="section__title">Jaką technologią jest wykonywany?</h2>
                    <p>Innowacyjny proces lipotransferu, w którym tkanka tłuszczowa jest pobierana za pomocą kaniuli,
                        którą
                        opatentował dr Mario Goisis[EG2] . Preparat do zabiegu pozyskuje się poprzez odfiltrowanie
                        tłuszczu w
                        specjalnym systemie.</p>
                </div>
            </div>
        </section>

    </div>


    <section class="section section--dark">
        <h2 class="section__title section__title--center">Opinie</h2>
    </section>

    <section class="section">
        <div class="section__container">
            <h2 class="section__title">FAQ</h2>

            <div class="faq">
                <div class="faq__item">
                    <div class="faq__header faq__header--active">
                        <h5 class="faq__title">Czy zabieg jest bezpieczny?</h5>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-faq.png" alt="">
                        </div>
                    </div>
                    <div class="faq__content">
                        <p>Zabieg opiera się na wykorzystaniu naturalnego materiału, wypreparowanego z tkanki
                            tłuszczowej
                            pacjenta. Jest to bezpieczna alternatywa dla produktów syntetycznych, zatem doskonała dla
                            alergików.</p>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__header">
                        <h5 class="faq__title">Czy zabieg jest bezpieczny?</h5>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-faq.png" alt="">
                        </div>
                    </div>
                    <div class="faq__content">
                        <p>Zabieg opiera się na wykorzystaniu naturalnego materiału, wypreparowanego z tkanki
                            tłuszczowej
                            pacjenta. Jest to bezpieczna alternatywa dla produktów syntetycznych, zatem doskonała dla
                            alergików.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--white spec">
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

    <section class="section">
        <div class="section__container">
            <div class="recommendations">
                <div class="row">
                    <h2 class="section__title">Wskazania</h2>
                    <ul class="plus">
                        <li>zmarszczki</li>
                        <li>bruzdy</li>
                        <li> utrata jędrności skóry</li>
                        <li>ubytki tkankowe</li>
                        <li>cienie pod oczami</li>
                        <li>utrata owalu twarzy</li>
                        <li> wymagający korekcji kształt ust, nosa, brody</li>
                        <li>łysienie</li>
                    </ul>
                </div>
                <div class="row">
                    <h2 class="section__title">Przeciwwskazania</h2>
                    <ul class="minus">
                        <li>zmarszczki</li>
                        <li>bruzdy</li>
                        <li> utrata jędrności skóry</li>
                        <li>ubytki tkankowe</li>
                        <li>cienie pod oczami</li>
                        <li>utrata owalu twarzy</li>
                        <li> wymagający korekcji kształt ust, nosa, brody</li>
                        <li>łysienie</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--white">
        <div class="section__container">
            <h2 class="section__title">Seo tekst</h2>
            <p>Innowacyjny, skuteczny i bezpieczny zabieg, który stanowi unikalne połączenie wolumetrii oraz medycyny
                regeneracyjnej. To rodzaj nowoczesnego lipotransferu, polegającego na pobraniu tkanki tłuszczowej
                pacjenta
                oraz wykorzystaniu jej jako autologicznego preparatu. Tkankę tę pobiera się w niewielkiej ilości z
                okolicy
                biodra, a następnie przygotowuje się ją i filtruje w specjalnym systemie. Odpowiednio oczyszczony
                tłuszcz
                może zostać przetworzony w dwa rodzaje substancji:
            </p>
            <p><strong>Nano Fat</strong> – preparat z dużą ilością komórek macierzystych,
                o silnych właściwościach stymulujących. Podawany jest tuż pod powierzchnię skóry w celu jej regeneracji,
                rewitalizacji, odżywienia i napięcia, a także zagęszczenia włosów.</p>
            <p><strong>Micro Fat</strong> – materiał służący jako
                bezpieczny, naturalny wypełniacz, będący doskonałą alternatywą dla syntetycznych preparatów. Idealny do
                wolumetrii. Dzięki niemu można zmniejszyć bruzdy nosowo-wargowe, zredukować oznaki zmęczenia w okolicy
                oczu,
                wymodelować kontur twarzy, usta oraz brodę, poprawić kształt nosa, zrewitalizować i odmłodzić dłonie,
                okolicę szyi i dekoltu.</p>
        </div>
    </section>

    <section class="section section--primary cta">
        <div class="section__container">
            <div>
                <h2>Umów się na wizytę w Twoim mieście</h2>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div>
                <a href="#" class="button button--accent">Umów konsultacje</a>
            </div>
        </div>
    </section>
</article>
