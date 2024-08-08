<?php get_header('single'); ?>
    <div class="p-content__title">
        <h2 class="c-logo">
            <?php the_title() ?>
        </h2>
        <!-- /.c-title_content -->
    </div>
    <!-- /.p-content__title_page -->
    <div class="p-profile">
        <div class="p-profile__title">
            <h3 class="c-title_profile">
               自己紹介
            </h3>
            <!-- /.p-profile -->
        </div>
        <!-- /.p-profile__title -->
         <div class="p-profile__text">
            <p>宮城県出身、仙台市在住。</p>
            <p>休日はジムやサウナに行ったりなどの体のメンテナンスはまっています。</p>
            <p>ホームページの制作に興味を持ち、オンラインスクールのRaiseTechに申し込み学習を継続しています。</p>
            <p>Webサイトが形になっていく過程がとても楽しく、夢中になりました。</p>
         </div>
         <!-- /.p-profile__text -->
    </div>
    <!-- /.p-profile -->
    <div class="p-profile">
        <div class="p-profile__title">
            <h3 class="c-title_profile">
                スキル
            </h3>
            <!-- /.p-profile -->
        </div>
        <!-- /.p-profile__title -->
        <div class="p-profile__text">
            <div class="p-profile__skill">
                <div class="p-skill">
                    <div class="p-skill__title c-title_skill">
                        HTML&CSS
                    </div>
                    <!-- /.p-skill__title -->
                    <div class="p-profile__detail">
                        HTMLとCSSでデザインを忠実に再現します。
                    </div>
                    <!-- /.p-profile__detail -->
                    <div class="p-skill__title c-title_skill">
                        SASS
                    </div>
                    <!-- /.p-skill__title -->
                    <div class="p-profile__detail">
                        SASSを使用し効率よく、メンテナンス性の高いCSSを作ります。
                    </div>
                    <!-- /.p-profile__detail -->
                    <div class="p-skill__title c-title_skill">
                        WordPress
                    </div>
                    <!-- /.p-skill__title -->
                    <div class="p-profile__detail">
                        WordPressのテーマ作成が可能です。
                    </div>
                    <!-- /.p-profile__detail -->
                    <div class="p-skill__title c-title_skill">
                        Git
                    </div>
                    <!-- /.p-skill__title -->
                    <div class="p-profile__detail">
                        GitHubを使用しコードのバージョン管理,共有が可能です。
                    </div>
                    <!-- /.p-profile__detail -->
                    <div class="p-skill__title c-title_skill">
                        FLOCCS
                    </div>
                    <!-- /.p-skill__title -->
                    <div class="p-profile__detail">
                       FLOCCSのCSS設計を使用しメンテナンス性や保守性の高いCSSの作成が可能です。
                    </div>
                    <!-- /.p-profile__detail -->
                </div>
                <!-- .p-skill -->
            </div>
            <!-- /.p-profile__skill -->
        </div>
        <!-- /.p-profile__text -->
    </div>
    <!-- /.p-profile -->

<?php the_content() ?>

<?php get_footer(); ?>