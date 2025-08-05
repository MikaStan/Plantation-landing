<?php

    function add_scripts_and_styles() {
        wp_enqueue_script('button-to-top', get_template_directory_uri(  ) . '/button-to-top.js', array('jquery'), null, 'footer');
        wp_enqueue_style('style', get_stylesheet_uri( ) );
    }

    add_action('wp_enqueue_scripts', 'add_scripts_and_styles');

// Если файл содержит только код PHP, то ставить закрывающий тег ? > не обязательно.