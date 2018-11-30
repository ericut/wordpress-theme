<?php
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();
?>
    
<section id="gs-titulo" class="titulo-container">
    <div class="titulo">
        <div class="view  wow fadeIn">

            <?php   if(get_the_post_thumbnail()) : ?>
                <img class="imagem-titulo blurred opacityhalf" src="<?php the_post_thumbnail_url(); ?>">
            <?php else : ?>
                <img class="imagem-titulo" src="<?= $wp_theme_url; ?>/img/topo-gs-padrao.jpg">
            <?php endif; ?>
            
            <div class="mask rgba-black-light pattern-5 d-flex justify-content-center align-items-center">
                <div class="chamada-container text-center white-text mx-5 wow fadeInUp blog-detalhes">

                    <h2 class="chamada-meio">
                        <span class="change-text"><?php the_title(); ?></span>
                    </h2>

                    <span class="bottom-liner"></span>
                </div>
            </div>
        </div>
    </div>
</section>