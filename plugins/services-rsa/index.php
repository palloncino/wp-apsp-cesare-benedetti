<?php
/*
Plugin Name: Services RSA
Description: Generates a menu for the RSA services for the APSP Cesare Benedetti website.
Version: 1.0
Author: Antonio Guiotto
*/

// Function to enqueue the CSS for the Services RSA plugin
function services_rsa_enqueue_styles() {
    wp_enqueue_style('services-rsa-css', plugins_url('services-rsa.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'services_rsa_enqueue_styles');

// Function to render the Services RSA menu
function services_rsa_render() {
    ob_start(); // Start output buffering
    ?>
    <div class="services-rsa__widget">
        <h4 class="services-rsa__title">R.S.A.</h4>
        <nav class="services-rsa__nav layout_ver place_inside">
            <ul class="services-rsa__list level_1">
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="https://www.apsp-cesarebenedetti.it/r-s-a-/32-3/">R.S.A.</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="https://www.apsp-cesarebenedetti.it/casa-di-soggiorno/32-32/">Casa di soggiorno</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="https://www.apsp-cesarebenedetti.it/centro-diurno/32-10/">Centro diurno</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="https://www.apsp-cesarebenedetti.it/hospice/32-11/">Hospice</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="https://www.apsp-cesarebenedetti.it/fisioterapia-per-esterni/32-12/">Fisioterapia per esterni</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="https://www.apsp-cesarebenedetti.it/infermieri-e-medici-specialistici/32-14/">Infermieri e medici specialistici</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="https://www.apsp-cesarebenedetti.it/assistenza-domiciliare-specializzata/32-108/">Assistenza domiciliare specializzata</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="https://www.apsp-cesarebenedetti.it/modulistica/32-19/">Modulistica</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="https://www.apsp-cesarebenedetti.it/tariffe-e-servizi/32-18/">Tariffe e servizi</a></li>
            </ul>
        </nav>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}

// Shortcode to render the Services RSA menu
function services_rsa_shortcode() {
    return services_rsa_render();
}
add_shortcode('services-rsa', 'services_rsa_shortcode');

