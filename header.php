<!DOCTYPE html <?php language_attributes(); ?>>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> class="l-body">
    <?php wp_body_open(); ?>
    <div class="l-main">
        <header class="l-header">
            <div class="p-header">
                <h1 class="p-header__logo">
                    <a href="<?php echo esc_url( home_url()); ?>" class="c-logo">
                        <?php bloginfo('name'); ?>
                    </a>
                    <!-- /.p-header__link -->
                </h1>
                <!-- /.p-header__logo -->
                <button class="c-button-nav">
                <span></span>
                <span></span>
                <span></span>
                </button>
                <!-- /.p-header__button -->
                <nav class="p-nav c-separator">
                <?php wp_nav_menu (array(
                    'menu_class' => 'p-nav__menu',
                    'menu'  => 'header_menu', 
                    'container' => false,
                )); ?>
                </nav>
                <!-- /.p-header__nav -->
                <?php if(is_active_sidebar('sidebar')):?>
                    <ul class="l-sidebar c-separator">
                        <?php dynamic_sidebar('sidebar');?>
                    </ul>
                <?php endif;?>
            </div>
            <!-- /.p-header -->
        </header>
        <!-- /.l-header -->
        <main class="l-content">
            <div class="p-content p-content_main">
            
         