<?php
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();
?>
    
<section id="gs-titulo" class="titulo-container">
    <div class="titulo">
        <div class="view  wow fadeIn">

            <?php include($wp_theme_logic . "/src/modulos/titulos-imagem.php"); ?>
            
            <div class="mask rgba-black-light pattern-5 d-flex justify-content-center align-items-center">
                <div class="chamada-container text-center white-text mx-5 wow fadeInUp">

                    <?php include($wp_theme_logic . "/src/modulos/titulos-texto.php"); ?>

                    <span class="bottom-liner"></span>
                </div>
            </div>
        </div>
    </div>
</section>