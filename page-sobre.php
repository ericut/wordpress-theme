<?php
	/*
		template name: Sobre
	*/

	$chamada = "";

	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();

	get_header(); 

	include($wp_theme_logic . "/src/estruturas/navbar.php");
	
	include($wp_theme_logic . "/src/paginas/sobre.php");

	include($wp_theme_logic . "/src/estruturas/rodape.php");

	get_footer(); ?>

