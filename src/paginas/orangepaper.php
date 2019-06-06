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
				?>
			</div> 

			<div class="row mt-5">
				<div class="col-md-12 d-flex justify-content-center align-content-stretch paginacao pag-orangepaper">
					<?php the_posts_pagination( array(
						'mid_size' => 1,
						'prev_text' => __( 'Anterior', 'textdomain' ),
						'next_text' => __( 'Próxima', 'textdomain' ),
					) ); ?>
					<!-- <div class="btn nav-previous alignleft"><i class="fa fa-angle-double-left"></i> <?php previous_posts_link( 'Página Anterior' ); ?></div>
					<div class="btn nav-next alignright"><?php next_posts_link( 'Próxima Página' ); ?> <i class="fa fa-angle-double-right"></i></div>	 -->
				</div>
			</div>
				
			<?php
				}
			?>

		</div>

		<div class="divisores"><div class="blog-bot-divisor"></div></div>

	</section>

</main>
