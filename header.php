<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="format-detection" content="telephone=no" />

    <!-- ファビコン・ウェブクリップアイコン -->
    <link rel="shortcut icon" href="/img/favicon.ico" />
    <link rel="apple-touch-icon" href="/img/webclip.png" />
    <!-- ogp -->
    <meta property="og:site_name" content="TANAKA dental clinic" />
    <meta property="og:url" content="URL(絶対パス)" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php bloginfo('description'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:image" content="/img/ogp-1200.png" />
    <meta property="og:locale" content="ja_JP" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
    <meta name="twitter:image:src" content="/img/ogp-1200.png" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;700&display=swap"
        rel="stylesheet" />
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/aa71a318bc.js" crossorigin="anonymous" defer></script>

    <!-- css -->
    <link rel="stylesheet" href="lib/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- js -->
    <script src="lib/swiper-bundle.min.js" defer></script>
    <script src="js/main.js" defer></script>
    <?php wp_head(); ?>
</head>

<body>
    <!-- ヘッダー -->
    <header class="header">
        <div class="header-inner">
            <a href="<?php echo esc_url(home_url()); ?>">

                <?php
                if (is_home()) {
                    echo '<h1 class="header-logo">';
                    echo '<img src="' . esc_url(get_theme_file_uri('img/logo_white.svg')) . '" alt="サイトロゴ" width="180" height="30" decoding="async" />';
                    echo '</h1>';
                } else {
                    echo '<div class="header-logo">';
                    echo '<img src="' . esc_url(get_theme_file_uri('img/logo_white.svg')) . '" alt="サイトロゴ" width="180" height="30" decoding="async" />';
                    echo '</div>';
                }
                ?>
            </a>
        </div>
    </header>
    <!-- ヘッダー -->