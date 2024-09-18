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
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="/i-nostri-servizi/">R.S.A.</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="/casa-di-soggiorno/">Casa di soggiorno</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="/centro-diurno/">Centro diurno</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="/hospice/">Hospice</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="/fisioterapia-per-esterni/">Fisioterapia per esterni</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="/infermieri-e-medici-specialistici/">Infermieri e medici specialistici</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="/assistenza-domiciliare-specializzata/">Assistenza domiciliare specializzata</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="/modulistica/">Modulistica</a></li>
                <li class="services-rsa__item level_1"><a class="services-rsa__link level_1" target="" href="/tariffe-e-servizi/">Tariffe e servizi</a></li>
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



