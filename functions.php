<?php

require __DIR__ . '/inc/func.php';

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

/**
 * Добавление логотипа из панели настроек
 */
add_action('after_setup_theme', 'emx_setup');

/**
 * Добавление секций на сайт в панель настроек
 */
add_action('customize_register', 'emx_customize_register');


