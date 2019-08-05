<?php 
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();
?>

<!-- CONTAINER - SLIDER DE VÍDEOS -->
<div id="carousel-example-1z" class="carousel slide carousel-fade wow fadeIn" data-ride="carousel">

	<!-- SLIDERS -->
	<!-- SLIDERS -->
	<div class="carousel-inner" role="listbox">
	
		<!-- PRIMEIRO SLIDER -->
		<div class="carousel-item active">
			<div class="view">

				<!-- VÍDEO -->
				<video class="video-intro blurred" autoplay loop muted title="Brasil.GS • Somos especialistas no seu cliente, no seu negócio e na sua marca">
					<source src="<?= $wp_theme_url; ?>/videos/brasil_gs_video.mp4" type="video/mp4" />
				</video>

				<div class="bg-default-index">
				</div>

				<!-- FLEXBOX -->
				<div class="mask rgba-black-strong pattern-5 d-flex justify-content-center align-items-center force-light-mobile">
					<!-- CONTEÚDO TEXTO -->
					<div class="chamada-container text-center white-text mx-5 wow fadeInUp">
						<p class="chamada-topo">
							Somos Especialistas
						</p>
						<h2 class="chamada-meio">
							<span class="change-text">Em aumentar o seu faturamento</span>
							<!-- <span id="typed2" style="white-space:pre;"></span> -->
						</h2>
						<p class="chamada-baixo">
							Conectamos o varejo, a indústria e o shopper de forma incomparável
						</p>
						<span class="bottom-liner"></span>
						<!-- <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">
							GO TESTE <i class="fa fa-graduation-cap ml-2"></i>
						</a> -->
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- SLIDERS -->
	<!-- SLIDERS -->

	<?php include($wp_theme_logic . "/src/modulos/numeros.php"); ?>

</div>
