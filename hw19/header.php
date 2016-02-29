<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name');
        wp_title(); ?></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div class="wrapper">
    <div class="content">
        <!-- site-header -->
        <header class="site-header">
            <div class="container top clearfix">
                <h1 class="logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"
                                                             alt=""/></a>
                </h1>
                <?php wp_nav_menu(array(
                    'theme_location' => 'social',
                    'menu' => 'Social Menu',
                    'container' => 'false',
                    'menu_class' => 'social clearfix',
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                )); ?>

            </div>
            <div class="container">
                <div class="site-nav">
                    <div class="line"></div>
                    <a href="#" class="menu-trig"><i class="fa fa-bars"></i></a>
                    <nav class="site-menu">
                        <?php wp_nav_menu(array('menu' =>'Header Menu',
                            'container' => 'false',
                        )); ?>
                    </nav>

                </div>
                <div class="search-toggle">
                    <a class="screen-reader-text" aria-expanded="false"
                       aria-controls="search-container">
                        <i class="fa fa-search"></i></a>
                </div>
                <div id="search-container" class="search-box-wrapper hide">
                    <div class="search-box">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>

        </header> <!-- /site-header -->
		
