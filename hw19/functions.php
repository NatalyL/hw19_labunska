<?php

function site_resources()
{

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'site_resources');

// Load font

function load_fonts()
{
    wp_enqueue_style('font', get_template_directory_uri().'/fonts/font.css');
}

add_action('wp_print_styles', 'load_fonts');


// Load Font Awesome
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');
function enqueue_font_awesome()
{

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css');

}

//Theme setup

function learningWordPress_setup()
{

    // Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
    ));

    // Add featured image support
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'learningWordPress_setup');

//--
register_nav_menus(
    array(
        'primary' => __('Primary Menu', 'topcat-lite'),
        'social' => __('Social Menu', 'topcat-lite'),
    )
);

//Social Menu

function topcat_lite_social_menu()
{
    if (has_nav_menu('social')) {
        wp_nav_menu(
            array(
                'theme_location' => 'social',
                'container' => 'div',
                'container_id' => 'menu-social',
                'container_class' => 'menu-social',
                'menu_id' => 'menu-social-items',
                'menu_class' => 'menu-items',
                'depth' => 1,
                'link_before' => '<span class="screen-reader-text">',
                'link_after' => '</span>',
                'fallback_cb' => '',
            )
        );
    }
}

// Add widget Locations
function WidgetsInit()
{

    register_sidebar(array(
        'name' => 'Footer1',
        'id' => 'Footer1'
    ));

    register_sidebar(array(
        'name' => 'Footer2',
        'id' => 'Footer2'
    ));

    register_sidebar(array(
        'name' => 'Footer3',
        'id' => 'Footer3'
    ));
}

add_action('widgets_init','WidgetsInit');