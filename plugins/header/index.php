<?php
/*
Plugin Name: Cesare Benedetti Header
Description: [cesare_benedetti_header bg_url="<URL>" nav_links="26,3" custom_class="ex-1" ]
Version: 1.4
Author: Antonio Guiotto
*/

// Function to enqueue scripts and styles
function header_cesare_benedetti_scripts() {
    wp_enqueue_style('cesare-benedetti-header-css', plugins_url('/custom-header-plugin.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'header_cesare_benedetti_scripts');

// Shortcode function to output HTML
function header_cesare_benedetti_shortcode($atts) {
    // Extract shortcode attributes
    $atts = shortcode_atts(array(
        'bg_url' => '',                // Background URL for the hero section
        'nav_links' => '',             // Comma-separated list of page IDs for navigation
        'custom_class' => '',          // Additional custom class for styling
    ), $atts, 'cesare_benedetti_header');

    // Get current user info
    $current_user = wp_get_current_user();
    $user_info = '';

    // Set the URL for the Client Area login page (page ID 37)
    $login_url = get_permalink(37);

    if ($current_user->ID) {
        // User is logged in, show logout link
        $user_info = '<div class="user-info">Ciao, ' . esc_html($current_user->display_name) . ' <span class="green-dot" style="color:green;">●</span> | <a href="' . wp_logout_url(home_url()) . '">Logout</a></div>';
    } else {
        // User is not logged in, show Client Area login link
        $user_info = '<div class="user-info"><a href="' . esc_url($login_url) . '">Client Area</a></div>';
    }

    // Logo URL
    $logo_url = 'http://apspcesarebenedetti.chebellagiornata.it/wp-content/uploads/2024/08/Logo.png';

    // Determine background style
    $bg_style = $atts['bg_url'] ? 'style="background: url(' . esc_url($atts['bg_url']) . ') no-repeat center center; background-size: cover;"' : '';

    // Handle navigation links
    $nav_links_html = '<nav class="user-nav"><ul>';
    if (!empty($atts['nav_links'])) {
        $nav_links = explode(',', $atts['nav_links']);
        foreach ($nav_links as $page_id) {
            $page_id = trim($page_id);
            if (is_numeric($page_id) && get_post_status($page_id) == 'publish') {
                $nav_links_html .= '<li><a href="' . get_permalink($page_id) . '">' . get_the_title($page_id) . '</a></li>';
            }
        }
    }
    $nav_links_html .= '</ul></nav>';

    // Output the specified HTML
    return '<div class="header-container ' . esc_attr($atts['custom_class']) . '">
                <div class="header-row header-row-top">
                    <div class="logo">
                        <img src="' . esc_url($logo_url) . '" alt="Logo" style="max-height: 80px;">
                    </div>
                    <div class="user-session">' . $user_info . '</div>
                </div>
                <div class="header-row header-row-navbar">
                    ' . $nav_links_html . '
                </div>
                <div class="hero-container" ' . $bg_style . '>
                    <div class="hero-text-container hero-text-container-show">
                        <div class="text-wrapper">
                            <h3 class="sub-title" title="Page ID: ' . esc_attr(get_the_ID()) . '">' . esc_html(get_the_title()) . '</h3>
                        </div>
                    </div>
                </div>
            </div>';
}

add_shortcode('cesare_benedetti_header', 'header_cesare_benedetti_shortcode');
