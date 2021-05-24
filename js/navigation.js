(function ($) {
    $(document).ready(function () {
        const body = $('body');
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


        const overlay = $('.contact-overlay');
        $('.contact-overlay__hide-button').on('click', function() {
            overlay.removeClass('contact-overlay--opened');
        })

        $('.consultation-button a').on('click', function(e) {
            e.preventDefault();
            overlay.addClass('contact-overlay--opened');

        })
    });
})(jQuery)
