<?php
/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 1/23/18
 * Time: 5:07 PM
 */

function emx_scripts()
{
    wp_enqueue_style('bootstrap4', get_template_directory_uri() . '/css/bootstrap4/bootstrap.min.css', false, null);
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', false, null);
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', false, null);

    wp_deregister_script('jquery');
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, NULL, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap4', get_template_directory_uri() . '/js/bootstrap4/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_script('bundle', get_template_directory_uri() . '/js/bundle.js', array(), null, true);
}