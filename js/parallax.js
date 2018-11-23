//
// PARALLAX - SCROLL
//

var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "400%"}});

new ScrollMagic.Scene({triggerElement: "#gs-ciencia"})
.setTween("#gs-ciencia > .fundo-principal", {y: "-10%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#gs-ciencia"})
.setTween("#gs-ciencia > .fundo-foguete", {y: "40%", x: "10%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#gs-ciencia"})
.setTween(".logo-getfish", {y: "200%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#gs-discovery"})
.setTween("#gs-discovery > .fundo-discovery", {y: "-13%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);

new ScrollMagic.Scene({triggerElement: ".sucesso-container"})
.setTween(".sucesso-container > .fundo-globular-parallax", {y: "-30%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);

