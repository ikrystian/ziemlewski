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
            <div class="header__description">Nie tylko sprawiamy, że Twoje ciało wygląda lepiej i poprawiamy
                Twoje samopoczucie, ale i wywieramy na Twój organizm działanie lecznicze, które zaczyna się
                od już na poziomie komórek i tkanek.
            </div>
        </div>
    </div>
</header>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php

    /**
     * Template part for displaying front page
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package klinika
     */

    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section class="dr-section section">
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

        <section class="section section--white">
            <div class="section__container">
                <div class="text-center">
                    <p>Charyzma doktora i jego umiejętności sprawiają, że Kliniki Ziemlewski cieszą się ogromnym
                        zaufaniem
                        pacjentów – obecnie liczba osób w bazie gabinetów to już ponad 10 000.</p>
                    <p>Kliniki Ziemlewski znajdują się w największych polskich miastach:</p>
                    <p><strong>Łódź, Wrocław, Warszawa, Kraków, Poznań</strong></p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="section__container section__container--flex">
                <div class="section__image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-image-1.png" alt="">
                </div>
                <div class="section__content">
                    <h2 class="section__title">Misja/Wizja</h2>
                    <p>Kliniki Ziemlewski powstały z pasji jednego człowieka – dr. Krzysztofa Ziemlewskiego, pioniera
                        medycyny estetycznej w Polsce. Jego ogromne doświadczenie, profesjonalizm oraz fascynacja ideą
                        złotej proporcji zaowocowały niezwykłą wizją. Wizją, w której gabinet jest czymś więcej niż
                        tylko miejscem zabiegowym. To przestrzeń, w której lekarz staje się artystą, medycyna – sztuką,
                        a pacjent – dziełem. </p>

                    <p>Zgodnie z tą filozofią w Klinikach Ziemlewski do każdej osoby podchodzi się wyjątkowo. Zabiegi są
                        dobierane indywidualnie, a ich wykonanie jest zawsze perfekcyjne. Wszystko po to, by wydobyć
                        idealne, naturalne piękno, zachowując przy tym doskonałe proporcje i estetyczną harmonię.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="section__container section__container--flex section__container--reverse">
                <div class="section__image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-image-2.png" alt="">
                </div>
                <div class="section__content">
                    <p>Celem dr. Krzysztofa Ziemlewskiego jest nieustanny rozwój i wyznaczanie nowej jakości w medycynie
                        estetycznej. W swoich gabinetach stosuje innowacyjne, autorskie techniki, najnowocześniejsze
                        technologie i zabiegi premium o najwyższej skuteczności. Pacjenci mogą więc korzystać z bogatej,
                        ale specjalnie wyselekcjonowanej oferty zabiegów na twarz i ciało. Efekt ma spełnić oczekiwania,
                        a pierwsza i każda następna wizyta – kończyć się sukcesem.</p>
                    <p>Charyzma doktora i jego umiejętności sprawiają, że Kliniki Ziemlewski cieszą się ogromnym
                        zaufaniem pacjentów – obecnie liczba osób w bazie gabinetów to już ponad 10 000.</p>
                </div>
            </div>
        </section>

        <section class="section section--dark testimonials">
            <div class="section__container">
                <p class="testimonials__description">Opinie osób, które trafiły w ręce dr. Ziemlewskiego, są
                    najdobitniejszym dowodem jego kunsztu:</p>
                <?php echo do_shortcode('[sp_testimonial id="80"]'); ?>
            </div>
        </section>

        <section class="section">
            <div class="section__container section__container--flex section__container--reverse">
                <div class="section__image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-image-3.png" alt="">
                </div>
                <div class="section__content">
                    <h2 class="section__title">Filozofia Boskiej Proporcji</h2>
                    <p>Symetria otacza nas codziennie: stanowi element natury, sztuki czy ludzkiego organizmu. Już w
                        starożytności dostrzeżono, że to, co proporcjonalne i harmonijne, cieszy ludzkie oko bardziej
                        niż chaos. W dążeniu do opisania ideału zaczęto więc analizować zagadnienia związane właśnie z
                        symetrią. W wyniku tego powstała zasada złotego podziału (Golden Ratio), zwanego też boską/złotą
                        proporcją czy ciągiem Fibonacciego. Odzwierciedla ona idealnie symetryczną relację między 2
                        proporcjami. W ujęciu czysto matematycznym złoty podział polega na rozdzieleniu odcinka na 2
                        części tak, by stosunek długości dłuższej części do krótszej był identyczny, jak całego odcinka
                        do dłuższej części. Ten stosunek wyraża złota liczba, oznaczana grecką literą φ. </p>
                    <p>Matematyczną teorię zaczęto stosować, by tworzyć doskonale piękne rzeczy, np. bryły czy
                        konstrukcje budynków, a nawet dzieła sztuki. Zainteresowała ona również medycynę. Bazując m.in.
                        na boskiej proporcji, chirurg plastyczny dr Stephen Marquardt opracował tzw. złotą maskę, która
                        stanowi dwuwymiarowy, geometryczny obraz twarzy postrzeganej jako idealna. W praktycznym ujęciu
                        osoby, których rysy twarzy nakładają się na złotą maskę, uchodzą w różnych częściach świata za
                        wyjątkowo atrakcyjne (np. Angelina Jolie).</p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="section__container">
                <p class="text-center">Idea Golden Ratio znakomicie wpisuje się oczywiście w medycynę estetyczną,
                    dysponującą narzędziami
                    mogącymi wcielić teorię w życie. Zafascynowała ona dr. Krzysztofa Ziemlewskiego, który postanowił
                    wykorzystać swoje doświadczenie oraz umiejętności, by wydobywać idealne, harmonijne piękno w swoich
                    Klinikach. W czasie zabiegu modelowania twarzy doktor wyznacza na skórze pacjenta specjalne linie
                    pokrywające się z maską Marquardta i według nich modeluje określone partie twarzy. Efekt jest dzięki
                    temu doskonale harmonijny. Doktor dzieli się także swoją pasją podczas wyjątkowych autorskich
                    warsztatów z wolumetrii wykonywanej zgodnie z ideą złotego podziału.</p>
            </div>
        </section>

        <section class="section section--white">
            <h2 class="section__title section__title--center">Klinika</h2>
            <div class="section__container section__container--flex">
                <div class="section__image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-image-4.png" alt="">
                </div>
                <div class="section__content">
                    <h3>Karolina Pazera</h3>
                    <h4>lekarz medycyny estetycznej</h4>
                    <p>Ukończyła Wydział Lekarski Uniwersytetu Medycznego w Warszawie oraz studia podyplomowe na
                        kierunku Kosmetologia – Medycyna Estetyczna dla Lekarzy w Krakowskiej Wyższej Szkole Promocji
                        Zdrowia i od tego momentu nieprzerwanie rozwija swoją pasję oraz wiedzę. Brała udział w licznych
                        kongresach, ma wieloletnie doświadczenie, które wykorzystuje nie tylko w codziennej pracy z
                        pacjentami, lecz także dzieląc się nim podczas prowadzonych szkoleń z zakresu medycyny
                        estetycznej. Wraz z dr. Krzysztofem Ziemlewskim zainicjowała Lips Academy i – podobnie jak
                        doktor – jest ambasadorem marki Croma Pharma. W Klinikach Ziemlewski dr Pazera przeprowadza
                        zabiegi estetyczne z użyciem toksyny botulinowej i wypełniaczy, korektę zmarszczek, modelowanie
                        twarzy, mezoterapie oraz zabiegi z zakresu laseroperapii. </p>
                    <p>Jednak jej ogromną pasją jest przede wszystkim modelowanie ust kwasem hialuronowym. Lata
                        doświadczenia i zawodowej praktyki pozwoliły jej wypracować własną, unikatową technikę
                        zabiegową, z której doktor słynie. Potrafi ona nadać perfekcyjny, a jednocześnie bardzo
                        naturalny kształt nawet najtrudniejszym ustom. Po zabiegu pacjentki wyglądają tak, jakby ta na
                        nowo wymodelowana część twarzy była im od zawsze przeznaczona. </p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="section__container">
                <p>W Klinikach Ziemlewski przywracamy młody wygląd twarzy, ciału oraz okolicom intymnym. Nasze
                    specjalności to:</p>
                <p><strong>Medycyna estetyczna i leczenie powikłań po zabiegach</strong></p>
                <p>Wykonujemy zabiegi medycyny estetycznej, w trakcie których wykorzystujemy m.in. botox (zmarszczki,
                    bruksizm, nadpotliwość), kwas hialuronowy (wolumetria, wypełnianie zmarszczek, modelowanie ust),
                    nici liftingujące i nici autologiczne, biostymulatory oraz osocze bogatopłytkowe (mezoterapia).
                    Pomagamy też osobom, u których występują powikłania po zabiegach medycyny estetycznej.</p>
                <p><strong>Kosmetologia hi-tech</strong></p>
                <p>Oferta Klinik to również terapie bazujące na nowoczesnych urządzeniach hi-tech: laseroterapia,
                    zabiegi ujędrniające, zabiegi wyszczuplające czy modelowanie sylwetki.</p>
                <p><strong>Ginekologia estetyczna</strong></p>
                <p>Posiadamy także bogatą ofertę z zakresu ginekologii estetycznej. Można wykonać u nas zabiegi, takie
                    jak waginoplastyka, laserowe obkurczanie pochwy, laserowe leczenie nietrzymania moczu, powiększenie
                    punktu G oraz ujędrnianie warg sromowych. </p>
                <p><strong>Szkolenia</strong></p>
                <p>Kliniki Ziemlewski oferują też profesjonalne szkolenia dla lekarzy medycyny estetycznej, obejmujące
                    szeroki zakres tematów: szkolenia z wolumetrii, powiększanie i modelowanie ust, itp.</p>
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

    </article>
