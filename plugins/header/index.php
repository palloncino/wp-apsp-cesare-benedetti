<?php
/*
Plugin Name: Cesare Benedetti Header
Description: Provides the Header through a shortcode. Use the shortcode [cesare_benedetti_header] to display the header.
Version: 1.1
Author: Antonio Guiotto
*/

// Function to enqueue scripts and styles
function header_cesare_benedetti_scripts() {
    // Optionally, enqueue a CSS file if you have additional styles
    wp_enqueue_style('cesare-benedetti-header-css', plugins_url('/custom-header-plugin.css', __FILE__));
    // Enqueue JavaScript file if necessary
    // wp_enqueue_script('cesare-benedetti-header-js', plugins_url('/example_1942384.js', __FILE__), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'header_cesare_benedetti_scripts');

// Shortcode function to output HTML
function header_cesare_benedetti_shortcode($atts) {
    // Extract shortcode attributes
    $atts = shortcode_atts(array(
        'bg_url' => ''
    ), $atts, 'cesare_benedetti_header');

    // Get current page title and site name
    $page_title = get_the_title();
    $page_id = get_the_ID();
    $site_name = get_bloginfo('name');

    // Determine background style
    $bg_style = $atts['bg_url'] ? 'style="background: url(' . esc_url($atts['bg_url']) . ') no-repeat center center; background-size: cover;"' : '';

    // Output the specified HTML
    return '<div class="hero-container" ' . $bg_style . '>
                <div class="hero-text-container hero-text-container-show">
                    <div class="text-wrapper">
                        <h3 class="sub-title" title="Page ID: ' . esc_attr($page_id) . '">' . esc_html($page_title) . '</h3>
                    </div>
                </div>
            </div>';
}

add_shortcode('cesare_benedetti_header', 'header_cesare_benedetti_shortcode');
