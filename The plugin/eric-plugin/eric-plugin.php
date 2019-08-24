<?php
/*
Plugin Name: Eric Plugin
Plugin URI:  https://xxxx.com
Description: This plugin adds content block to the bottom of each post.
Version:     1.0
Author:      Eric Sun
Author URI:  https://xxxx.com
License:     GPL2 etc
License URI: https://xxxx.com
*/

/**
 * Register Eric Plugin Admin Menu Page
 */
function eric_plugin_add_menu() {
    add_menu_page( 'Eric Plugin Options', 'Eric Plugin', 'manage_options', 'eric_plugin', 'eric_plugin_create_page', 'dashicons-welcome-widgets-menus', 110 );
}

add_action( "admin_menu", "eric_plugin_add_menu" );

/**
 * Display Eric Plugin Admin Page View
 */
function eric_plugin_create_page() {
    include 'views/eric-plugin-admin.php';
}

/**
 * Insert content to each post
 * @param $content
 *
 * @return string
 */
function eric_plugin_insert_after_post($content){
    if (is_single()) {
        $content .= '<h2 style="font-style: italic; color: red">Eric plugin add content block to the bottom of post goes here!</h2>';
    }
    return $content;
}
add_filter( "the_content", "eric_plugin_insert_after_post" );