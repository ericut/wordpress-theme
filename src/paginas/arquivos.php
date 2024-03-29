<?php
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();
?>

<?php include($wp_theme_logic . "/src/estruturas/titulos-blog.php"); ?>
	
<main class="pagina-interna" style="background: #ffffff;">

	<section id="gs-archives" class="blog-container">
		
		<div class="divisores"><div class="blog-top-divisor"></div></div>

		<div class="container">
				
			<div class="row">
				<div class="col-12">
					<ul class="blog-categorias nav justify-content-center lighten-4 pb-4">
						<?php
							$args = array('orderby' => 'name', 'order' => 'ASC');
							$categories = get_categories($args);
							foreach($categories as $category) {
								?>
								<li class="nav-item">
									<a class="nav-link active" href="<?= get_category_link( $category->term_id ); ?>" title="<?= sprintf( __( "Ver postagens em %s" ), $category->name ); ?>">
										<?= $category->name; ?> <span>(<?= $category->count; ?>)</span>
									</a>
								</li>

							<?php
							}
						?>
					</ul>
				</div>

				<div class="col-12">
					<?php
							if( have_posts() ) { 
						?>
						<div class="row">
							<?php
								while( have_posts() ) {
									the_post();
							?>
							<div class="col-md-4">
								<div class="blog-gs">
									<div class="card view overlay zoom">
										<div class="blog-item view overlay">
											<a href="<?php the_permalink(); ?>" class="link-post d-flex justify-content-center align-content-center">
												<?php if( has_post_thumbnail() ) { ?>
													<img class="card-img-top" src="<?php the_post_thumbnail_url('medium_large'); ?>">
												<?php } else { ?>
													<img class="card-img-top opacitysemihalf" src="<?= $wp_theme_url; ?>/img/imagem-padrao.jpg">
												<?php } ?>
												<div class="mask rgba-white-slight"></div>
											</a>
										</div>
										<div class="card-body">
											<a href="<?php the_permalink(); ?>" class="link-post">
												<h4 class="card-title"><?php the_title(); ?></h4>
											</a>
												<hr>
												<p class="card-text"><?php the_category(); ?></p>
											<a href="<?php the_permalink(); ?>" class="link-post">
												<h5 class="card-readmore">Leia Mais <i class="fa fa-angle-double-right"></i></h5>
											</a>
										</div>
									</div>
								</div>
							</div>
						<?php
							} 
						?>
						</div>
					<?php
					}
				?>
				</div>

			</div>

		</div>

		<div class="divisores"><div class="blog-bot-divisor"></div></div>

	</section>

</main>
