<?php

/**
 * Plugin Name:       Dark Mode for OceanWP
 * Plugin URI:        https://luizeof.com.br/opensource/darkmode-for-ocean/
 * Description:       Apply Dark Mode to OceanWP Theme
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            luizeduardo
 * Author URI:        https://www.luizeof.com.br
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

add_filter('body_class', 'oceanwp_darkmode_body_class');
function oceanwp_darkmode_body_class($classes)
{
    if (oceanwp_is_darkmode_hour()) :
        $classes[] = 'oceanwp-darkmode';
    else :
        $classes[] = 'oceanwp-lightmode';
    endif;
    $classes[] = 'hour_' . oceanwp_current_hour();
    return $classes;
}

function oceanwp_get_dark_mode_color($color, $dark = "#152642")
{
    if (oceanwp_is_darkmode_hour()) :
        return $dark;
    else :
        return $color;
    endif;
}

function oceanwp_is_darkmode_hour()
{
    if ((oceanwp_current_hour() >= 21) || (oceanwp_current_hour() <= 8)) :
        return true;
    else :
        return false;
    endif;
}

function oceanwp_current_hour()
{
    return date_i18n('H', current_time('timestamp', 0));
}

add_action('wp_head', function () {
    echo '<style>';
    echo 'article .entry-content p, article .entry-content li {color: #FFF};';
    echo 'header h1, header h2, article h2, article h3,h4,h5,h6 {color: #7DFFF7 !important};';
    echo '</style>';
});

add_filter('theme_mod_ocean_header_background', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#081B33');
});

add_filter('theme_mod_ocean_logo_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#FFFFFF');
});

add_filter('theme_mod_ocean_menu_link_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#FFFFFF');
});

add_filter('theme_mod_ocean_menu_link_color_hover', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#FFFFFF');
});

add_filter('theme_mod_ocean_menu_link_color_active', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#7DFFF7');
});

add_filter('theme_mod_ocean_page_header_title_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#FFFFFF');
});

add_filter('theme_mod_ocean_page_header_background', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#152642');
});

add_filter('theme_mod_ocean_page_header_title_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#FFFFFF');
});

add_filter('theme_mod_ocean_post_title_background_color', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_page_header_bg_image_overlay_color', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_blog_single_title_bg_image_overlay_color', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_primary_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#0AC0C9');
});

add_filter('theme_mod_ocean_hover_primary_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#767D92');
});

add_filter('theme_mod_ocean_main_border_color', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_background_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#081B33');
});

add_filter('theme_mod_ocean_links_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#0AC0C9');
});

add_filter('theme_mod_ocean_links_color_hover', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#0AC0C9');
});

add_filter('theme_mod_ocean_page_header_title_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#FFFFFF');
});

add_filter('theme_mod_ocean_breadcrumbs_text_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#0AC0C9');
});

add_filter('theme_mod_ocean_breadcrumbs_seperator_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#0AC0C9');
});

add_filter('theme_mod_ocean_breadcrumbs_link_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#0AC0C9');
});

add_filter('theme_mod_ocean_breadcrumbs_link_color_hover', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#0AC0C9');
});

add_filter('theme_mod_ocean_scroll_top_color_hover', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_scroll_top_color', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_pagination_hover_bg', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_pagination_color', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_pagination_hover_color', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_pagination_border_color', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_pagination_border_hover_color', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_label_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#FFFFFF');
});

add_filter('theme_mod_ocean_input_border_color', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_input_color', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_input_background', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_theme_button_bg', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#0AC0C9');
});

add_filter('theme_mod_ocean_theme_button_hover_bg', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#0AC0C9');
});

add_filter('theme_mod_ocean_input_border_color_focus', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});

add_filter('theme_mod_ocean_theme_button_color', function ($value) {
    return oceanwp_get_dark_mode_color($value, '#000');
});

add_filter('theme_mod_ocean_theme_button_hover_color', function ($value) {
    return oceanwp_get_dark_mode_color($value);
});
