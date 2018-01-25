<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="contacts col-12 col-md-4 text-center mb-3 order-1 order-sm-1 order-md-1">
                <h3><?php echo get_theme_mod('emx_title_contact'); ?></h3>
                <h2><?php echo get_theme_mod('emx_phone'); ?></h2>
                <span><?php echo get_theme_mod('emx_work_time'); ?></span>
                <?php $email = get_theme_mod('emx_email'); ?>
                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
            </div>
            <div class="logo col-12 col-md-4 mb-3 order-0 order-sm-0 order-md-1">
                <?php the_custom_logo(); ?>
            </div>
            <div class="col-12 col-md-4  mb-3 d-none d-md-block order-1 order-sm-1 order-md-1">
                <img class="header-banner" src="<?php echo get_theme_mod('emx_banner'); ?>" alt="banner">
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/"><i class="fas fa-home"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'menu_class' => 'navbar-nav',
                    'menu_id' => '',
                    'depth' => 1
                )); ?>
            </div>
        </nav>
    </div>

</header>



