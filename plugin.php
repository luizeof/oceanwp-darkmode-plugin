<?php

/**
 * Plugin Name:       OceanWP Dark Mode
 * Plugin URI:        https://luizeof.com.br/opensource/oceawp-darkmode/
 * Description:       Apply Dark Mode to OceanWP Theme
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            luizeof
 * Author URI:        https://www.luizeof.com.br
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

function oceanwp_get_dark_mode_color($color, $dark = "#152642")
{
    $hour = date('H', current_time('timestamp', 0));
    if (($hour >= 21) || ($hour <= 9)) :
        return $dark;
    else :
        return $color;
    endif;
}

add_action('wp_head', function () {
    echo '<style>article h1, article h2, article h3,h4,h5,h6{color: ' . oceanwp_get_dark_mode_color('#7DFFF7', 30) . ' !important;}</style>';
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
