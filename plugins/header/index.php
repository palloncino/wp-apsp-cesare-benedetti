<?php
/*
Plugin Name: Cesare Benedetti Header
Description: [cesare_benedetti_header bg_url="<URL>" nav_links="26,3" custom_class="ex-1" show_breadcrumb="true|false" login_page_id="37" account_page_id="63"]
Version: 2.4
Author: Antonio Guiotto
*/

// Shortcode function to output the header
function header_cesare_benedetti_shortcode($atts) {
    // Default page IDs if nav_links attribute is not provided
    $default_nav_links = array(83, 26, 88, 90, 92);

    // Extract shortcode attributes
    $atts = shortcode_atts(array(
        'bg_url'            => '',        // Background URL for the hero section
        'nav_links'         => '',        // Comma-separated list of page IDs for navigation
        'custom_class'      => '',        // Additional custom class for styling
        'show_breadcrumb'   => 'true',    // Show breadcrumb by default
        'login_page_id'     => '37',      // Default login page ID
        'account_page_id'   => '63'       // Default account page ID
    ), $atts, 'cesare_benedetti_header');

    // Enqueue CSS and JS
    wp_enqueue_style('reset-theme-style', plugins_url('css/reset-theme-style.css', __FILE__));
    wp_enqueue_style('custom-header-plugin', plugins_url('css/custom-header-plugin.css', __FILE__));
    wp_enqueue_script('cesare-benedetti-header-js', plugins_url('js/cesare-benedetti-header.js', __FILE__), array('jquery'), '2.4', true);

    // Get current user info
    $current_user = wp_get_current_user();
    $user_info = '';

    // Set URLs for login, account, logout, and home
    $login_url = get_permalink($atts['login_page_id']);
    $account_url = get_permalink($atts['account_page_id']);
    $home_url = home_url('/');

    if ($current_user->ID) {
        // User is logged in
        $user_info = '
            <div class="user-info">
                <span class="username">' . esc_html($current_user->display_name) . '</span>
                <span class="green-dot">●</span>
                <a href="' . esc_url($account_url) . '">Account</a>
                <a href="' . esc_url(wp_logout_url($home_url)) . '">Logout</a>
            </div>';
    } else {
        // User is not logged in
        $user_info = '
            <div class="user-info">
                <a href="' . esc_url($login_url) . '">Client Area</a>
            </div>';
    }

    // Logo URL (linked to homepage)
    $logo_url = 'http://apspcesarebenedetti.chebellagiornata.it/wp-content/uploads/2024/09/logo.png';

    // Default background image URL
    $default_bg_url = 'http://apspcesarebenedetti.chebellagiornata.it/wp-content/uploads/2024/09/fantastic-blue-sky-scaled.jpg';

    // Determine background style
    $bg_url = $atts['bg_url'] ? esc_url($atts['bg_url']) : esc_url($default_bg_url);
    $bg_style = 'background: url(\'' . $bg_url . '\') no-repeat center center; background-size: cover;';

    // Handle navigation links
    $nav_links = !empty($atts['nav_links']) ? explode(',', $atts['nav_links']) : $default_nav_links;
    $nav_items = '';
    foreach ($nav_links as $page_id) {
        $page_id = trim($page_id);
        if (is_numeric($page_id) && get_post_status($page_id) == 'publish') {
            $nav_items .= '<li class="nav-item"><a class="nav-link" href="' . get_permalink($page_id) . '">' . get_the_title($page_id) . '</a></li>';
        }
    }

    // Determine whether to show the breadcrumb
    $breadcrumb_html = '';
    if ($atts['show_breadcrumb'] === 'true') {
        ob_start();
        cesare_benedetti_breadcrumbs();
        $breadcrumb_html = ob_get_clean();
    }

    // Output the header HTML
    $output = '
    <header class="header-container ' . esc_attr($atts['custom_class']) . '">
        <div class="header-content">
            <!-- Left: Textual Logo -->
            <div class="logo-text">
                APSP Cesare Benetti
            </div>

            <!-- Center: Image Logo (visible on large screens and up) -->
            <div class="logo">
                <a href="' . esc_url($home_url) . '">
                    <img src="' . esc_url($logo_url) . '" alt="Logo">
                </a>
            </div>

            <!-- Right: User Links (visible on large screens and up) -->
            <div class="user-session">
                ' . $user_info . '
            </div>

            <!-- Mobile: Burger Menu -->
            <div class="d-lg-none">
                <button class="burger-menu" id="burger-menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </button>
            </div>
        </div>

        <!-- Navigation Bar -->
        <nav class="navbar" id="navbar">
            <div class="navbar-collapse" id="navbarNav">
                <!-- Navigation Links -->
                <ul class="navbar-nav mr-auto">
                    ' . $nav_items . '
                </ul>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div class="mobile-menu collapse" id="mobileMenu">
            <div class="bg-light p-3">
                <ul class="navbar-nav">
                    ' . $nav_items . '
                </ul>
                <hr>
                <div class="user-info d-flex flex-column">
                    ' . $user_info . '
                </div>
            </div>
        </div>
    </header>

    <!-- Hidden container to provide height for the fixed header -->
    <div id="header-height"></div>

    <!-- Hero Header -->
    <div class="hero-header" style="' . esc_attr($bg_style) . '">
        <h1>Welcome to My Website</h1>
    </div>

    ' . $breadcrumb_html;

    return $output;
}
add_shortcode('cesare_benedetti_header', 'header_cesare_benedetti_shortcode');

// Breadcrumbs function
function cesare_benedetti_breadcrumbs() {
    if (!is_front_page()) {
        echo '<nav class="breadcrumb">';
        echo '<a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'your-theme-textdomain') . '</a>';

        if (is_category() || is_single()) {
            echo ' &raquo; ';
            the_category(' &bull; ');
            if (is_single()) {
                echo ' &raquo; ';
                the_title();
            }
        } elseif (is_page()) {
            $ancestors = get_post_ancestors(get_queried_object_id());
            $ancestors = array_reverse($ancestors);

            foreach ($ancestors as $ancestor) {
                echo ' &raquo; ';
                echo '<a href="' . esc_url(get_permalink($ancestor)) . '">' . esc_html(get_the_title($ancestor)) . '</a>';
            }

            echo ' &raquo; ';
            echo esc_html(get_the_title());
        } elseif (is_search()) {
            echo ' &raquo; Search Results for... ';
            echo '"<em>';
            echo get_search_query();
            echo '</em>"';
        }

        echo '</nav>';
    }
}
?>
