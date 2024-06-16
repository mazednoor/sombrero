<?php
/*
* Theme Functins
*
* @package Sombrero
*/

if (!defined('SOMBRERO_DIR_PATH')) {
    define('SOMBRERO_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('SOMBRERO_DIR_URI')) {
    define('SOMBRERO_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once SOMBRERO_DIR_PATH . '/inc/helpers/autoloader.php';

function sombrero_get_theme_instance()
{
    \SOMBRERO_THEME\Inc\SOMBRERO_THEME::get_instance();
}

sombrero_get_theme_instance();
