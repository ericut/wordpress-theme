<?php 
	$wp_theme_url = get_template_directory_uri();
    $wp_theme_logic = get_template_directory();
    
    include($wp_theme_logic . "/src/modulos/varset.php"); 
?>

<footer class="rodape-container">

    <div class="container">
        <div class="row rodape-enderecos">
            <div class="col-md-4 col-sm-12">
                <span class="title-social">Siga-nos</span>
                <a class="rede-social-icon mx-3" href="<?php echo $link_facebook; ?>" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="rede-social-icon mx-3" href="<?php echo $link_linkedin; ?>" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <div class="enderecos-container">
                    <p class="end-icone sp">
                        <i class="fas fa-map-marker-alt"></i>
                    </p>
                    <p class="end-txt">
                        <?php echo $endereco_sp; ?>
                    </p>
                    <p class="end-tel">
                        <?php echo $telefone_sp; ?>
                    </p>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="enderecos-container">
                    <p class="end-icone rp">
                        <i class="fas fa-map-marker-alt"></i>
                    </p>
                    <p class="end-txt">
                        <?php echo $endereco_rp; ?>
                    </p>
                    <p class="end-tel">
                        <?php echo $telefone_rp; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="rodape-assinatura">
        <div class="container">
            <div class="row rodape-copyright">
                <div class="col-md-6 col-sm-12">
                    <div class="assinatura">
                        <?php echo date('Y'); ?> © BRASIL<strong>.GS</strong> Copyright <span>•</span> Ciência do Consumo © Todos os direitos reservados.
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="logo-rodape">
                        <img class="logo-gs" src="<?= $wp_theme_url; ?>/img/logo-rodape.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>