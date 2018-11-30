<?php
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();
?>

<?php include($wp_theme_logic . "/src/estruturas/titulos-interno.php"); ?>
	
<main class="pagina-interna" style="background: #ffffff;">

	<section id="gs-canais" class="page-container">
        
        <div class="divisores"><div class="blog-top-divisor"></div></div>

            <div class="container">

                <?php
                    if( have_posts() ) { 
                ?>

                    <?php
                        while( have_posts() ) {
                            the_post();
                    ?>

                        <?php the_content(); ?>

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
