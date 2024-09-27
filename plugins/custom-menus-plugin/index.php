<?php
/*
Plugin Name: Custom Menus Plugin
Description: Generates various custom menus for the APSP Cesare Benedetti website including RSA services, presentation menu, and featured links. Use the shortcodes [services_rsa], [presentation_menu], and [featured_links].
Version: 1.0
Author: Antonio Guiotto
*/

// Enqueue styles (if necessary, otherwise can be removed)
function custom_menus_enqueue_styles() {
    // Uncomment and add custom styles if needed
    // wp_enqueue_style('custom-menus-css', plugins_url('custom-menus.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'custom_menus_enqueue_styles');

/* --------------------------
   RSA Services Menu (Hardcoded)
   -------------------------- */
function services_rsa_render() {
    ob_start();
    ?>
    <div class="custom-menu-widget">
        <h4 class="custom-menu-title">R.S.A.</h4>
        <nav class="custom-menu-nav">
            <ul class="custom-menu-list">
                <li class="custom-menu-item"><a href="/casa-di-soggiorno/" class="custom-menu-link">Casa di soggiorno</a></li>
                <li class="custom-menu-item"><a href="/centro-diurno/" class="custom-menu-link">Centro diurno</a></li>
                <li class="custom-menu-item"><a href="/hospice/" class="custom-menu-link">Hospice</a></li>
                <li class="custom-menu-item"><a href="/fisioterapia-per-esterni/" class="custom-menu-link">Fisioterapia per esterni</a></li>
                <li class="custom-menu-item"><a href="/infermieri-e-medici-specialistici/" class="custom-menu-link">Infermieri e medici specialistici</a></li>
                <li class="custom-menu-item"><a href="/assistenza-domiciliare-specializzata/" class="custom-menu-link">Assistenza domiciliare specializzata</a></li>
                <li class="custom-menu-item"><a href="/modulistica/" class="custom-menu-link">Modulistica</a></li>
                <li class="custom-menu-item"><a href="/tariffe-e-servizi/" class="custom-menu-link">Tariffe e servizi</a></li>
            </ul>
        </nav>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('services_rsa', 'services_rsa_render');

/* --------------------------
   Presentation Menu (Hardcoded)
   -------------------------- */
function presentation_menu_plugin_render() {
    ob_start();
    ?>
    <div class="custom-menu-widget">
        <h4 class="custom-menu-title">Presentazione</h4>
        <nav class="custom-menu-nav">
            <ul class="custom-menu-list">
                <li class="custom-menu-item"><a href="/chi-siamo/storia/" class="custom-menu-link">Storia</a></li>
                <li class="custom-menu-item"><a href="/chi-siamo/statuto/" class="custom-menu-link">Statuto</a></li>
                <li class="custom-menu-item"><a href="/chi-siamo/mission/" class="custom-menu-link">Mission</a></li>
                <li class="custom-menu-item"><a href="/chi-siamo/politica-per-la-qualita/" class="custom-menu-link">Politica per la qualità</a></li>
                <li class="custom-menu-item"><a href="/chi-siamo/politica-per-la-privacy/" class="custom-menu-link">Politica per la privacy</a></li>
                <li class="custom-menu-item"><a href="/chi-siamo/i-nostri-contatti/" class="custom-menu-link">I nostri contatti</a></li>
                <li class="custom-menu-item"><a href="/chi-siamo/figure-di-riferimento/" class="custom-menu-link">Figure di riferimento</a></li>
                <li class="custom-menu-item"><a href="/chi-siamo/link-utili/" class="custom-menu-link">Link utili</a></li>
            </ul>
        </nav>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('presentation_menu', 'presentation_menu_plugin_render');

/* --------------------------
   Featured Links Menu (Hardcoded)
   -------------------------- */
function featured_links_plugin_render() {
    ob_start();
    ?>
    <div class="custom-menu-widget">
        <h4 class="custom-menu-title">In evidenza</h4>
        <nav class="custom-menu-nav">
            <ul class="custom-menu-list">
                <li class="custom-menu-item"><a href="/anticorruzione-e-trasparenza/" class="custom-menu-link">Anticorruzione e trasparenza</a></li>
                <li class="custom-menu-item"><a href="/amministrazione-trasparente/" class="custom-menu-link">Amministrazione trasparente</a></li>
                <li class="custom-menu-item"><a href="/albo-telematico/" class="custom-menu-link">Albo telematico</a></li>
            </ul>
        </nav>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('featured_links', 'featured_links_plugin_render');

/* --------------------------
   Dove Siamo Menu (Hardcoded)
   -------------------------- */
function dove_siamo_menu_render() {
    ob_start();
    ?>
    <div class="custom-menu-widget">
        <h4 class="custom-menu-title">Dove Siamo</h4>
        <nav class="custom-menu-nav">
            <ul class="custom-menu-list">
                <li class="custom-menu-item"><a href="/dove-siamo/nei-dintorni/" class="custom-menu-link">Nei dintorni</a></li>
                <li class="custom-menu-item"><a href="/dove-siamo/comune-di-mori/" class="custom-menu-link">Comune di Mori</a></li>
                <li class="custom-menu-item"><a href="/dove-siamo/come-raggiungerci/" class="custom-menu-link">Come raggiungerci</a></li>
            </ul>
        </nav>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('dove_siamo_menu', 'dove_siamo_menu_render');
