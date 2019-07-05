<?php
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();
?>

<main class="pagina-default" style="background: none;">

    <section id="gs-page" class="page-container">

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

	</section>

</main>
