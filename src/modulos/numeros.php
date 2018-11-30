<?php
    $wp_theme_url = get_template_directory_uri();
    $wp_theme_logic = get_template_directory();
?>

<div class="numeros-container wow fadeIn">
	<div class="container">
		<div class="row d-flex">

			<div class="col numero-item">
				<div class="numero-img">
					<img src="<?= $wp_theme_url; ?>/img/index/01-1-numeros-shoppers.png">
				</div>
				<div class="numero-info">
					<div class="numero-qtd">
						+<span class="counter-value" data-count="15">1</span> milhões
					</div>
					<div class="numero-txt">
						Shoppers identificados
					</div>
				</div>
			</div>

			<div class="col numero-item">
				<div class="numero-img">
					<img src="<?= $wp_theme_url; ?>/img/index/01-2-numeros-clientes.png">
				</div>
				<div class="numero-info">
					<div class="numero-qtd">
						+<span class="counter-value" data-count="100">10</span> mil
					</div>
					<div class="numero-txt">
						Clientes
					</div>
				</div>
			</div>

			<div class="col numero-item recuo">
				<div class="numero-img">
					<img src="<?= $wp_theme_url; ?>/img/index/01-3-numeros-carrinhos.png">
				</div>
				<div class="numero-info">
					<div class="numero-qtd">
						+<span class="counter-value" data-count="400">100</span> milhões
					</div>
					<div class="numero-txt">
						Carrinhos Analisados
					</div>
				</div>
			</div>

			<div class="col numero-item">
				<div class="numero-img">
					<img src="<?= $wp_theme_url; ?>/img/index/01-4-numeros-produtos.png">
				</div>
				<div class="numero-info">
					<div class="numero-qtd">
						+<span class="counter-value" data-count="50">10</span> bilhões
					</div>
					<div class="numero-txt">
						Produtos Processados
					</div>
				</div>
			</div>

			<div class="col numero-item">
				<div class="numero-img">
					<img src="<?= $wp_theme_url; ?>/img/index/01-5-numeros-lojas.png">
				</div>
				<div class="numero-info">
					<div class="numero-qtd">
						+1.<span class="counter-value" data-count="5">1</span> mil
					</div>
					<div class="numero-txt">
						Lojas de Atacado e Varejo
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>