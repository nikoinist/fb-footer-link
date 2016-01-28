<?php
/**
 * Plugin Name: Facebook Footer Link
 * Description: Adds a Facebook profile link to the end of posts
 * Vegit rsion: 1.0
 * Author: Zoran Mihelcic
 * 
 **/
 //Exit if Accessed Diretctliy
 if(!defined('ABSPATH')){
     exit;
 }
 
 //Global options var
 $ffl_options = get_option('ffl_settings');
 
//Load Scripts
require_once(plugin_dir_path(__FILE__).'includes/facebook-footer-link-scripts.php');

//load Content
require_once(plugin_dir_path(__FILE__).'includes/facebook-footer-link-content.php');

if(is_admin()){
    //load Settings
    require_once(plugin_dir_path(__FILE__).'includes/facebook-footer-link-settings.php');
}