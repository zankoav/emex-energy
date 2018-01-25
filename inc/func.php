<?php
/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 1/23/18
 * Time: 5:07 PM
 */

function emx_customize_register($customize)
{

    $customize->add_section('contacts_site_section',
        array(
            'title' => 'Контактная информация',
            'capability' => 'edit_theme_options',
            'description' => 'Тут можно указать контактные данные'
        )
    );

    $customize->add_setting('emx_title_contact',
        array('default' => '')
    );

    $customize->add_control('emx_title_contact',
        array(
            'type' => 'text',
            'label' => 'Заглавие',
            'section' => 'contacts_site_section'
        )
    );


    $customize->add_setting('emx_phone',
        array('default' => '+375292228338')
    );

    $customize->add_control('emx_phone',
        array(
            'type' => 'text',
            'label' => 'Номер телефона',
            'section' => 'contacts_site_section'
        )
    );

    $customize->add_setting('emx_work_time',
        array('default' => 'Пн—Пт 08:00–17:00')
    );

    $customize->add_control('emx_work_time',
        array(
            'type' => 'text',
            'label' => 'Режим работы',
            'section' => 'contacts_site_section'
        )
    );

    $customize->add_setting('emx_email',
        array('default' => 'zankoav@mail.ru')
    );

    $customize->add_control('emx_email',
        array(
            'type' => 'email',
            'label' => 'Email',
            'section' => 'contacts_site_section'
        )
    );


    $customize->add_setting('emx_banner');

    $customize->add_control(
        new WP_Customize_Image_Control(
            $customize,
            'emx_banner',
            array(
                'label' => 'Загрузка изображения',
                'section' => 'contacts_site_section',
                'settings' => 'emx_banner'
            )
        )
    );
}

function emx_setup()
{
    load_theme_textdomain('emx');

    set_post_thumbnail_size(1920, 400);

    add_theme_support('title-tag');

    add_theme_support('custom-logo');

    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    register_nav_menus( array(
        'header_menu' => 'Меню в шапке',
        'footer_menu' => 'Меню в подвале'
    ) );
}

function emx_scripts()
{
    wp_enqueue_style('icons', 'https://use.fontawesome.com/releases/v5.0.4/css/all.css', false, null);
    wp_enqueue_style('bootstrap4', get_template_directory_uri() . '/css/bootstrap4/bootstrap.min.css', false, null);
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', false, null);
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', false, null);

    wp_deregister_script('jquery');
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, null, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap4', get_template_directory_uri() . '/js/bootstrap4/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_script('bundle', get_template_directory_uri() . '/js/bundle.js', array(), null, true);
}

function emx_currentYear( $atts ){
    return date('Y');
}