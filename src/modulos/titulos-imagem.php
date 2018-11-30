<?php
    $wp_theme_url = get_template_directory_uri();
    $wp_theme_logic = get_template_directory();
?>

<?php   if(get_the_post_thumbnail()) : ?>
    <img class="imagem-titulo" src="<?php the_post_thumbnail_url(); ?>">
<?php else : ?>
    <img class="imagem-titulo" src="<?= $wp_theme_url; ?>/img/topo-gs-padrao.jpg">
<?php endif; ?>