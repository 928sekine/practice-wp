<?php get_header(); ?>
<div class="l-container-max">
    <main class="top-main">
        <!-- 記事 -->
        <?php if (have_posts()) : the_post(); ?>
        <!-- カスタムフィールドの値を取得 -->
        <?php
            $shop_name = get_field('shop_name');
            $shop_address = get_field('shop_address');
            $shop_hours = get_field('shop_hours');
            $shop_tel = get_field('shop_tel');
            $shop_price_range = get_field('shop_price_range');
            ?>
        <!-- カスタムフィールドの値を取得 -->
        <div class="top-main-content">
            <div class="l-container">
                <section class="top-main-content-inner">
                    <article class="single-main-content-item">
                        <h1 class="single-main-content-item-title"><?php the_title(); ?></h1>
                        <p class="c-base-text"><?php echo get_the_date('Y.m.d'); ?></p>

                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="記事サムネイル" width="324" height="216"
                            decoding="async" />
                        <p class="c-base-text"> <?php the_content(); ?>
                        </p>
                        <!-- 店舗情報 -->
                        <div class="single-main-content-item-shop-detail">
                            <p class="single-main-content-item-shop-title">店舗情報</p>
                            <p class="single-main-content-item-shop-name"><?php echo $shop_name; ?></p>
                            <dl class="single-main-content-shop">
                                <dt class="single-main-content-shop-label">住所</dt>
                                <dd class="single-main-content-shop-detail"><?php echo $shop_address; ?></dd>
                                <dt class="single-main-content-shop-label">営業時間</dt>
                                <dd class="single-main-content-shop-detail"><?php echo $shop_hours; ?></dd>
                                <dt class="single-main-content-shop-label">電話番号</dt>
                                <dd class="single-main-content-shop-detail"><a
                                        href="tel:<?php echo $shop_tel; ?>"><?php echo $shop_tel; ?></a></dd>
                                <dt class="single-main-content-shop-label">価格帯</dt>
                                <dd class="single-main-content-shop-detail"><?php echo $shop_price_range; ?></dd>
                            </dl>
                        </div>
                        <!-- 店舗情報 -->
                    </article>
                </section>
            </div>
        </div>
        <?php endif; ?>
        <!-- 記事 -->
        <?php get_sidebar(); ?>
        <button class="top-return-button" id="top-button" name="top-button"></button>
    </main>
</div>
<?php get_footer(); ?>