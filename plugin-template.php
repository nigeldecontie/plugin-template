<?php

/**
 * Plugin Name: Plugin Template
 * Description: Custom plugin template.
 * Version: 1.0
 */

if (!defined('ABSPATH')) {
    die();
}

// Constants
define('CUSTOM_AUTH_ROOT_DIR', plugin_dir_path(__FILE__));    // for including or requiring files
define('CUSTOM_AUTH_PLUGIN_URL', plugins_url('/', __FILE__)); // for enqueuing assets

// Enqueue scripts
$files = glob(CUSTOM_AUTH_ROOT_DIR . 'enqueue/*.php');

if ($files !== false) {
    foreach ($files as $file) {
        if (is_file($file)) {
            require_once $file;
        }
    }
} else {
    echo 'No files found in functions directory.';
}
