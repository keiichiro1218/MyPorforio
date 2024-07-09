<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&display=swap" rel="stylesheet">
    <title><?php esc_html( wp_get_document_title() ); ?></title>
    <script src="https://kit.fontawesome.com/73db00d111.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body>
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
            <?php if ( is_front_page()):?>
                    <div class="p-content p-content_main">
                <?php else: ?>
                    <div class="p-content p-content_contact">
            <?php endif; ?>
            
         