<?php

if (!defined('ABSPATH')) {
    die();
}

// Add custom stylesheet
function custom_login_stylesheet()
{
    wp_enqueue_style('custom-styles', CUSTOM_AUTH_PLUGIN_URL . 'styles/login.css');
}
add_action('login_enqueue_scripts', 'custom_login_stylesheet');


// Change login logo url
function custom_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'custom_login_logo_url');
