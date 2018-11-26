<?php get_header(); 
    $wp_theme_url = get_template_directory_uri();
?>
<footer class="rodape-container">

    <div class="container">
        <div class="row rodape-enderecos">
            <div class="col-md-4 col-sm-12">
                <a class="rede-social-icon mx-3" href="https://www.facebook.com/gsgroup.inteligenciaenegocios/" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="rede-social-icon mx-3" href="https://www.linkedin.com/company/gs-group/" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="enderecos-container">
                    <p class="end-icone sp">
                        <i class="fas fa-map-marker-alt"></i>
                    </p>
                    <p class="end-txt">
                        Av. Das Nações Unidas, 8501 - 17º andar <br/>Pinheiros - São Paulo/SP • Brasil <br/>CEP 05425-070
                    </p>
                    <p class="end-tel">
                        +(55) 11 <strong>3434 6484</strong>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="enderecos-container">
                    <p class="end-icone rp">
                        <i class="fas fa-map-marker-alt"></i>
                    </p>
                    <p class="end-txt">
                        Av. Dr. Aniloel Nazareth, 5650 <br/>São José do Rio Preto/SP • Brasil <br/>CEP 15070-565 
                    </p>
                    <p class="end-tel">
                        +(55) 17 <strong>3353 0833</strong>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="rodape-copyright">
                    <script language=javascript type="text/javascript">
                        now = new Date
                        document.write (now.getFullYear())
                    </script>
                    © BRASIL<strong>.GS</strong> Copyright <span>•</span> Ciência do Consumo © Todos os direitos reservados.
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="logo-rodape">
                    <img class="logo-gs" src="<?= $wp_theme_url; ?>/img/logo-rodape.png">
                </div>
            </div>
        </div>
    </div>

</footer>