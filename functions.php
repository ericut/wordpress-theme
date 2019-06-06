<?php
    //ativando thumbnail
    add_theme_support('post-thumbnails');

    //ativando menus
    function register_my_menus() {
        register_nav_menus (
            array(
                'header-menu' => __('Menu Principal')
            )
        );
    }
    add_action('init', 'register_my_menus');

    //posts types imprensa
    function imprensa_posts_types() {
        register_post_type('imprensa',
            array(
                'labels'        => array(
                    'name'      => __('Sala de Imprensa'),
                    'name_singular' => __(' Sala de Imprensa'),
                    'add_new_item' => __('Adicionar novo item de Imprensa'),
                    'edit_item' => __('Editar Imprensa'),
                ),
                'public'        => true,
                'has_archive'   => true,
                'menu_icon'     => 'dashicons-welcome-widgets-menus',
                'menu_position' => 6,
                'supports'      => array (
                    'title',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                    'custom-fields'
                ),
            )
        );
    }
    add_action('init', 'imprensa_posts_types');

    //posts types orange pape
    function orangepaper_posts_types() {
        register_post_type('orangepaper',
            array(
                'labels'        => array(
                    'name'      => __('Orange Paper'),
                    'name_singular' => __('Orange Paper'),
                    'add_new_item' => __('Adicionar um Orange Paper || Utilize o botão Adicionar Mídia para subir o PDF e adicione a mídia'),
                    'edit_item' => __('Editar Orange Paper'),
                ),
                'public'        => true,
                'has_archive'   => true,
                'menu_icon'     => 'dashicons-analytics',
                'menu_position' => 7,
                'supports'      => array (
                    'title',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                    'custom-fields'
                ),
            )
        );
    }
    add_action('init', 'orangepaper_posts_types');

    //mudar o nome da label de posts
    function change_post_label() {
        global $menu;
        global $submenu;
        $menu[5][0] = 'Blog GS';
        $submenu['editphp'][5][0] = 'Blog GS';
        $submenu['editphp'][10][0] = 'Adicionar Post';
        $submenu['editphp'][16][0] = 'Tags';
        echo '';
    }
    function change_post_object() {
        global $wp_post_types;
        $labels = $wp_post_types['post']->labels;
        $labels->name = 'Blog GS';
        $labels->singular_name = 'Blog GS';
        $labels->add_new = 'Adicionar Post';
        $labels->add_new_item = 'Adicionar Post';
        $labels->edit_item = 'Editar Postagem';
        $labels->new_item = 'Postagem';
        $labels->view_item = 'Ver Postagem';
        $labels->search_items = 'Buscar Postagem';
        $labels->not_found = 'Nenhuma Postagem encontrado';
        $labels->not_found_in_trash = 'Nenhuma Postagem encontrado no Lixo';
        $labels->all_items = 'Todas as Postagens';
        $labels->menu_name = 'Postagens';
        $labels->name_admin_bar = 'Postagens';
    }
     
    add_action( 'admin_menu', 'change_post_label' );
    add_action( 'init', 'change_post_object' );

