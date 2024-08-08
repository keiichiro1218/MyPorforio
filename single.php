<?php get_header('single'); ?>

<div class="p-content__title">
    <h2 class="c-logo">
        <?php the_title(); ?>
    </h2>
</div>
<!-- /.p-content__title -->
<?php the_content() ?>

<div class="p-fields">
     <div class="p-fields__table">
        <table class="p-fields__body">
            <tr class="p-fields__tr">
                <th class="p-fields__th">
                    会社名
                </th>
               <td class="p-fields__td">
                    <?php the_field('company'); ?>
               </td>
               <!-- /.p-fields__td -->
            </tr>
            <!-- /.p-fields__tr -->
            <tr class="p-fields__tr">
                <th class="p-fields__th">
                    サイトURL
                </th>
                <!-- /.p-fields__th -->
                <td class="p-fields__td">
                    <a href="<?php the_field('url'); ?>">
                        <?php the_field('url'); ?>
                    </a>
                </td>
                <!-- /.p-fields__td -->
            </tr>
            <!-- /.p-fields__tr -->
            <tr class="p-fields__tr">
                <th class="p-fields__th">
                    担当範囲
                </th>
                <!-- /.p-fields__th -->
                <td class="p-fields__td">
                    <?php the_field('position'); ?>
               </td>
               <!-- /.p-fields__td -->
            </tr>
            <!-- /.p-fields__tr -->
        </table>
        <!-- /.p-fields__table -->
     </div>
     <!-- /.p-fields__table -->
     <div class="p-fields__content">
        <?php the_field('overview'); ?>
    </div>
    <!-- /.p-fields -->
</div>
<!-- /.p-fields -->

<?php get_footer(); ?>