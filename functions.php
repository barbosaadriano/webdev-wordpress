<?php

//suporte a imagem destacada
add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 250);
//suporte a logo customizado
add_theme_support('custom-logo', array('width' => 247, 'height' => 100, 'flex-width' => TRUE,
    'flex-height' => TRUE));
//suporte a cores de fundo
add_theme_support('custom-background', array('default' => 'fff', 'default-image' => ''));
