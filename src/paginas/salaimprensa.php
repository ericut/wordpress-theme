<?php
    $wp_theme_url = get_template_directory_uri();
    $wp_theme_logic = get_template_directory();
?>

<?php include($wp_theme_logic . "/src/estruturas/titulos-interno.php"); ?>

<main class="pagina-interna" style="background: #ffffff;">

	<section id="gs-salaimprensa" class="blog-container">
		
		<div class="divisores"><div class="blog-top-divisor"></div></div>

		<div class="container">

			<!-- <div class="row">
				<div class="col-md-12">
					<div class="interna-titulo blog">
						<h2 class="chamada-meio">
							Sala imprensa
						</h2>
						<p class="chamada-baixo">
							Sala imprensa
						</p>
						<span class="bottom-liner"></span>
					</div>
				</div>
			</div> -->

			<div class="row">
				<div class="col-12">
					
					<?php
						$argumentos = array( 'post_type' => 'imprensa');
						$iloop = new WP_Query( $argumentos );

						if( $iloop->have_posts() ) { 
					?>
					<div class="sala-imprensa">
						<?php
							while( $iloop->have_posts() ) {
								$iloop->the_post();
						?>
							<a href="<?php the_permalink(); ?>" class="link-post wow fadeInUp">
								<div class="imprensa-item view overlay hoverable zoom">
									<?php the_post_thumbnail('medium_large'); ?>
									<div class="mascara-item mask flex-center rgba-cor-fundo-primaria">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</a>

						<?php
								} 
							}
						?>

					</div>

				</div>
			</div>

		</div>

		<div class="divisores"><div class="blog-bot-divisor"></div></div>

	</section>

</main>
