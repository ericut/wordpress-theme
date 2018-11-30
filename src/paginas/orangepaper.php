<?php
    $wp_theme_url = get_template_directory_uri();
    $wp_theme_logic = get_template_directory();
?>

<?php include($wp_theme_logic . "/src/estruturas/titulos-blog.php"); ?>

<main class="pagina-interna" style="background: #ffffff;">

	<section id="gs-orangepaper" class="blog-container">
		
		<div class="divisores"><div class="blog-top-divisor"></div></div>

		<div class="container">


			<div class="row">

				<?php
						if( have_posts() ) { 
					?>
					<?php
						while( have_posts() ) {
							the_post();
					?>

					<div class="col-sm-12 col-md-4">

						<div class="orange-paper view overlay hoverable zoom">
							<a href="<?php the_permalink(); ?>" class="link-post">
								<div class="orange-paper-item">
									<?php the_post_thumbnail('medium_large'); ?>
								</div>
								<h4><?php the_title(); ?></h4>
							</a>
						</div>
						
					</div>

					<?php
						} 
					}
				?>
			</div>

		</div>

		<div class="divisores"><div class="blog-bot-divisor"></div></div>

	</section>

</main>
