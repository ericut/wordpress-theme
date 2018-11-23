	<?php 
		$wp_theme_url = get_template_directory_uri();
		?>

	<!-- CONTAINER - SLIDER DE VÍDEOS -->
	<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

		<!-- SLIDERS -->
		<!-- SLIDERS -->
		<div class="carousel-inner" role="listbox">
		
			<!-- PRIMEIRO SLIDER -->
			<div class="carousel-item active">
				<div class="view">
					<!-- VÍDEO -->
					<video class="video-intro" autoplay loop muted>
						<source src="<?= $wp_theme_url; ?>/videos/video1.mp4" type="video/mp4" />
					</video>

					<!-- FLEXBOX -->
					<div class="mask rgba-black-strong pattern-5 d-flex justify-content-center align-items-center">
						<!-- CONTEÚDO TEXTO -->
						<div class="chamada-container text-center white-text mx-5">
							<p class="chamada-topo">
								Somos Especialistas
							</p>
							<h2 class="chamada-meio">
								<span class="change-text">No Seu Cliente</span>
							</h2>
							<p class="chamada-baixo">
								Ciência, inteligência e tecnologia conectando negócios a clientes de forma incomparável
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

		<?php include("numeros.php"); ?>

	</div>
