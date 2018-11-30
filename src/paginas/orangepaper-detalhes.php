<?php
    $wp_theme_url = get_template_directory_uri();
    $wp_theme_logic = get_template_directory();
?>

<?php include($wp_theme_logic . "/src/estruturas/titulos-blog.php"); ?>

<main class="pagina-interna" style="background: #ffffff;">

    <section id="gs-orangepaper" class="blog-container">
        
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
                        <div class="col-sm-12 col-md-9">

                            <?php the_content(); ?>

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
