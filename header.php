<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="logo">
        <?php 
        if ( has_custom_logo() ) {
            the_custom_logo();
        } else {
            // Smart Link: goes to the home of the current language
            echo '<a href="' . pll_home_url() . '">BK<span>MEDIA</span></a>';
        }
        ?>
    </div>

    <div class="header-right">
        <!-- Search Bar -->
        <div class="header-search">
            <?php get_search_form(); ?>
        </div>
        
        <!-- Navigation Menu -->
        <nav id="site-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>    

        <!-- Flags -->
        <div class="lang-switcher">
            <?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?>
        </div>

        <!-- Hamburger Icon (Hidden on Desktop) -->
        <div class="menu-toggle" id="mobile-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>