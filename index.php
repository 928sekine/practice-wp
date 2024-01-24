<?php get_header(); ?>
<!-- ピックアップ -->
<section class="top-pickup">
    <div class="l-container-max">
        <div class="top-pickup-inner">
            <div class="swiper top-pickup-swiper">
                <div class="swiper-wrapper top-pickup-swiper-wrapper">
                    <!-- <?php
                            $args = array(
                                'post_type' => 'post',
                                'post__in' => array(30, 28, 24),

                            );

                            $set_query = new WP_Query($args);
                            ?>
                    <?php if ($set_query->have_posts()) : ?>
                    <?php while ($set_query->have_posts()) : $set_query->the_post(); ?>
                    <?php endwhile; ?> -->
                    <article class="swiper-slide top-pickup-swiper-slide">
                        <img src="https://placehold.jp/1200x800.png" alt="ピックアップ記事画像" width="648" height="432"
                            decoding="async" />
                        <p class="c-top-category">ピックアップ1</p>
                    </article>
                    <article class="swiper-slide top-pickup-swiper-slide">
                        <img src="https://placehold.jp/1200x800.png" alt="ピックアップ記事画像" width="648" height="432"
                            decoding="async" />
                        <p class="c-top-category">ピックアップ2</p>
                    </article>
                    <article class="swiper-slide top-pickup-swiper-slide">
                        <img src="https://placehold.jp/1200x800.png" alt="ピックアップ記事画像" width="648" height="432"
                            decoding="async" />
                        <p class="c-top-category">ピックアップ3</p>
                    </article>
                    <!-- <?php endif; ?>
                    <?php wp_reset_postdata(); ?> -->

                </div>
                <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- ピックアップ -->
<div class="l-container-max">
    <main class="top-main">
        <!-- 記事一覧 -->
        <div class="top-main-content">
            <div class="l-container">
                <section class="top-main-content-inner">
                    <div class="top-main-content-title-flex">
                        <div class="top-main-content-title-circle"></div>
                        <h2 class="c-title-level2 top-main-content-title">記事一覧</h2>
                    </div>

                    <?php
                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                    $args = array(
                        'paged' => $paged,
                        'posts_per_page' => 5
                    );
                    $posts = get_posts($args);

                    foreach ($posts as $post) : setup_postdata($post);
                        // 記事のIDを取得
                        $post_id = get_the_ID();

                        // 記事のIDを指定してカテゴリを取得
                        $categories = get_the_category($post_id);

                        // カテゴリが存在するか確認
                        if ($categories) :
                            // 最初のカテゴリを取得
                            $first_category = $categories[0];
                    ?>

                    <a class="top-main-content-item-link" href="<?php echo esc_url(get_permalink()); ?>">
                        <article class="top-main-content-item">
                            <div class="top-main-content-image-wrap">
                                <div class="top-main-content-thumbnail">
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url($post, 'full')); ?>"
                                        alt="記事サムネイル" width="324" height="216" decoding="async" />
                                    <p class="c-top-category"><?php echo esc_html($first_category->name); ?></p>
                                </div>
                            </div>
                            <div class="top-main-content-text-wrap">
                                <p class="top-main-content-date"><?php echo esc_html(get_the_date()); ?></p>
                                <h3 class="c-title-level3 top-main-content-item-title">
                                    <?php echo esc_html(wp_trim_words(get_the_title(), 13, '…')); ?>
                                </h3>
                                <p class="c-base-text top-main-content-item-text">
                                    <?php echo esc_html(wp_trim_words(get_the_content(), 100, '…')); ?> </p>
                            </div>
                        </article>
                    </a>

                    <?php
                        endif;
                    endforeach;

                    wp_reset_postdata(); // ループの後に必ずリセットする
                    ?>



                    <!-- ページネーション -->
                    <div class="top-pagination">
                        <div class="l-container">
                            <div class="top-pagination-inner">
                                <?php the_posts_pagination(); ?> </div>
                        </div>
                    </div>
                    <!-- ページネーション -->
                </section>
            </div>
        </div>
        <!-- 記事一覧 -->
        <?php get_sidebar(); ?>
        <button class="top-return-button" id="top-button" name="top-button"></button>
    </main>
</div>
<?php get_footer(); ?>