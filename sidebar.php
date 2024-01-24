        <!-- サイドメニュー -->
        <aside class="top-aside">
            <div class="l-container">
                <div class="top-aside-inner">
                    <div class="top-aside-item top-aside-search">
                        <p class="top-aside-name">検索</p>
                        <?php get_search_form(); ?>
                    </div>
                    <div class="top-aside-item top-aside-category">
                        <p class="top-aside-name">記事ジャンル</p>
                        <ul class="top-aside-category-name">
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $category) {
                                echo '<li><a class="top-aside-category-link" href="' . get_category_link($category->term_id) . '">' . $category->name . ' (' . $category->count . ')</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="top-aside-item top-aside-about">
                        <p class="top-aside-name">当サイトについて</p>
                        <img class="top-aside-about-image"
                            src="<?php echo esc_url(get_theme_file_uri('img/about-img.png')); ?>" alt="about"
                            width="180" height="180" decoding="async" />
                        <p class="top-aside-about-text">「あきおかあるき」とは？</p>
                        <a href="#" class="c-button1">詳しく見る</a>
                    </div>
                </div>
            </div>
        </aside>
        <!-- サイドメニュー -->