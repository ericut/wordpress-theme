<?php
	$wp_theme_url = get_template_directory_uri();
	$wp_theme_logic = get_template_directory();
?>

<!doctype html>
<html lang="pt_BR">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<meta name="description" content="<?php bloginfo("description"); ?>">
		<meta name="author" content="Brasil.GS">

		<title><?php bloginfo("name"); echo " | "; bloginfo("description"); ?></title>

		<link href="<?= $wp_theme_url; ?>/img/gs-favicon.ico" type="image/x-icon" rel="icon"/>
		<link href="<?= $wp_theme_url; ?>/img/gs-favicon.ico" type="image/x-icon" rel="shortcut icon"/>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/style.css">

		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/fa-all.css">
		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/fa-loading.css">

		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/mdb.css">
		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/style.css">

		<?php  wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	
	<?php include($wp_theme_logic . "/src/estruturas/navbar.php"); ?>
