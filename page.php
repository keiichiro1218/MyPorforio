<?php get_header('single'); ?>
    <div class="p-content__title">
        <h2 class="c-title_content">
            <?php the_title() ?>
        </h2>
        <!-- /.c-title_content -->
    </div>
    <!-- /.p-content__title_page -->

<?php the_content() ?>

<?php get_footer(); ?>