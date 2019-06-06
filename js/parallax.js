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

new ScrollMagic.Scene({triggerElement: "#gs-discovery"})
.setTween("#gs-discovery > .fundo-discovery", {y: "-13%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);

new ScrollMagic.Scene({triggerElement: ".sucesso-container"})
.setTween(".sucesso-container > .fundo-globular-parallax", {y: "-30%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#gs-depoimentos"})
.setTween("#gs-depoimentos > .fundo-depoimentos", {y: "-30%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);

// TÍTULO

new ScrollMagic.Scene({triggerElement: "#gs-titulo"})
.setTween("#gs-titulo > .titulo > .view > .imagem-titulo", {y: "-40%", x: "-10%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);

// INTERNAS

new ScrollMagic.Scene({triggerElement: "#gs-timeline"})
.setTween("#gs-timeline > .fundo-timeline", {y: "-40%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#gs-contato"})
.setTween("#gs-contato > .fundo-contato", {y: "-40%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#gs-parceiro"})
.setTween("#gs-parceiro > .fundo-parceiro", {y: "-40%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#gs-carreira"})
.setTween("#gs-carreira > .fundo-carreira", {y: "-40%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#gs-timegs"})
.setTween("#gs-timegs > .fundo-timegs", {y: "-40%", ease: Linear.easeNone})
.addIndicators()
.addTo(controller);