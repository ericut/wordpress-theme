<?php
    $wp_theme_url = get_template_directory_uri();
    $wp_theme_logic = get_template_directory();
?>

<?php include($wp_theme_logic . "/src/estruturas/titulos-interno.php"); ?>

<main class="pagina-interna" style="background: #ffffff;">

    <section id="gs-contato" class="contato-container fundo-parallax">

        <div class="fundo-contato"></div>
        
        <div class="divisores my-4"><div class="blog-top-divisor"></div></div>

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
                            Quer saber como a GS pode aumentar o seu faturamento? 
                        </p>
                        <p>
                            Preencha o formulário ao lado que retornaremos o seu contato o mais breve possível. 
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 text-white">
                    <p>

                        <style type="text/css" scoped>
                            .mauticform_wrapper { max-width: 600px; margin: 10px auto; }
                            .mauticform-innerform {}
                            .mauticform-post-success {}
                            .mauticform-name { font-weight: bold; font-size: 1.5em; margin-bottom: 3px; }
                            .mauticform-description { margin-top: 2px; margin-bottom: 10px; }
                            .mauticform-error { margin-bottom: 10px; color: red; }
                            .mauticform-message { margin-bottom: 10px;color: green; }
                            .mauticform-row {     display: inline-block; margin-bottom: 20px; width: 45%; margin: 0 15px 20px 0; }
                            .mauticform-label { font-size: 1.1em; display: block; font-weight: bold; margin-bottom: 5px; }
                            .mauticform-row.mauticform-required .mauticform-label:after { color: #e32; content: " *"; display: inline; }
                            .mauticform-helpmessage { display: block; font-size: 0.9em; margin-bottom: 3px; }
                            .mauticform-errormsg { display: block; color: red; margin-top: 2px; }
                            .mauticform-selectbox, .mauticform-input, .mauticform-textarea { width: 100%; padding: 0.5em 0.5em; border: 1px solid #CCC; background: #fff; box-shadow: 0px 0px 0px #fff inset; border-radius: 4px; box-sizing: border-box; }
                            .mauticform-checkboxgrp-row {}
                            .mauticform-checkboxgrp-label { font-weight: normal; }
                            .mauticform-checkboxgrp-checkbox {}
                            .mauticform-radiogrp-row {}
                            .mauticform-radiogrp-label { font-weight: normal; }
                            .mauticform-radiogrp-radio {}
                            .mauticform-button-wrapper .mauticform-button.btn-default, .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default { color: #5d6c7c;background-color: #ffffff;border-color: #dddddd;}
                            .mauticform-button-wrapper .mauticform-button, .mauticform-pagebreak-wrapper .mauticform-pagebreak { display: inline-block;margin-bottom: 0;font-weight: 600;text-align: center;vertical-align: middle;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 6px 12px;font-size: 13px;line-height: 1.3856;border-radius: 3px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}
                            .mauticform-button-wrapper .mauticform-button.btn-default[disabled], .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default[disabled] { background-color: #ffffff; border-color: #dddddd; opacity: 0.75; cursor: not-allowed; }
                            .mauticform-pagebreak-wrapper .mauticform-button-wrapper {  display: inline; }

                            #mauticform_sejaumclientegs_mensagem, #mauticform_sejaumcanalgs_nome, #mauticform_sejaumcanalgs_mensagem { width: 94%; }
                        </style>
                        <div id="mauticform_wrapper_sejaumclientegs" class="mauticform_wrapper">
                            <form autocomplete="false" role="form" method="post" action="https://mkt.brasil.gs/form/submit?formId=14" id="mauticform_sejaumclientegs" data-mautic-form="sejaumclientegs" enctype="multipart/form-data">
                                <div class="mauticform-error" id="mauticform_sejaumclientegs_error"></div>
                                <div class="mauticform-message" id="mauticform_sejaumclientegs_message"></div>
                                <div class="mauticform-innerform">

                                    
                                <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

                                    <div id="mauticform_sejaumclientegs_nome" data-validate="nome" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-1 mauticform-required">
                                        <label id="mauticform_label_sejaumclientegs_nome" for="mauticform_input_sejaumclientegs_nome" class="mauticform-label">Nome</label>
                                        <input id="mauticform_input_sejaumclientegs_nome" name="mauticform[nome]" value="" class="mauticform-input" type="text">
                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                    </div>

                                    <div id="mauticform_sejaumclientegs_email" data-validate="email" data-validation-type="email" class="mauticform-row mauticform-email mauticform-field-2 mauticform-required">
                                        <label id="mauticform_label_sejaumclientegs_email" for="mauticform_input_sejaumclientegs_email" class="mauticform-label">Email</label>
                                        <input id="mauticform_input_sejaumclientegs_email" name="mauticform[email]" value="" class="mauticform-input" type="email">
                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                    </div>

                                    <div id="mauticform_sejaumclientegs_telefone" data-validate="telefone" data-validation-type="tel" class="mauticform-row mauticform-tel mauticform-field-3 mauticform-required">
                                        <label id="mauticform_label_sejaumclientegs_telefone" for="mauticform_input_sejaumclientegs_telefone" class="mauticform-label">Telefone</label>
                                        <input id="mauticform_input_sejaumclientegs_telefone" name="mauticform[telefone]" value="" class="mauticform-input" type="tel">
                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                    </div>

                                    <div id="mauticform_sejaumclientegs_empresa" class="mauticform-row mauticform-text mauticform-field-4">
                                        <label id="mauticform_label_sejaumclientegs_empresa" for="mauticform_input_sejaumclientegs_empresa" class="mauticform-label">Empresa</label>
                                        <input id="mauticform_input_sejaumclientegs_empresa" name="mauticform[empresa]" value="" class="mauticform-input" type="text">
                                        <span class="mauticform-errormsg" style="display: none;"></span>
                                    </div>

                                    <div id="mauticform_sejaumclientegs_mensagem" class="mauticform-row mauticform-text mauticform-field-5">
                                        <label id="mauticform_label_sejaumclientegs_mensagem" for="mauticform_input_sejaumclientegs_mensagem" class="mauticform-label">Mensagem</label>
                                        <textarea id="mauticform_input_sejaumclientegs_mensagem" name="mauticform[mensagem]" class="mauticform-textarea"></textarea>
                                        <span class="mauticform-errormsg" style="display: none;"></span>
                                    </div>

                                    <div id="mauticform_sejaumclientegs_submit" class="mauticform-row mauticform-button-wrapper mauticform-field-6">
                                        <button type="submit" name="mauticform[submit]" id="mauticform_input_sejaumclientegs_submit" value="" class="btn btn-md btn-enviar" style="width: 100%; font-size: 14px;">Enviar</button>
                                    </div>
                                    </div>
                                </div>

                                <input type="hidden" name="mauticform[formId]" id="mauticform_sejaumclientegs_id" value="14">
                                <input type="hidden" name="mauticform[return]" id="mauticform_sejaumclientegs_return" value="">
                                <input type="hidden" name="mauticform[formName]" id="mauticform_sejaumclientegs_name" value="sejaumclientegs">

                            </form>
                        </div>

                    <!-- 
                        < ?php
                            the_post();
                        ?>

                        < ?php 
                            $formcont = get_post_meta($post->ID, 'formulario_contato');
                            $printin = '';
                            foreach ($formcont as $formbe) {
                                $printin .= $formbe;
                            }
                            echo apply_filters('the_content',$printin);
                        ?>
                    -->
                    </p>
                </div>
            </div>

        </div>

        <div class="divisores"><div class="blog-bot-divisor"></div></div>

    </section>

    <section id="gs-parceiro" class="parceiro-container fundo-parallax">

        <div class="fundo-parceiro"></div>
        
        <div class="divisores my-4"><div class="blog-top-divisor"></div></div>

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

                        <div id="mauticform_wrapper_sejaumcanalgs" class="mauticform_wrapper">
                            <form autocomplete="false" role="form" method="post" action="https://mkt.brasil.gs/form/submit?formId=13" id="mauticform_sejaumcanalgs" data-mautic-form="sejaumcanalgs" enctype="multipart/form-data">
                                <div class="mauticform-error" id="mauticform_sejaumcanalgs_error"></div>
                                <div class="mauticform-message" id="mauticform_sejaumcanalgs_message"></div>
                                <div class="mauticform-innerform">

                                    
                                <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

                                    <div id="mauticform_sejaumcanalgs_nome" data-validate="nome" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-1 mauticform-required">
                                        <label id="mauticform_label_sejaumcanalgs_nome" for="mauticform_input_sejaumcanalgs_nome" class="mauticform-label">Nome</label>
                                        <input id="mauticform_input_sejaumcanalgs_nome" name="mauticform[nome]" value="" class="mauticform-input" type="text">
                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                    </div>

                                    <div id="mauticform_sejaumcanalgs_email" data-validate="email" data-validation-type="email" class="mauticform-row mauticform-email mauticform-field-2 mauticform-required">
                                        <label id="mauticform_label_sejaumcanalgs_email" for="mauticform_input_sejaumcanalgs_email" class="mauticform-label">Email</label>
                                        <input id="mauticform_input_sejaumcanalgs_email" name="mauticform[email]" value="" class="mauticform-input" type="email">
                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                    </div>

                                    <div id="mauticform_sejaumcanalgs_telefone" data-validate="telefone" data-validation-type="tel" class="mauticform-row mauticform-tel mauticform-field-3 mauticform-required">
                                        <label id="mauticform_label_sejaumcanalgs_telefone" for="mauticform_input_sejaumcanalgs_telefone" class="mauticform-label">Telefone</label>
                                        <input id="mauticform_input_sejaumcanalgs_telefone" name="mauticform[telefone]" value="" class="mauticform-input" type="tel">
                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                    </div>

                                    <div id="mauticform_sejaumcanalgs_mensagem" class="mauticform-row mauticform-text mauticform-field-4">
                                        <label id="mauticform_label_sejaumcanalgs_mensagem" for="mauticform_input_sejaumcanalgs_mensagem" class="mauticform-label">Mensagem</label>
                                        <textarea id="mauticform_input_sejaumcanalgs_mensagem" name="mauticform[mensagem]" class="mauticform-textarea"></textarea>
                                        <span class="mauticform-errormsg" style="display: none;"></span>
                                    </div>

                                    <div id="mauticform_sejaumcanalgs_submit" class="mauticform-row mauticform-button-wrapper mauticform-field-5">
                                        <button type="submit" name="mauticform[submit]" id="mauticform_input_sejaumcanalgs_submit" value="" class="btn btn-md btn-enviar-parceiro" style="width: 100%; font-size: 14px;">Enviar</button>
                                    </div>
                                    </div>
                                </div>

                                <input type="hidden" name="mauticform[formId]" id="mauticform_sejaumcanalgs_id" value="13">
                                <input type="hidden" name="mauticform[return]" id="mauticform_sejaumcanalgs_return" value="">
                                <input type="hidden" name="mauticform[formName]" id="mauticform_sejaumcanalgs_name" value="sejaumcanalgs">

                                </form>
                        </div>
                        <!--
                        < ?php 
                            $formparc = get_post_meta($post->ID, 'formulario_parceiro');
                            $printto = '';
                            foreach ($formparc as $formpart) {
                                $printto .= $formpart;
                            }
                            echo apply_filters('the_content',$printto);
                        ? >
                        -->
                    </p>
                </div>
            </div>

        </div>

        <div class="divisores"><div class="blog-bot-divisor"></div></div>

    </section>

    <section id="gs-carreira" class="carreira-container fundo-parallax">

        <div class="fundo-carreira"></div>
        
        <div class="divisores my-4"><div class="blog-top-divisor"></div></div>

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
