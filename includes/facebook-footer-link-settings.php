<?php
// Create menu link

function ffl_options_menu_link(){
    add_options_page(
        'Facebook footer Link Options',
        'Facebook footer link',
        'manage_options',
        'ffl-options',
        'ffl_options_content'
    );
}

//Create Options page Content
function ffl_options_content(){
    echo 'TEST';
}
add_action('admin_menu', 'ffl_options_menu_link');

//Register Settings
function ffl_register_settings(){
    register_setting('ffl_settings_group', 'ffl_settings');
}

add_action('admin_init', 'ffl_register_settings');