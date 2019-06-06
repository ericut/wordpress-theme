<?php
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();
?>

<?php include($wp_theme_logic . "/src/estruturas/titulos-interno.php"); ?>
	
<main class="pagina-interna" style="background: #ffffff;">

	<section id="gs-canais" class="page-container">
        
        <div class="divisores"><div class="blog-top-divisor"></div></div>

            <div class="container">
            
                <p style="background-color: #aa0000; color: #ffffff; padding: 10px;">
                    <strong>ATENÇÃO!</strong> Por conta da nossa migração de página, seu antigo login pode não funcionar. Se isso acontecer, refaça o seu cadastro e aguarde a liberação do acesso. 
                </p>

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
