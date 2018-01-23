<?php

require __DIR__ . '/inc/func.php';
/**
 * Поддержка миниатюр
 **/
add_theme_support('post-thumbnails');

/**
 * Подключение меню
 **/
register_nav_menus(array(
    'main-menu' => __('main-menu')
));

/**
 * Подключение скриптов
 */
add_action('wp_enqueue_scripts', 'emx_scripts');