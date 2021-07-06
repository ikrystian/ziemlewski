(function ($) {
    $(document).ready(function () {
        $('.loader').fadeOut();
        const body = $('body');
        const rel = $('link[rel=canonical]').attr('href');
        body.on('click', '.gallery-overlay', function () {
            $(this).fadeOut();
        })

        $('.gallery__link').on('click', function (e) {
            e.preventDefault();
            const template = `    
			<div class="gallery-overlay">
				<img src="${$(this).attr('href')}" class="gallery-overlay__image" alt="">
			</div>
		`;
            body.append(template);
        })

        $(window).scroll(function (){
            const scroll = $(window).scrollTop();

            if(scroll > 100) {
                $('.header').addClass('header--scrolled');
            } else {
                $('.header').removeClass('header--scrolled');
            }
        })

        const overlay = $('.contact-overlay');
        $('.contact-overlay__hide-button').on('click', function () {
            overlay.removeClass('contact-overlay--opened');
            body.removeClass('locked');
        })

        $('.consultation-button a, a.open-consultation-modal').on('click', function (e) {
            e.preventDefault();
            body.addClass('locked');
            overlay.addClass('contact-overlay--opened');
        });

        $('.cities dt').on('click', function () {
            if ($(this).hasClass('active')) {
                return false;
            }

            $('.cities dt').removeClass('active');
            $(this).addClass('active');
            $('.cities dd').slideUp();
            $(this).next().slideToggle();
        })

        $('.faq__item:nth-child(1) .faq__header').addClass('faq__header--active');

        $('.faq__header').on('click', function() {
            $('.faq__content').slideUp();
            $('.faq__header').removeClass('faq__header--active');
            $(this).addClass('faq__header--active');
            $(this).next().slideDown();
        })

        $('.offer-button > a, .close-sub, .open-offer').on('click', function(e) {
            e.preventDefault();
            $('.mega-menu').animate({
                height: 'toggle',
                opacity: 'toggle'
            } );
        } )


        $('.mega-menu .menu').removeClass('menu');
        // $('.mega-menu a').each(function() {
        //     $(this).attr('href', `${rel}oferta`);
        //     if($(this)[0].hasAttribute('title')) {
        //         const title = $(this).attr('title');
        //         $(this).append(`<span>${title}</span>`)
        //     }
        // })

        $('.main-navigation__mobile-menu').on('click', function() {
            $(this).toggleClass('active');
            $('.header .mobile-menu').toggle();
            body.toggleClass('locked');
        });

        if(localStorage.getItem('cookie') === 'accepted') {
            $('.cookie-bar').remove();
        }

        $('#acceptcookie').on('click', () => {
            localStorage.setItem('cookie', 'accepted')
            $('.cookie-bar').slideUp();
        });

    });
})(jQuery)
