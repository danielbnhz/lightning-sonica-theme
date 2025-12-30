<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <!-- Left: site title -->
    <div class="full-width-header-text">
        <h1>Lightning Sonica</h1>
    </div>

    <!-- Right: social icons + blog link -->
    <div class="header-right">
        <nav class="header-nav">
            <a href="<?php echo home_url(); ?>">Home</a>
            <!-- <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Blog</a> -->
            <a href="<?php echo home_url('/about/'); ?>">About</a>
        </nav>
        <div class="social-icons">
            <a href="https://www.instagram.com/lightning_sonica/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/igpurp.webp" alt="Instagram">
            </a>

            <a href="https://www.youtube.com/@lightningsonica" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ytpurp.webp" alt="YouTube">
            </a>
        </div>
    </div>
</header>
