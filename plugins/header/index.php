<?php
/*
Plugin Name: Cesare Benedetti Header
Description: [cesare_benedetti_header bg_url="<URL>" nav_links="26,3" custom_class="ex-1" show_breadcrumb="true|false"]
Version: 1.7
Author: Antonio Guiotto
*/

// Include the breadcrumbs function
require_once plugin_dir_path(__FILE__) . 'breadcrumbs.php';

// Function to enqueue scripts and styles
function header_cesare_benedetti_scripts()
{
    wp_enqueue_style('cesare-benedetti-header-css', plugins_url('/custom-header-plugin.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'header_cesare_benedetti_scripts');

// Shortcode function to output HTML
function header_cesare_benedetti_shortcode($atts)
{
    // Default page IDs if nav_links attribute is not provided
    $default_nav_links = array(83, 26, 88, 90, 92);

    // Extract shortcode attributes
    $atts = shortcode_atts(array(
        'bg_url' => '',                // Background URL for the hero section
        'nav_links' => '',             // Comma-separated list of page IDs for navigation
        'custom_class' => '',          // Additional custom class for styling
        'show_breadcrumb' => 'true'    // Show breadcrumb by default
    ), $atts, 'cesare_benedetti_header');

    // Get current user info
    $current_user = wp_get_current_user();
    $user_info = '';

    // Set the URL for the Client Area login page (page ID 37)
    $login_url = get_permalink(37);
    // Set the URL for the Account page (page ID 63)
    $account_url = get_permalink(63);
    // Set the URL for the homepage (page ID 2)
    $home_url = get_permalink(2);

    if ($current_user->ID) {
        // User is logged in, show account link, username, and logout link
        $user_info = '<div class="user-info">' . esc_html($current_user->display_name) . ' <span class="green-dot" style="color:#90e839;">●</span> | <a href="' . esc_url($account_url) . '">Account</a> | <a href="' . wp_logout_url($home_url) . '">Logout</a></div>';
    } else {
        // User is not logged in, show Client Area login link
        $user_info = '<div class="user-info"><a href="' . esc_url($login_url) . '">Client Area</a></div>';
    }

    // Logo URL (linked to homepage)
    $logo_url = 'http://apspcesarebenedetti.chebellagiornata.it/wp-content/uploads/2024/08/Logo.png';

    // Default background image URL
    $default_bg_url = 'http://apspcesarebenedetti.chebellagiornata.it/wp-content/uploads/2024/09/fantastic-blue-sky-scaled.jpg';

    // Determine background style
    $bg_url = $atts['bg_url'] ? esc_url($atts['bg_url']) : esc_url($default_bg_url);
    $bg_style = 'style="background: url(' . $bg_url . ') no-repeat center center; background-size: cover;"';

    // Handle navigation links, aligned to the left
    $nav_links_html = '<nav class="user-nav"><ul>';
    $nav_links = !empty($atts['nav_links']) ? explode(',', $atts['nav_links']) : $default_nav_links;
    foreach ($nav_links as $page_id) {
        $page_id = trim($page_id);
        if (is_numeric($page_id) && get_post_status($page_id) == 'publish') {
            $nav_links_html .= '<li><a href="' . get_permalink($page_id) . '">' . get_the_title($page_id) . '</a></li>';
        }
    }
    $nav_links_html .= '</ul></nav>';

    // Determine whether to show the breadcrumb
    $breadcrumb_html = '';
    if ($atts['show_breadcrumb'] === 'true') {
        ob_start();
        cesare_benedetti_breadcrumbs();
        $breadcrumb_html = ob_get_clean();
    }

    // Output the specified HTML
    return '<header class="header-container ' . esc_attr($atts['custom_class']) . '">
                <div class="header-content">
                    <div class="header-row header-row-top">
                        <div class="logo">
                            <a href="' . esc_url($home_url) . '">
                                <img src="' . esc_url($logo_url) . '" alt="Logo">
                            </a>
                        </div>
                        <div class="user-session">' . $user_info . '</div>
                    </div>
                    <div class="header-row header-row-navbar">
                        ' . $nav_links_html . '
                    </div>
                    <div class="hero-container" ' . $bg_style . '>
                        <div class="hero-text-container">
                            <div class="text-wrapper">
                                <h3 class="sub-title">' . esc_html(get_the_title()) . '</h3>
                                ' . $breadcrumb_html . ' <!-- Breadcrumbs inserted here -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>';
}

add_shortcode('cesare_benedetti_header', 'header_cesare_benedetti_shortcode');
