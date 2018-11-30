<?php
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();

?>

<?php include($wp_theme_logic . "/src/estruturas/titulos-blog.php"); ?>

<main class="pagina-interna" style="background: #ffffff;">

	<section id="gs-blog" class="blog-container">
		
		<div class="divisores"><div class="blog-top-divisor"></div></div>

		<div class="container">

			<div class="row">
				<div class="col-md-12">
					
				</div>
			</div>
				

			<div class="row">
				<div class="col-12">
				<?php
					$args = array('orderby' => 'name', 'order' => 'ASC');
					$categories = get_categories($args);
					foreach($categories as $category) {
						// melhorar esse PHP
						echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Ver postagens em %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> ';
						echo '<br />'. $category->description . ' ';
						echo '('. $category->count . ')</li>';

					}
				?>

				<?php
					$args = array( 'post_type' => 'post', 'posts_per_page' => 20, 'paged' => $paged, 'post__not_in' => $ids );
					$wp_query = new WP_Query($args);
						if( have_posts() ) { 
					?>
					
					<div class="blog-gs">
						<?php
							while( have_posts() ) {
								the_post();
						?>
							<a href="<?php the_permalink(); ?>" class="link-post">
								<div class="blog-item view overlay hoverable zoom">
									<?php the_post_thumbnail('medium_large'); ?>	
								</div>
								<h4><?php the_title(); ?></h4>
							</a>

						<?php
								} 
							}
						?>


				</div>
			</div>

		</div>

		<div class="divisores"><div class="blog-bot-divisor"></div></div>

	</section>

</main>
