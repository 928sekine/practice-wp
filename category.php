<?php get_header(); ?>
<div class="l-container-max">
    <main class="top-main">
        <!-- 記事一覧 -->
        <div class="top-main-content">
            <?php
            $cat = get_the_category();
            $catname = $cat[0]->cat_name;
            ?>
            <div class="l-container">
                <section class="top-main-content-inner">
                    <div class="top-main-content-title-flex">
                        <div class="top-main-content-title-circle"></div>
                        <h2 class="c-title-level2 top-main-content-title"><?php echo $catname; ?></h2>
                    </div>
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <article class="top-main-content-item">
                            <div class="top-main-content-image-wrap">
                                <div class="top-main-content-thumbnail">
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="記事サムネイル" width="324"
                                        height="216" decoding="async" />

                                    <p class="c-top-category">地域名</p>
                                </div>
                            </div>
                            <div class="top-main-content-text-wrap">
                                <p class="top-main-content-date"><?php the_date(); ?></p>
                                <h3 class="c-title-level3 top-main-content-item-title">
                                    <?php echo wp_trim_words(get_the_title(), 13, '…'); ?>
                                </h3>
                                <p class="c-base-text top-main-content-item-text">
                                    <?php echo wp_trim_words(get_the_content(), 225, '…'); ?> </p>
                            </div>
                        </article>
                    </a>
                    <?php endwhile; ?>
                    <?php endif; ?>
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