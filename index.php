<?php get_header(); 
	$wp_theme_url = get_template_directory_uri();
	?>

<?php include("src/slider.php"); ?>

<!-- INICIO DO SITE FORA DO SLIDER -->
<main class="pagina-principal">

	<section id="gs-ciencia" class="ciencia-container fundo-parallax">
		<div class="fundo-principal"></div>
		<div class="fundo-foguete"></div>

		<div class="topo-divisor"></div>	

		<div class="container">

			<div class="row">
				<div class="col-12">
					<div class="home-titulo ciencia">
						<h2 class="chamada-meio">
							Somos especialistas<br>em Ciência do Consumo
						</h2>
						<p  class="chamada-baixo">
							Desenvolvemos uma metodologia end-to-end exclusiva<br>no mercado, que proporciona aos nossos clientes:
						</p>
						<span class="bottom-liner"></span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="ciencia-getfish primeiro d-flex align-items-start justify-content-between">
						<div class="hexa-animado">
							<a class="hexa-padrao hexa-descritiva">
								<div class="hexa-conteudo">
									<span class="hexa-tit">Análise Descritiva</span>
									<span class="hexa-desc">Captura de Dados, qualificação e análise de comportamento dos consumidores, do negócio e do mercado.</span>
									<span class="bottom-liner"></span>
								</div>
							</a>
						</div>
						<div>
							<a class="mini-hexas hexa-esquerda mini-hexa-cliente">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/02-01-getfish.png">
								</div>
								<span class="hexa-texto esquerda"><span>Cliente</span></span>
							</a>
							<a class="mini-hexas hexa-esquerda mini-hexa-loja">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/02-02-getfish.png">
								</div>
								<span class="hexa-texto esquerda"><span>Loja</span></span>
							</a>
							<a class="mini-hexas hexa-esquerda mini-hexa-indice">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/02-03-getfish.png">
								</div>
								<span class="hexa-texto esquerda"><span>Índice de Sacrifício</span></span>
							</a>
						</div>
						<a class="logo-getfish">
							<img src="<?= $wp_theme_url; ?>/img/index/02-logo-getfish.png">>
						</a>
					</div>
				</div>

				<div class="col-12">
					<div class="ciencia-getfish segundo d-flex align-items-start justify-content-end">
						<div>
							<a class="mini-hexas hexa-direita mini-hexa-potencial">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/02-04-getfish.png">
								</div>
								<span class="hexa-texto direita"><span>Potencial de Faturamento</span></span>
							</a>
							<a class="mini-hexas hexa-direita mini-hexa-pareto">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/02-05-getfish.png">
								</div>
								<span class="hexa-texto direita"><span>Pareto</span></span>
							</a>
							<a class="mini-hexas hexa-direita mini-hexa-missao">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/02-06-getfish.png">
								</div>
								<span class="hexa-texto direita"><span>Missão de Compra</span></span>
							</a>
							<a class="mini-hexas hexa-direita mini-hexa-share">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/02-07-getfish.png">
								</div>
								<span class="hexa-texto direita"><span>Share Domiciliar</span></span>
							</a>
							<a class="mini-hexas hexa-direita mini-hexa-quantidade">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/02-08-getfish.png">
								</div>
								<span class="hexa-texto direita" style="margin: -10px 0 0 0;"><span>Quantidade e Frequência de Cliente</span></span>
							</a>
						</div>	
						<div class="hexa-animado">
							<a class="hexa-padrao hexa-preditiva">
								<div class="hexa-conteudo">
									<span class="hexa-tit">Análise Preditiva</span>
									<span class="hexa-desc">Geração de oportunidades comerciais, oportunidades de mercado e oportunidades impulsionamento de  consumo.</span>
									<span class="bottom-liner"></span>
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="col-12">
					<div class="ciencia-getfish terceiro d-flex align-items-start justify-content-start">
						<div class="hexa-animado">
							<a class="hexa-padrao hexa-prescritiva">
								<div class="hexa-conteudo">
									<span class="hexa-tit">Análise Prescritiva</span>
									<span class="hexa-desc">Clusterização de base de clientes, ativações personalizadas, motores promocionais, gestão ativa de relacionamento com o cliente, direcionamento de conteúdo e recomendação 1:1.</span>
									<span class="bottom-liner"></span>
								</div>
							</a>
						</div>
						<div>
							<a class="mini-hexas hexa-esquerda mini-hexa-cluster">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/02-09-getfish.png">
								</div>
								<span class="hexa-texto esquerda"><span>Clusters</span></span>
							</a>
							<a class="mini-hexas hexa-esquerda mini-hexa-ativacao">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/02-10-getfish.png">
								</div>
								<span class="hexa-texto esquerda"><span>Ativação Segmentada</span></span>
							</a>
							<a class="mini-hexas hexa-esquerda mini-hexa-promocao">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/02-11-getfish.png">
								</div>
								<span class="hexa-texto esquerda"><span>Promoções Individualizadas</span></span>
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="ciencia-divisor"></div>		
		
	</section>

	<section id="gs-zoombox" class="zoombox-container zoombox-parallax">
		<div id="particles-js" class="zoombox-particles"></div>
		
		<div class="zoombox-divisor"></div>	

		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="home-titulo zoombox">
						<h2 class="chamada-meio">
							ZoOmBOX<br>Muito mais que um CRM!
						</h2>
						<p  class="chamada-baixo">
							Desenvolvemos uma metodologia end-to-end exclusiva<br>no mercado, que proporciona aos nossos clientes:
						</p>
						<span class="bottom-liner"></span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-8">
					<div class="orbita-zoombox">
						<div class="logo-zoombox">
							<img src="<?= $wp_theme_url; ?>/img/index/03-logo-zoombox.png">
						</div>
						<div id="thumbs" class="itens-zoombox solucoes-mouseover" >
							<a class="thumb-solucao-image" id="thumb_1" data="<?= $wp_theme_url; ?>/img/index/03-01-inteligencia-detalhe.png"
							data-title="Inteligência de Captura" data-text="texto marcação 1">
								<div class="inteligencia intel-captura">	
									<div class="intel-icone">
										<img src="<?= $wp_theme_url; ?>/img/index/03-01-zoombox.png">
									</div>
									<div class="intel-txt">
										<span class="intel-txt-topo">Inteligência</span>
										<span class="intel-txt-meio">De Captura</span>
									</div>
								</div>
							</a>
							<a class="thumb-solucao-image" id="thumb_2" data="<?= $wp_theme_url; ?>/img/index/03-02-inteligencia-detalhe.png"
							data-title="Inteligência Analítica" data-text="texto marcação 2">
								<div class="inteligencia intel-analitica">
									<div class="intel-icone">
										<img src="<?= $wp_theme_url; ?>/img/index/03-02-zoombox.png">
									</div>
									<div class="intel-txt">
										<span class="intel-txt-topo">Inteligência</span>
										<span class="intel-txt-meio">Analítica</span>
									</div>
								</div>
							</a>
							<a class="thumb-solucao-image" id="thumb_3" data="<?= $wp_theme_url; ?>/img/index/03-03-inteligencia-detalhe.png"
							data-title="Inteligência Promocional" data-text="texto marcação 3">
								<div class="inteligencia intel-promocional">	
									<div class="intel-icone">
										<img src="<?= $wp_theme_url; ?>/img/index/03-03-zoombox.png">
									</div>
									<div class="intel-txt">
										<span class="intel-txt-topo">Inteligência</span>
										<span class="intel-txt-meio">Promocional</span>
									</div>
								</div>
							</a>
							<a class="thumb-solucao-image" id="thumb_4" data="<?= $wp_theme_url; ?>/img/index/03-04-inteligencia-detalhe.png"
							data-title="Inteligência Acionável" data-text="texto marcação 4">
								<div class="inteligencia intel-acionavel">
									<div class="intel-icone">
										<img src="<?= $wp_theme_url; ?>/img/index/03-04-zoombox.png">
									</div>
									<div class="intel-txt">
										<span class="intel-txt-topo">Inteligência</span>
										<span class="intel-txt-meio">Acionável</span>
									</div>
								</div>
							</a>
						</div>
						<div class="orbitas">
							<img src="<?= $wp_theme_url; ?>/img/index/03-bg-orbits.png">
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="solucao-image">
						<img src="<?= $wp_theme_url; ?>/img/index/03-01-inteligencia-detalhe.png">
						<h3>
							Inteligência de Captura
						</h3>
						<p>
							Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="gs-discovery" class="discovery-container fundo-parallax">
		<div class="fundo-discovery"></div>
		
		<div class="discovery-divisor"></div>	

		<div class="container">
			<div class="discovery-rastro"></div>
			<div class="row">
				<div class="col-12">
					<div class="home-titulo discovery">
						<h2 class="chamada-meio">
							Discovery<br>Comunicando com o Universo!
						</h2>
						<p  class="chamada-baixo">
							Desenvolvemos uma metodologia end-to-end exclusiva<br>no mercado, que proporciona aos nossos clientes:
						</p>
						<span class="bottom-liner"></span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<div class="logo-discovery">
						<img src="<?= $wp_theme_url; ?>/img/index/04-logo-discovery.png">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="discovery-infos disc-cluster">
						<div class="disc-imagem">
							<img src="<?= $wp_theme_url; ?>/img/index/04-01-mockup-discovery.png">
						</div>
						<div class="disc-hexa-icon">
							<a class="mid-hexas">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/04-01-icon-discovery.png">
								</div>
							</a>
						</div>
						<div class="disc-texto">
							<h4 class="disc-tit">
								Cluster Dimensional
							</h4>
							<p class="disc-desc">
								Segmente e ative seus clientes.Entenda o seu comportamento e perfil
							</p>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="discovery-infos disc-entrega">
						<div class="disc-imagem">
							<img src="<?= $wp_theme_url; ?>/img/index/04-02-mockup-discovery.png">
						</div>
						<div class="disc-hexa-icon">
							<a class="mid-hexas">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/04-02-icon-discovery.png">
								</div>
							</a>
						</div>
						<div class="disc-texto">
							<h4 class="disc-tit">
								Ativação com Qualidade de Entrega
							</h4>
							<p class="disc-desc">
								Nuvem de dados íntegra e atualizada
							</p>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="discovery-infos disc-resultados">
						<div class="disc-imagem">
							<img src="<?= $wp_theme_url; ?>/img/index/04-03-mockup-discovery.png">
						</div>
						<div class="disc-hexa-icon">
							<a class="mid-hexas">
								<div class="hexa-conteudo">
									<img src="<?= $wp_theme_url; ?>/img/index/04-03-icon-discovery.png">
								</div>
							</a>
						</div>
						<div class="disc-texto">
							<h4 class="disc-tit">
								Monitoramento Inteligente de Resultados
							</h4>
							<p class="disc-desc">
								Compreenda de forma clara a performance das suas campanhas
							</p>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="sucesso-divisor"></div>

		<div class="container sucesso-container fundo-parallax">
			<div class="fundo-globular-parallax">
				<div class="fundo-globular-animate">
					<div class="fundo-globular"></div>
				</div>
			</div>

			<div class="row titulo-sucesso">
				<div class="col-12">
					<div class="home-titulo sucesso">
						<h2 class="chamada-meio">
							Sucesso do Cliente<br>Fique tranquilo!
						</h2>
						<p  class="chamada-baixo">
							Desenvolvemos uma metodologia end-to-end exclusiva<br>no mercado, que proporciona aos nossos clientes:
						</p>
						<span class="bottom-liner"></span>
					</div>
				</div>
			</div>

			<div class="row sucesso-infos d-flex flex-nowrap ">

				<div class="col-md-4 coluna-base order-md-2">
					<div class="row linha-base d-flex flex-md-column">
						<div class="col-12 coluna-simplificada c">
							<div class="hexa-sucesso">
								<a class="med-hexas hexa-sucesso-logo">
									<div class="hexa-conteudo">
										<span class="hexa-logo"><img src="<?= $wp_theme_url; ?>/img/index/05-logo-sucesso.png"></span>
										<span class="hexa-tit"><span class="hexa-tit-lit">Time de</span>Sucesso do Cliente</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 coluna-base order-md-1">
					<div class="row linha-base d-flex flex-md-column-reverse">

						<div class="col-10 coluna-simplificada a">
							<div class="sucesso-item sucesso-item-a">
								<div class="sucesso-hexa-icon">
									<a class="max-hexas">
										<div class="hexa-conteudo">
											<img src="<?= $wp_theme_url; ?>/img/index/05-01-sucesso.png">
										</div>
									</a>
								</div>
								<div class="sucesso-texto">
									<h4 class="sucesso-tit">
										Sucesso do Cliente 01
									</h4>
									<p class="sucesso-desc">
										Lorem Ipsum Markup Lorem Ipsum Markup Lorem Ipsum Markup Lorem Ipsum Markup
									</p>
								</div>
							</div>
						</div>

						<div class="col-10 coluna-simplificada a">
							<div class="sucesso-item sucesso-item-b">
								<div class="sucesso-hexa-icon">
									<a class="max-hexas">
										<div class="hexa-conteudo">
											<img src="<?= $wp_theme_url; ?>/img/index/05-01-sucesso.png">
										</div>
									</a>
								</div>
								<div class="sucesso-texto">
									<h4 class="sucesso-tit">
										Sucesso do Cliente 02
									</h4>
									<p class="sucesso-desc">
										Lorem Ipsum Markup Lorem Ipsum Markup Lorem Ipsum Markup Lorem Ipsum Markup
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="col-md-4 coluna-base order-md-3">
					<div class="row linha-base d-flex flex-md-column">

						<div class="col-10 coluna-simplificada b">
							<div class="sucesso-item sucesso-item-c">
								<div class="sucesso-hexa-icon">
									<a class="max-hexas">
										<div class="hexa-conteudo">
											<img src="<?= $wp_theme_url; ?>/img/index/05-01-sucesso.png">
										</div>
									</a>
								</div>
								<div class="sucesso-texto">
									<h4 class="sucesso-tit">
										Sucesso do Cliente 03
									</h4>
									<p class="sucesso-desc">
										Lorem Ipsum Markup Lorem Ipsum Markup Lorem Ipsum Markup Lorem Ipsum Markup
									</p>
								</div>
							</div>
						</div>

						<div class="col-10 coluna-simplificada b">
							<div class="sucesso-item sucesso-item-d">
								<div class="sucesso-hexa-icon">
									<a class="max-hexas">
										<div class="hexa-conteudo">
											<img src="<?= $wp_theme_url; ?>/img/index/05-01-sucesso.png">
										</div>
									</a>
								</div>
								<div class="sucesso-texto">
									<h4 class="sucesso-tit">
										Sucesso do Cliente 04
									</h4>
									<p class="sucesso-desc">
										Lorem Ipsum Markup Lorem Ipsum Markup Lorem Ipsum Markup Lorem Ipsum Markup
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>

	</section>

	<section id="gs-clientes" class="clientes-container">
		<div class="clientes-divisor"></div>	
		<div class="container">

			<div class="row">
				<div class="col-12">
					<div class="home-titulo clientes">
						<h2 class="chamada-meio">
							Clientes
						</h2>
						<p  class="chamada-baixo">
							Atuamos em todas as regiões do Brasil, levando resultados concretos para o varejo, o atacado e a industria
						</p>
						<span class="bottom-liner"></span>
					</div>
				</div>
			</div>

			<div class="row listagem-clientes">
				<div class="col-md-12 home-sub-titulo clientes">
					<h3 class="chamada-meio">
						Varejo
					</h3>
				</div>
				<div class="col-12">
					<div class="row d-flex justify-content-center">
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-01.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-02.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-03.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-04.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-05.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-06.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-07.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-08.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-09.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-10.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-11.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-12.png">
						</div>
					</div>
				</div>
			</div>

			<div class="row listagem-clientes">
				<div class="col-md-12 home-sub-titulo clientes">
					<h3 class="chamada-meio">
						Atacado
					</h3>
				</div>
				<div class="col-12">
					<div class="row d-flex justify-content-center">
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-14.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-15.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-16.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-17.png">
						</div>
					</div>
				</div>
			</div>

			<div class="row listagem-clientes">
				<div class="col-md-12 home-sub-titulo clientes">
					<h3 class="chamada-meio">
						Indústria
					</h3>
				</div>
				<div class="col-12">
					<div class="row d-flex justify-content-center">
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-18.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-19.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-20.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-21.png">
						</div>
						<div class="col-md-2 col-6">
							<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/clientes/06-cliente-22.png">
						</div>
					</div>
				</div>
			</div>

			<div class="row listagem-clientes mt-5">
				<div class="col-md-12 home-titulo clientes">
					<span class="chamada-top">
						Presente na
					</span>
					<h2 class="chamada-meio">
						Imprensa e Mídia
					</h2>
					<span class="bottom-liner mt-2"></span>
				</div>
				<div class="col-12">
					<div class="row d-flex justify-content-center">
						<div class="col-md-2 col-6">
							<a href="#">
								<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/midia/06-midia-01.png">
							</a>
						</div>
						<div class="col-md-2 col-6">
							<a href="#">
								<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/midia/06-midia-02.png">
							</a>
						</div>
						<div class="col-md-2 col-6">
							<a href="#">
								<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/midia/06-midia-03.png">
							</a>
						</div>
						<div class="col-md-2 col-6">
							<a href="#">
								<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/midia/06-midia-04.png">
							</a>
						</div>
						<div class="col-md-2 col-6">
							<a href="#">
								<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/midia/06-midia-05.png">
							</a>
						</div>
						<div class="col-md-2 col-6">
							<a href="#">
								<img class="logo-cliente" src="<?= $wp_theme_url; ?>/img/index/midia/06-midia-06.png">
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section id="gs-rodape" class="rodape-container-home">
		<div class="container rodape-home">
			<div class="row">
				<div class="col-md-6 mt-4">
					<div class="rodapetopo-divisor"></div>
					<div class="rodape-titulo">
						<span class="chamada-top">
							Junte-se ao
						</span>
						<h2 class="chamada-meio">
							Nosso Time
						</h2>
						<p  class="chamada-baixo">
							Vamos unir forças e trabalhar juntos!
						</p>
					</div>
					<div class="row botoes">
						<div class="col-12">
							<a class="btn btn-linha botao-principal-linha home-button">
								Seja um Canal de Negócios
							</a>
						</div>
						<div class="col-12">
							<a class="btn btn-linha botao-secundario-linha home-button">
								Carreira
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<img class="mapa-brasil" src="<?= $wp_theme_url; ?>/img/index/07-bg-mapa-brasil.png">
				</div>
			</div>
		</div>
	</section>

</main>


<?php get_footer(); ?>