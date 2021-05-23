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
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'klinika'); ?></a>

    <section class="top">
        <header id="masthead" class="site-header header">
            <div class="header__content">
                <div class="site-branding">
                    <?php the_custom_logo(); ?>
                </div><!-- .site-branding -->

                <div class="header__contact-section">
                    <a href="tel:+48000000000">
                        <svg width="22" height="23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.584 1.834H6.417A1.834 1.834 0 004.584 3.67v14.675c0 1.013.82 1.835 1.833 1.835h9.166a1.834 1.834 0 001.834-1.835V3.67c0-1.013-.821-1.835-1.834-1.835zM11 16.51h.01"
                                  stroke="#9F9F9F" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>+48 000 000 000</span>
                    </a>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <button class="main-navigation__mobile-menu menu-toggle" aria-controls="primary-menu"
                            aria-expanded="false">
                        <svg width="41" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.922 20h30M5.922 10h30M5.922 30h30" stroke="#fff" stroke-width="2"
                                  stroke-linejoin="round"/>
                        </svg>
                    </button>
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

            <form action="" class="contact-form">
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
                    <label class="contact-form__label" for="email">E-mail <span class="contact-form__required">*</span></label>
                    <input type="email" placeholder="Twój adres email" id="email" class="contact-form__input" required>
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="city">Miasto <span
                                class="contact-form__required">*</span></label>
                    <select name="city" id="city" class="contact-form__select">
                        <option value="">Wybierz miasto</option>
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

                <footer class="form__footer">
                    <button class="button button--primary">Wyślij</button>
                </footer>
            </form>
                <div class="contact-overlay__info">
                    <h3>Centralna recepcja</h3>
                    <p>Centralna recepcja</p>
                    <p><a href="">48 000 000 000</a></p>
                    <p><a href="mailto:centrala@klinikiziemlewski.pl">centrala@klinikiziemlewski.pl</a></p>
                    <p>pn - pt: 10:00 - 19:00</p>
                    <p>sb - nd: Nieczynne</p>
                </div>
            </div>
        </div>
    </section>
