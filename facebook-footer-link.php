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
 
//Load Scripts
require_once(plugin_dir_path(__FILE__).'includes/facebook-footer-link-scripts.php');

//load Content
require_once(plugin_dir_path(__FILE__).'includes/facebook-footer-link-content.php');