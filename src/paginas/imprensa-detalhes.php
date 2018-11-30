<?php
    $wp_theme_url = get_template_directory_uri();
    $wp_theme_logic = get_template_directory();
?>

<?php include($wp_theme_logic . "/src/estruturas/titulos-blog.php"); ?>

<main class="pagina-interna" style="background: #ffffff;">

    <section id="gs-imprensa" class="blog-container">
        
        <div class="divisores"><div class="blog-top-divisor"></div></div>

        <div class="container">

            <?php
                if( have_posts() ) { 
            ?>

                <?php
                    while( have_posts() ) {
                        the_post();
                ?>

                    <div class="row">
                        <div class="col-12 text-center">
                            
                            <div class="imagem-detalhe-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="interna-titulo blogdetalhes">
                                
                                <h2 class="chamada-meio">

                                </h2>
                                <p class="chamada-baixo">
                                    <?php the_content(); ?>
                                </p>

                            </div>
                        </div>
                    </div>

                <?php
                    }
                ?>

            <?php
                }
            ?>

        </div>

        <div class="divisores"><div class="blog-bot-divisor"></div></div>

    </section>

</main>
