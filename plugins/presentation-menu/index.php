<?php
/*
Plugin Name: Presentation Menu Plugin
Description: Generates a presentation menu for the APSP Cesare Benedetti website with shortcode [presentation_menu].
Version: 1.1
Author: Antonio Guiotto
*/

// Function to enqueue the CSS for the presentation menu
function presentation_menu_plugin_enqueue_styles() {
    wp_enqueue_style('presentation-menu-plugin-css', plugins_url('presentation-menu-plugin.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'presentation_menu_plugin_enqueue_styles');

// Function to render the presentation menu
function presentation_menu_plugin_render() {
    ob_start(); // Start output buffering
    ?>
    <div class="presentation-menu__widget">
        <h4>Presentazione</h4>
        <nav class="presentation-menu__nav presentation-menu__layout_ver">
            <ul class="presentation-menu__nav-list presentation-menu__level_1">
                <li class="presentation-menu__nav-item presentation-menu__level_1">
                    <a class="presentation-menu__nav-anchor presentation-menu__level_1" href="https://apspcesarebenedetti.chebellagiornata.it/chi-siamo/storia/">Storia</a>
                </li>
                <li class="presentation-menu__nav-item presentation-menu__level_1">
                    <a class="presentation-menu__nav-anchor presentation-menu__level_1" href="https://apspcesarebenedetti.chebellagiornata.it/chi-siamo/statuto/">Statuto</a>
                </li>
                <li class="presentation-menu__nav-item presentation-menu__level_1">
                    <a class="presentation-menu__nav-anchor presentation-menu__level_1" href="https://apspcesarebenedetti.chebellagiornata.it/chi-siamo/mission/">Mission</a>
                </li>
                <li class="presentation-menu__nav-item presentation-menu__level_1">
                    <a class="presentation-menu__nav-anchor presentation-menu__level_1" href="https://apspcesarebenedetti.chebellagiornata.it/chi-siamo/politica-per-la-qualita/">Politica per la qualita</a>
                </li>
                <li class="presentation-menu__nav-item presentation-menu__level_1">
                    <a class="presentation-menu__nav-anchor presentation-menu__level_1" href="https://apspcesarebenedetti.chebellagiornata.it/chi-siamo/politica-per-la-privacy/">Politica per la privacy</a>
                </li>
                <li class="presentation-menu__nav-item presentation-menu__level_1">
                    <a class="presentation-menu__nav-anchor presentation-menu__level_1" href="https://apspcesarebenedetti.chebellagiornata.it/chi-siamo/i-nostri-contatti/">I nostri contatti</a>
                </li>
                <li class="presentation-menu__nav-item presentation-menu__level_1">
                    <a class="presentation-menu__nav-anchor presentation-menu__level_1" href="https://apspcesarebenedetti.chebellagiornata.it/chi-siamo/figure-di-riferimento/">Figure di riferimento</a>
                </li>
                <li class="presentation-menu__nav-item presentation-menu__level_1">
                    <a class="presentation-menu__nav-anchor presentation-menu__level_1" href="https://apspcesarebenedetti.chebellagiornata.it/chi-siamo/link-utili/">Link utili</a>
                </li>
            </ul>
        </nav>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}

// Shortcode to render the presentation menu
function presentation_menu_shortcode() {
    return presentation_menu_plugin_render();
}
add_shortcode('presentation_menu', 'presentation_menu_shortcode');
