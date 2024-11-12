/*<!-- <meta name="subject" content="Travis">
<meta name="copyright" content="4lph4-travis">
<meta name="author" content="A747iR, 4lph4-ir@gmail.com">
<meta name="designer" content="A747ir">
<meta name="owner" content="4lph4Ir">
*/


$(document).ready(function () {

    $('.who-we-are-section .counter').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

});

