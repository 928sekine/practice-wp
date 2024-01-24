    <!-- フッター -->
    <footer class="footer">
        <div class="l-container">
            <div class="footer-inner">
                <div class="footer-inner-flex">
                    <div class="footer-logo">
                        <img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')); ?>" alt="サイトロゴ" width="140"
                            height="50" decoding="async" />
                        <p class="base-text footer-instagram">
                            <a class="footer-instagram-link" href="#">Instagram</a>
                        </p>
                    </div>
                    <div class="footer-link">
                        <ul class="footer-link-list">
                            <li class="footer-link-item">
                                <a class="c-base-text footer-link-text" href="#" target="_blank"
                                    rel="noopener">当サイトについて</a>
                                <a class="c-base-text footer-link-text" href="#" target="_blank" rel="noopener">会社概要</a>
                                <a class="c-base-text footer-link-text" href="#" target="_blank"
                                    rel="noopener">プライバシーポリシー</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-contact">
                        <a href="#" class="c-button1">お問い合わせ</a>
                        <p class="footer-address">
                            〒123-4567<br />東京都なんとか区なんとか1-2-3<br />なんとかビル102<br />株式会社XXXX
                        </p>
                    </div>
                </div>
                <p class="footer-copyright">&copy; <?php echo bloginfo('name'); ?> あきおかあるき Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <!-- フッター -->
    <?php wp_footer(); ?>
    </body>

    </html>