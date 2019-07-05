<?php
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();
?>

<?php include($wp_theme_logic . "/src/estruturas/titulos-interno.php"); ?>
	
<main class="pagina-default" style="background: #ffffff;">

	<section id="gs-page" class="page-container">
		
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

	</section>

</main>
