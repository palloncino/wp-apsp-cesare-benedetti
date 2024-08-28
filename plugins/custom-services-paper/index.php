<?php
/*
Plugin Name: Custom Services Paper
Description: Displays a section for "I Servizi Offerti dall'A.P.S.P." with an image and a link. Use the shortcode [custom_services_paper] to display it.
Version: 1.0
Author: Your Name
*/

// Function to enqueue the CSS for the custom services paper
function custom_services_paper_enqueue_styles() {
    wp_enqueue_style('custom-services-paper-css', plugin_dir_url(__FILE__) . 'custom-services-paper.css');
}
add_action('wp_enqueue_scripts', 'custom_services_paper_enqueue_styles');

// Function to render the custom services paper
function custom_services_paper_render() {
    ob_start(); // Start output buffering
    ?>
    <div class="custom-services-paper__widget">
        <h4>I Servizi Offerti dall'A.P.S.P.</h4>
        <div class="custom-services-paper__content-h">
            <a target="_blank" href="https://www.apsp-cesarebenedetti.it/document/pdf/volantino-servizi-apsp/p96be10a41667cc1f234b424ce006b38/">
                <img src="https://www.apsp-cesarebenedetti.it/skin/cesarebenedetti_riev/images/jpg/volantino_servizi/" border="0" alt="Servizi Offerti">
            </a>
        </div>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}

// Shortcode to render the custom services paper
function custom_services_paper_shortcode() {
    return custom_services_paper_render();
}
add_shortcode('custom_services_paper', 'custom_services_paper_shortcode');
