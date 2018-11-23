<?php
	$wp_theme_url = get_template_directory_uri();
	?>

<!doctype html>
<html lang="pt_BR">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php bloginfo("name"); echo " | "; bloginfo("description"); ?></title>
		<meta name="description" content="<?php bloginfo("description"); ?>">
		<meta name="author" content="Brasil.GS">

		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/style.css">

		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/fa-all.css">
    	<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/fa-loading.css">
    	<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/animate.css">

		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/mdb.css">
		<link rel="stylesheet" href="<?= $wp_theme_url; ?>/css/style.css">

		<?php  wp_head(); ?>
	</head>

	<body>

	<?php include("src/navbar.php"); ?>
