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
            echo '<a href="' . pll_home_url() . '">BK<span>MEDIA</span></a>';
        }
        ?>
    </div>
    <nav>
        <!-- This will show the menu you create in WordPress Admin -->
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        <div class="lang-switcher">
            <?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?>
        </div>
    </nav>
</header>