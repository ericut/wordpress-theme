<?php
    $wp_theme_url = get_template_directory_uri();
    $wp_theme_logic = get_template_directory();
?>

<h2 class="chamada-meio">
    <span class="change-text"><?php the_title(); ?></span>
</h2>
<p class="chamada-baixo">
    <?php echo $chamada; ?>
</p>