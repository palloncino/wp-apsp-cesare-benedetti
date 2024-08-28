<?php
/*
Plugin Name: Featured Links Plugin
Description: Generates a featured links menu for the APSP Cesare Benedetti website. Use the shortcode [featured_links] to display the menu.
Version: 1.0
Author: Antonio Guiotto
*/

// Function to enqueue the CSS for the featured links
function featured_links_plugin_enqueue_styles() {
    wp_enqueue_style('featured-links-plugin-css', plugins_url('featured-links.plugin.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'featured_links_plugin_enqueue_styles');

// Function to render the featured links menu
function featured_links_plugin_render() {
    ob_start(); // Start output buffering
    ?>
    <div class="featured-links__widget">
        <h4>In evidenza</h4>
        <nav class="featured-links__nav">
            <ul class="featured-links__list">
                <li class="featured-links__item">
                    <a href="https://www.apsp-cesarebenedetti.it/anticorruzione-e-trasparenza/32-15-1/" class="featured-links__anchor">
                        <span class="featured-links__title">Anticorruzione e trasparenza</span>
                    </a>
                </li>
                <li class="featured-links__item">
                    <a href="https://www.apsp-cesarebenedetti.it/amministrazione-trasparente/45-16/" class="featured-links__anchor">
                        <span class="featured-links__title">Amministrazione trasparente</span>
                    </a>
                </li>
                <li class="featured-links__item">
                    <a href="https://www.apsp-cesarebenedetti.it/albo-telematico/58-22-1/" class="featured-links__anchor">
                        <span class="featured-links__title">Albo telematico</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}

// Shortcode to render the featured links menu
function featured_links_shortcode() {
    return featured_links_plugin_render();
}
add_shortcode('featured_links', 'featured_links_shortcode');
