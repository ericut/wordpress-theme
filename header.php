<?php
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();
?>

<!doctype html>
<html lang="pt_BR">

	<?php header('Cache-Control: max-age=31536000'); ?>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<meta name="author" content="GS - Ciência do Consumo">
		<meta name="title" content="GS - Ciência do Consumo | Ciência, Tecnologia e Inteligência com foco em performance">
		<!-- <meta name="description" content="Ciência do consumo, inteligência analítica, ativações estratégicas e foco em performance. Unimos varejo, indústria e shoppers de ponta a ponta."> -->

		<title><?php bloginfo("name"); echo " | "; bloginfo("description"); ?></title>

		<link href="<?= $wp_theme_url; ?>/img/gs-favicon.ico" type="image/x-icon" rel="icon"/>
		<link href="<?= $wp_theme_url; ?>/img/gs-favicon.ico" type="image/x-icon" rel="shortcut icon"/>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/style.css">

		<!-- <link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/fa-all.css"> -->
		<!-- <link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/fa-loading.css"> -->

		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/mdb.css">
		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/style.css">

		<?php  wp_head(); ?>
		<script  type="text/javascript">
			var t0 = window.performance.now();
			doSomething();
			var t1 = window.performance.now();
			console.log("Retornando performance GS " + (t1 - t0) + "ms.");
		</script>

		<meta name="google-site-verification" content="wkY_853V0HmLUvDC5Megq6ahu-QTCMpEyaEgq5rxtdg" />

	</head>

	<body <?php body_class(); ?>>
	
	<?php include($wp_theme_logic . "/src/estruturas/navbar.php"); ?>
