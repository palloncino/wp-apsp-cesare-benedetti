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
            <div class="cb-user-info">
                <span class="cb-username">' . esc_html($current_user->display_name) . '</span>
                <span class="cb-green-dot">●</span>
                <a href="' . esc_url($account_url) . '">Account</a>
                <a href="' . esc_url(wp_logout_url($home_url)) . '">Logout</a>
            </div>';
    } else {
        // User is not logged in
        $user_info = '
            <div class="cb-user-info">
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
            $nav_items .= '<li class="cb-nav-item"><a class="cb-nav-link" href="' . get_permalink($page_id) . '">' . get_the_title($page_id) . '</a></li>';
        }
    }

    // Determine whether to show the breadcrumb
    $breadcrumb_html = '';
    if ($atts['show_breadcrumb'] === 'true') {
        ob_start();
        cesare_benedetti_breadcrumbs();
        $breadcrumb_html = ob_get_clean();
    }

    // Inline CSS styles
    $inline_styles = '
    <style>
        /* Cesare Benedetti Header Styles */
        .cb-header-container {
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .cb-header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            height: 80px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .cb-logo-text {
            font-size: 1.75rem;
            font-weight: 700;
            color: #007bff;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cb-logo img {
            height: 50px;
            width: auto;
            max-width: 100%;
        }

        .cb-user-session {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .cb-user-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .cb-username {
            font-weight: 600;
        }

        .cb-user-info a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .cb-user-info a:hover {
            background-color: rgba(0, 123, 255, 0.1);
        }

        .cb-green-dot {
            font-size: 1rem;
            color: #90e839;
        }

        .cb-navbar {
            padding: 0 !important;
            height: 60px !important;
            max-width: 1200px;
            margin: 0 auto;
        }

        .cb-hero-header {
            width: 100%;
            max-width: 1140px;
            margin: 0 auto;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            background-size: cover;
        }

        .cb-hero-header h1 {
            font-size: 2.5rem;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        #cb-header-height {
            height: 140px;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .cb-burger-menu {
                outline: none!important;
            }
            .cb-burger-menu:hover {
                outline: none!important;
                background: unset!important;
            }
            .cb-logo img {
                display: none;
            }

            .cb-logo-text {
                font-size: 1.5rem;
            }

            .cb-header-content {
                padding: 10px 5px;
            }

            .cb-user-info {
                gap: 10px;
            }

            .cb-navbar {
                display: none;
            }

            .cb-header-container {
            left: 0;
        }

        /* Burger Menu Styles */
        .cb-burger-menu {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            width: 30px;
            height: 30px;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 0;
            z-index: 1001;
        }
        
        .cb-burger-menu:hover {
            outline: none!important;
            background: unset!important;
        }

        .cb-burger-menu div {
            width: 30px;
            height: 3px;
            background: #333;
            border-radius: 5px;
            transition: all 0.3s linear;
            position: relative;
            transform-origin: 1px;
        }

        .cb-burger-menu.open div:first-child {
            transform: rotate(45deg);
        }

        .cb-burger-menu.open div:nth-child(2) {
            opacity: 0;
            transform: translateX(20px);
        }

        .cb-burger-menu.open div:nth-child(3) {
            transform: rotate(-45deg);
        }

        /* Navigation Styles */
        .cb-navbar .cb-nav-item {
            list-style: none;
            margin-right: 20px;
        }

        .cb-navbar .cb-nav-link {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .cb-navbar .cb-nav-link:hover {
            color: #007bff;
        }

        /* Mobile Menu Styles */
        .cb-mobile-menu {
            display: none;
        }

        .cb-mobile-menu.show {
            display: block;
        }

        .cb-mobile-menu .bg-light {
            padding: 15px;
        }

        .cb-mobile-menu .cb-nav-link {
            padding: 10px 0;
            display: block;
        }

        .cb-mobile-menu .cb-user-info a {
            padding: 5px 0;
        }
    </style>
    ';

    // Inline JavaScript with added condition for wpadminbar
    $inline_script = '
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function adjustHeaderPosition() {
                const adminBar = document.getElementById("wpadminbar");
                const header = document.querySelector(".cb-header-container");
                if (adminBar) {
                    const adminBarHeight = adminBar.offsetHeight;
                    header.style.top = adminBarHeight + "px";
                } else {
                    header.style.top = "0px";
                }
            }

            function adjustHeaderHeight() {
                const header = document.querySelector(".cb-header-container");
                const headerHeight = header.offsetHeight;
                document.getElementById("cb-header-height").style.height = headerHeight + "px";
            }

            // Initial adjustment
            adjustHeaderPosition();
            adjustHeaderHeight();

            // Adjust on window resize
            window.addEventListener("resize", function () {
                adjustHeaderPosition();
                adjustHeaderHeight();
            });

            // Burger menu toggle
            const burgerMenu = document.getElementById("cb-burger-menu");
            const mobileMenu = document.getElementById("cb-mobileMenu");
            burgerMenu.addEventListener("click", function () {
                burgerMenu.classList.toggle("open");
                mobileMenu.classList.toggle("show");
            });
        });
    </script>
    ';

    // Output the header HTML with inline styles and scripts
    $output = '
    ' . $inline_styles . '
    <header class="cb-header-container ' . esc_attr($atts['custom_class']) . '">
        <div class="cb-header-content">
            <!-- Left: Textual Logo -->
            <div class="cb-logo-text">
                APSP Cesare Benetti
            </div>

            <!-- Center: Image Logo (visible on large screens and up) -->
            <div class="cb-logo cb-logo-center d-none d-lg-block">
                <a href="' . esc_url($home_url) . '">
                    <img src="' . esc_url($logo_url) . '" alt="Logo">
                </a>
            </div>

            <!-- Right: User Links (visible on large screens and up) -->
            <div class="cb-user-session d-none d-lg-flex align-items-center">
                ' . $user_info . '
            </div>

            <!-- Mobile: Burger Menu -->
            <div class="d-lg-none">
                <button class="cb-burger-menu" id="cb-burger-menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </button>
            </div>
        </div>

        <!-- Navigation Bar -->
        <nav class="cb-navbar navbar navbar-expand-lg">
            <div class="cb-navbar-collapse" id="cb-navbarNav">
                <!-- Navigation Links -->
                <ul class="navbar-nav mr-auto">
                    ' . $nav_items . '
                </ul>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div class="cb-mobile-menu collapse" id="cb-mobileMenu">
            <div class="bg-light p-3">
                <ul class="navbar-nav">
                    ' . $nav_items . '
                </ul>
                <hr>
                <div class="cb-user-info d-flex flex-column">
                    ' . $user_info . '
                </div>
            </div>
        </div>
    </header>

    <!-- Hidden container to provide height for the fixed header -->
    <div id="cb-header-height"></div>

    <!-- Hero Header -->
    <div class="cb-hero-header" style="' . esc_attr($bg_style) . '">
        <h1>Welcome to My Website</h1>
    </div>

    ' . $inline_script . '
    ';

    return $output;
}
add_shortcode('cesare_benedetti_header', 'header_cesare_benedetti_shortcode');

// Breadcrumbs function
function cesare_benedetti_breadcrumbs() {
    if (!is_front_page()) {
        echo '<nav class="cb-breadcrumb">';
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
