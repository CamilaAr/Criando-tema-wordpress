<?php

function wpdevs_load_scripts()
{
    //carregar estilo(nome da função - colocar o nome do tema, caminho do arquivo, css pai, que nosso css aqui depende, versão, para todos)
    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    //handle do arquivo(identificador), caminho, dependencias, versão, e se será carregado por padrão
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');
register_nav_menus(
    array(
        'wp_devs_main_menu' => 'Main Menu',
        'wp_devs_footer_menu' => 'Footer Menu'
    )
);
