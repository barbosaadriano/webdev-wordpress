<?php

//suporte a imagem destacada
add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 250);
//suporte a logo customizado
add_theme_support('custom-logo', array('width' => 247, 'height' => 100, 'flex-width' => TRUE,
    'flex-height' => TRUE));
//suporte a cores de fundo
add_theme_support('custom-background', array('default' => 'fff', 'default-image' => ''));


//adicionar áreas de menu
add_theme_support('menus');

function register_my_menus() {
    register_nav_menus(
            array(
                'primary' => __('Primary Menu'),
            )
    );
}

add_action('init', 'register_my_menus');

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => esc_html('rodapé 1'),
        'id' => 'rodape1',
        'description' => 'área do rodapé 1',
        'before_widget' => '<div class="footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
            )
//            , array()
    );
}