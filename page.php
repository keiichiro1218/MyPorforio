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
                  <nav class="p-nav">
                    <?php wp_nav_menu (array(
                        'menu_class' => 'p-nav__menu',
                        'menu'  => 'header_menu', 
                        'container' => false,
                    )); ?>
                  </nav>
                  <!-- /.p-header__nav -->
            </div>
            <!-- /.p-header -->
        </header>
        <!-- /.l-header -->
         <main class="l-content">
            <div class="p-content">
                <?php if ( have_posts() ) : ?>
                    <?php while(have_posts()): the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="p-post">
                            <div class="p-post__content">
                                <figure class="p-post__img">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(array( 100, 75 )); ?>
                                        <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                                    <?php endif; ?>
                                </figure>
                            </div>
                            <!-- /.p-post__content -->
                            <div class="p-post__infomation">
                                <div class="p-post__title c-post-title">
                                    <?php the_title(); ?>
                                </div>
                                <!-- /.p-post__title -->
                                 <div class="p-post__date">
                                 <i class="fa-solid fa-repeat"></i>
                                     <?php the_modified_date('Y年 M d日'); ?>
                                 </div>
                                 <!-- /.p-post__date -->
                            </div>
                            <!-- /.p-post__information -->
                        </a>
                        <!-- /.p-post --> 
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- /.p-content -->
         </main>
         <!-- /.l-content -->
    </div>
    <!-- .l-main -->
</body>
<?php wp_footer(); ?>
</html>