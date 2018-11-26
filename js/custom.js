//
// ANIMATE CSS
//

// This code dosen't works on Firefox and IE and works on other browesers.
$(document).ready(function () {
        $('.animated-icon1,.animated-icon3,.animated-icon4').click(function () {
            $(this).toggleClass('open');
        });
    });
    
    // Works everywhere
    $(document).ready(function () {
    
            // Hide/show animation hamburger function
            $('.navbar-toggler').on('click', function () {
            
            // Take this line to first hamburger animations
            $('.animated-icon1').toggleClass('open');
            
            // Take this line to second hamburger animation
            $('.animated-icon3').toggleClass('open');
            
            // Take this line to third hamburger animation
            $('.animated-icon4').toggleClass('open');

        });
    
    });

    
//
// ANIMATE CSS
//

new WOW().init();


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
                //alert('finished');
            }

        });
});

// COUNTER ON MIDDLE PAGE
var a = 0;
$(window).scroll(function () {
    var oTop = $('.numero-qtd').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        
        // COLOCAR O MESMO CÓDIGO A CIMA AQUI COM A CLASSE DIFERENTE

        a = 1;
    }
});
