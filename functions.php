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
