<?php 
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();
?>

<!-- NAVBAR -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar wow fadeInDown">

    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-9">
                    <div class="contato-esquerda">
                        BRASIL<strong>.GS</strong> <span class="cor-fonte-primaria">•</span> <a class="topo-telefone" href="tel:551133530833">+(55) 17 <strong>3353 0833</strong></a>
                    </div>
                </div>
                <div class="col-md-6 col-3">
                    <div class="social-direita">
                        <a class="rede-social" href="https://www.facebook.com/gsgroup.inteligenciaenegocios" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="rede-social" href="https://www.linkedin.com/company/gs-group/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        
        <!-- LOGO -->
        <h2 class="topo-logo">
            <a class="navbar-brand" href="index">
                <img src="<?= $wp_theme_url; ?>/img/logo.png">
            </a>
        </h2>

        <!-- MENU MOBILE -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="animated-icon1"><span></span><span></span><span></span></div>
        </button>

        <!-- MENU DIREITO -->
        <div class="collapse navbar-collapse menu-mobile" id="navbarSupportedContent">
            
            <?php
                wp_nav_menu(
                    array('theme_location' => 'header-menu')
                );
            ?>

        </div>
    </div>

</nav>

<div id="topo"></div>