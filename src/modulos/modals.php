<?php
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();
	
	include($wp_theme_logic . "/src/modulos/varset.php");

?>

<div class="modal fade modal-endereco" id="enderecoSP" tabindex="-1" role="dialog" aria-labelledby="enderecoSP" aria-hidden="true">
	<div class="modal-dialog modal-notify modal-info" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<iframe src="<?php echo $mapa_sp; ?>"
						width="1000" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="modal-footer">
				<a class="btn btn-linha botao-principal-linha" data-dismiss="modal">Fechar</a>
			</div>
		</div>
	</div>
</div>

<div class="modal fade modal-endereco" id="enderecoRP" tabindex="-1" role="dialog" aria-labelledby="enderecoSP" aria-hidden="true">
	<div class="modal-dialog modal-notify modal-info" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<iframe src="<?php echo $mapa_rp; ?>"
						width="1000" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="modal-footer">
				<a class="btn btn-linha botao-secundario-linha" data-dismiss="modal">Fechar</a>
			</div>
		</div>
	</div>
</div>