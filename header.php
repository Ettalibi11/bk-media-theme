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
   <div class="header-right">
        <div class="header-search">
            <?php get_search_form(); ?> <!-- This calls your searchform.php -->
        </div>
        
        <nav>
            <!-- This will show the menu you create in WordPress Admin -->
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>    
         <div class="lang-switcher">
                <?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?>
        </div>
    </div>
</header>