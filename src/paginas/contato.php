<?php
    $wp_theme_url = get_template_directory_uri();
    $wp_theme_logic = get_template_directory();
?>

<?php include($wp_theme_logic . "/src/estruturas/titulos-interno.php"); ?>

<main class="pagina-interna" style="background: #ffffff;">

    <section id="gs-contato" class="contato-container fundo-parallax">

        <div class="fundo-contato"></div>
        
        <div class="divisores"><div class="blog-top-divisor"></div></div>

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="interna-titulo">
                        <span class="chamada-top">
                            Seja um
                        </span>
                        <h2 class="chamada-meio">
                            Cliente GS
                        </h2>
                        <span class="bottom-liner"></span>
                        <p class="chamada-baixo">
                            Quer saber como a GS pode gerar resultados para o seu negócio? 
                        </p>
                        <p>
                            Preencha o formulário ao lado que retornaremos o seu contato o mais breve possível. 
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 text-white">
                    <p>

                        <?php
                            the_post();
                        ?>

                        <?php 
                            $formcont = get_post_meta($post->ID, 'formulario_contato');
                            $printin = '';
                            foreach ($formcont as $formbe) {
                                $printin .= $formbe;
                            }
                            echo apply_filters('the_content',$printin);
                        ?>

                    </p>
                </div>
            </div>

        </div>

        <div class="divisores"><div class="blog-bot-divisor"></div></div>

    </section>

    <section id="gs-parceiro" class="parceiro-container fundo-parallax">

        <div class="fundo-parceiro"></div>
        
        <div class="divisores"><div class="blog-top-divisor"></div></div>

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="interna-titulo">
                        <span class="chamada-top">
                            Seja um
                        </span>
                        <h2 class="chamada-meio">
                            Canal de Negócios GS
                        </h2>
                        <span class="bottom-liner"></span>
                        <p class="chamada-baixo">
                            
                        </p>
                        <p>
                            Aqui na GS, nós dividimos pra somar. Temos canais de negócio distribuídos em todos os cantos do país. O nosso Programa de Seleção e Desenvolvimento de Canais periodicamente recruta parceiros que se alinhem com nosso o propósito.<br><br>
                            Se você deseja representar a maior empresa de ciência do consumo do país, que proporciona, além de geração permanente de oportunidades, capacitação de mais alto nível e suporte especializado, preencha o formulário ao lado que retornaremos o seu contato o mais breve possível. 
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 text-white">
                    <p>

                        <?php 
                            $formparc = get_post_meta($post->ID, 'formulario_parceiro');
                            $printto = '';
                            foreach ($formparc as $formpart) {
                                $printto .= $formpart;
                            }
                            echo apply_filters('the_content',$printto);
                        ?>

                    </p>
                </div>
            </div>

        </div>

        <div class="divisores"><div class="blog-bot-divisor"></div></div>

    </section>

    <section id="gs-carreira" class="carreira-container fundo-parallax">

        <div class="fundo-carreira"></div>
        
        <div class="divisores"><div class="blog-top-divisor"></div></div>

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="interna-titulo">
                        <span class="chamada-top">
                            Carreira GS
                        </span>
                        <h2 class="chamada-meio">
                            Trabalhe Conosco
                        </h2>
                        <span class="bottom-liner"></span>
                        <p class="chamada-baixo">
                            Venha fazer parte do nosso time!
                        </p>
                        <p>
                            Se você deseja uma oportunidade de trabalho na maior empresa de ciência do Consumo do país, confira abaixo as nossas vagas em aberto e envie seu currículo preenchendo o  formulário ao lado. 
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 text-white">
                    <p>

                        <?php 
                            $formparc = get_post_meta($post->ID, 'formulario_carreira');
                            $printto = '';
                            foreach ($formparc as $formpart) {
                                $printto .= $formpart;
                            }
                            echo apply_filters('the_content',$printto);
                        ?>

                    </p>
                </div>
            </div>

        </div>

        <div class="divisores"><div class="blog-bot-divisor"></div></div>

    </section>

</main>
