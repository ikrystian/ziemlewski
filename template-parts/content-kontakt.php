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

    <div class="contact-page">
        <div class="contact-page__top">
            <div class="contact-page__info">
                <p>Centralna recepcja</p>
                <p><a href="">48 000 000 000</a></p>
                <p><a href="mailto:centrala@klinikiziemlewski.pl">centrala@klinikiziemlewski.pl</a></p>
                <p>pn - pt: 10:00 - 19:00</p>
                <p>sb - nd: Nieczynne</p>
            </div>

            <form action="" class="contact-form contact-page__form">
                <h2 class="contact-page__title">Formularz kontaktowy</h2>
                <div class="contact-form__group">
                    <label class="contact-form__label" for="name">Imię i nazwisko <span
                                class="contact-form__required">*</span></label>
                    <input type="text" placeholder="Podaj swoje imię i nazwisko" id="name" class="contact-form__input"
                           required>
                </div>
                <div class="contact-form__group">
                    <label class="contact-form__label" for="tel">Telefon <span
                                class="contact-form__required">*</span></label>
                    <input type="tel" placeholder="Twój numer telefonu" id="tel" class="contact-form__input" required>
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="email">E-mail <span
                                class="contact-form__required">*</span></label>
                    <input type="email" placeholder="Twój adres email" id="email" class="contact-form__input" required>
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="city">Miasto <span
                                class="contact-form__required">*</span></label>
                    <select name="city" id="city" class="contact-form__select">
                        <option value="">Wybierz miasto</option>
                        <option value="">Warszawa</option>
                        <option value="">wrocław</option>
                        <option value="">poznań</option>
                        <option value="">kraków</option>
                        <option value="">łódź</option>
                    </select>
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="message">Wiadomość</label>
                    <textarea name="message" class="contact-form__textarea" id="message" cols="30" rows="10"></textarea>
                </div>

                <div class="contact-form__privacy">
                    <input type="checkbox" id="">
                    <label for="">Zgadzam się na przetwarzanie moich danych osobowych w związku z Rozporządzeniem
                        Parlamentu Europejskiego i Rady UE w sprawie ochrony osób fizycznych w związku z przetwarzaniem
                        danych osobowych i w sprawie swobodnego przepływu takich danych (RODO) z dnia 27.04.2016 r. oraz
                        rosnącej wartości informacji.</label>
                </div>

                <footer class="contact-page__form-footer">
                    <button class="button button--primary">Wyślij</button>
                </footer>
            </form>
        </div>

        <section class="section contact-page__map map-section">
            <div class="map-section__mobile-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/map-desktop.png" alt="">
            </div>
            <div class="section__container">

                <dl class="cities">
                    <dt class="active">Warszawa</dt>
                    <dd>
                        <p>ul. Piękna 24/26 a lok. 27 (V piętro)</p>
                        <a href="#">wskazówki dojazdu</a>
                        <a href="#" class="button button--primary">Umów konsultacje</a>
                    </dd>
                    <dt>Wroclow</dt>
                    <dd>
                        <p>ul. Piękna 24/26 a lok. 27 (V piętro)</p>
                        <a href="#">wskazówki dojazdu</a>
                        <a href="#" class="button button--primary">Umów konsultacje</a>
                    </dd>
                    <dt>Poznań</dt>
                    <dd>
                        <p>ul. Piękna 24/26 a lok. 27 (V piętro)</p>
                        <a href="#">wskazówki dojazdu</a>
                        <a href="#" class="button button--primary">Umów konsultacje</a>
                    </dd>
                    <dt>Kraków</dt>
                    <dd>
                        <p>ul. Piękna 24/26 a lok. 27 (V piętro)</p>
                        <a href="#">wskazówki dojazdu</a>
                        <a href="#" class="button button--primary">Umów konsultacje</a>
                    </dd>
                    <dt>łódź</dt>
                    <dd>
                        <p>ul. Piękna 24/26 a lok. 27 (V piętro)</p>
                        <a href="#">wskazówki dojazdu</a>
                        <a href="#" class="button button--primary">Umów konsultacje</a>
                    </dd>
                </dl>

            </div>
        </section>

        <section class="section trainings">
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

