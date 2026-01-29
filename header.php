<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="container">
        <div class="logo">
            <?php the_custom_logo(); ?>
            <?php if(!has_custom_logo()) { ?>
                <h1 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php } ?>
        </div>
        <nav class="main-nav">
            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'fallback_cb' => 'wp_page_menu',
                'container' => false,
            )); ?>
        </nav>
        <div class="header-search">
            <?php get_search_form(); ?>
        </div>
    </header>