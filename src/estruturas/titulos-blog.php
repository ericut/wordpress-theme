<?php
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();
?>
    
<section id="gs-titulo" class="titulo-container">
    <div class="titulo">
        <div class="view wow fadeIn">

            <?php if( get_the_post_thumbnail() ) { ?>
                <img class="imagem-titulo blurred opacityhalf" src="<?php the_post_thumbnail_url(); ?>">
            <?php } else { ?>
                <img class="imagem-titulo" src="<?= $wp_theme_url; ?>/img/topo-gs-padrao.jpg">
            <?php } ?>
            
            <div class="mask rgba-black-light pattern-5 d-flex justify-content-center align-items-center">
                <div class="chamada-container text-center white-text mx-5 wow fadeInUp blog-detalhes">

                    <h2 class="chamada-meio">
                        <span class="change-text">
                            
                            <?php if ( is_archive() ) { ?>
                                <?php if ( is_category()  ) { ?>
                                    <?php single_cat_title(); ?>
                                <?php } else { ?>
                                    <?php post_type_archive_title(); ?>
                                <?php } ?>
                            <?php } else { ?>
                                <?php the_title(); ?>
                            <?php } ?>

                        </span>
                    </h2>
                    
                    <p class="chamada-baixo">
                        <?php if ( is_singular( 'imprensa' ) ) {  ?>
                            Sala de Imprensa
                        <?php } elseif ( is_singular( 'orangepaper' ) ) { ?>
                            Orange Paper
                        <?php } elseif ( is_post_type_archive( 'imprensa' ) ) { ?>
                            <!-- Presente na Mídia -->
                        <?php } elseif ( is_post_type_archive( 'orangepaper' ) ) { ?>
                            <!-- Universidade GS -->
                        <?php } elseif ( is_page( 'blog' ) ) { ?>
                            
                        <?php } else { ?>
                            <?php if ( is_single() ) { ?>
                                <?php the_category(); ?>
                            <?php } else { ?>
                                <!-- Blog GS -->
                            <?php } ?>
                        <?php } ?>
                    </p>
                    <span class="bottom-liner"></span>
                </div>
            </div>
        </div>
    </div>
</section>