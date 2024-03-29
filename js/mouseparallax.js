//
// PARALLAX - MOUSE HOVER
//

$(".zoombox-parallax").mousemove(function (e) {
    parallaxIt(e, ".logo-zoombox", -80);
    parallaxIt(e, ".intel-captura", -15);
    parallaxIt(e, ".intel-analitica", -20);
    parallaxIt(e, ".intel-promocional", -35);
    parallaxIt(e, ".intel-acionavel", -40);
    parallaxIt(e, ".orbitas", -50);
    parallaxIt(e, ".solucao-image", 50);
    parallaxIt(e, ".solucao-image h3", 60);
    parallaxIt(e, ".solucao-image p", 60);
});

function parallaxIt(e, target, movement) {
    var $this = $(".zoombox-parallax");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;

    TweenMax.to(target, 1, {
        x: (relX - $this.width() / 2) / $this.width() * movement,
        y: (relY - $this.height() / 2) / $this.height() * movement
    });
}


//
// MOUSE HOVER SHOW CONTENT
//

$(function () {
    $(".solucoes-mouseover .thumb-solucao-image").mouseover(function () {

        var src = $(this).attr('data');
        var classs = $(this).attr('class');
        classs = classs.substr(6);
        $('.' + classs).find('img').attr('src', src);

        var txtsrc = $(this).attr('data-text');
        var txtclasss = $(this).attr('class');
        txtclasss = txtclasss.substr(6);
        $('.' + txtclasss).find('p').html(txtsrc);

        var titsrc = $(this).attr('data-title');
        var titclasss = $(this).attr('class');
        titclasss = titclasss.substr(6);
        $('.' + titclasss).find('h3').html(titsrc);

    })
})