//
// WOW
//

new WOW().init();


//
// ANIMATE MENU ICON
//

$(document).ready(function () {
        $('.animated-icon1,.animated-icon3,.animated-icon4').click(function () {
            $(this).toggleClass('open');
        });
    });

    $(document).ready(function () {

        $('.navbar-toggler').on('click', function () {

        $('.animated-icon1').toggleClass('open');

        $('.animated-icon3').toggleClass('open');

        $('.animated-icon4').toggleClass('open');

    });

});


//
// COUNTER - ANIMATION
//

// COUNTER ON TOP
$('.counter-value').each(function () {
    var $this = $(this),
        countTo = $this.attr('data-count');
    $({
        countNum: $this.text()
    }).animate({
            countNum: countTo
        },
        {
            duration: 2500,
            easing: 'swing',
            step: function () {
                $this.text(Math.floor(this.countNum));
            },
            complete: function () {
                $this.text(this.countNum);
            }
        }
    );
});

// COUNTER ON MIDDLE PAGE
// var a = 0;
// $(window).scroll(function () {
//     var oTop = $('.numero-qtd').offset().top - window.innerHeight;
//     if (a == 0 && $(window).scrollTop() > oTop) {
        
//         // COLOCAR O MESMO CÓDIGO A CIMA AQUI COM A CLASSE DIFERENTE

//         a = 1;
//     }
// });
