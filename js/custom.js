//
// ANIMATE CSS
//

$(document).ready(function(){
    $('.hexa-animado').addClass('hidden').viewportChecker({
        classToAdd: 'animated fadeInUp',
        offset: 75
    });

    $('.hexa-esquerda').addClass('hidden').viewportChecker({
        classToAdd: 'animated rotateInUpLeft',
        offset: 100
    });

    $('.hexa-direita').addClass('hidden').viewportChecker({
        classToAdd: 'animated rotateInUpRight',
        offset: 100
    });

    $('.logo-getfish').addClass('hidden').viewportChecker({
        classToAdd: 'animated fadeInUp',
        offset: 150
    });

    $('.logo-discovery').addClass('hidden').viewportChecker({
        classToAdd: 'animated fadeInUp',
        offset: 150
    });

    $('.discovery-rastro').addClass('hidden').viewportChecker({
        classToAdd: 'animated fadeInUp',
        offset: 50
    });

    $('.discovery-infos').addClass('hidden').viewportChecker({
        classToAdd: 'animated fadeInUp',
        offset: 150
    });

    $('.discovery-infos > .disc-imagem').addClass('hidden').viewportChecker({
        classToAdd: 'animated fadeInUp',
        offset: 150
    });

    $('.discovery-infos > .disc-hexa-icon').addClass('hidden').viewportChecker({
        classToAdd: 'animated fadeInLeft',
        offset: 200
    });

    $('.discovery-infos > .disc-texto').addClass('hidden').viewportChecker({
        classToAdd: 'animated fadeInLeft',
        offset: 300
    });
    
    $('.a > .sucesso-item').addClass('hidden').viewportChecker({
        classToAdd: 'animated fadeInUp',
        offset: 120
    });
    
    $('.b > .sucesso-item').addClass('hidden').viewportChecker({
        classToAdd: 'animated fadeInUp',
        offset: 160
    });
    
    $('.c > .hexa-sucesso').addClass('hidden').viewportChecker({
        classToAdd: 'animated fadeInUp',
        offset: 220
    });
    
    $('.fundo-globular-animate').addClass('hidden').viewportChecker({
        classToAdd: 'animated fadeInUp',
        offset: 260
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
