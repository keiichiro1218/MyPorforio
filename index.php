<?php get_header(); ?>
    <?php if ( have_posts() ) : ?>
        <?php while(have_posts()): the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="p-post">
                <div class="p-post__content">
                    <?php get_post_category(); ?>
                    <figure class="p-post__img">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(array( 100, 75 )); ?>
                            <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/noimg.png" alt="">
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
<?php get_footer(); ?>