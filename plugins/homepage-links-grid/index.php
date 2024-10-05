<?php
/*
Plugin Name: Homepage Links Grid
Description: Generates a static grid of links with titles, descriptions, and buttons for the APSP Cesare Benedetti website.
Version: 1.0
Author: Antonio Guiotto
*/

// Function to enqueue the CSS for the homepage links grid
function homepage_links_grid_enqueue_styles() {
    wp_enqueue_style('homepage-links-grid-css', plugin_dir_url(__FILE__) . 'homepage-links-grid.css');
}
add_action('wp_enqueue_scripts', 'homepage_links_grid_enqueue_styles');

// Function to enqueue Font Awesome
function enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

// Function to render the homepage links grid
function homepage_links_grid_render() {
    ob_start(); // Start output buffering
    ?>
    <div class="homepage-links-grid">
        <div class="homepage-links-grid__item">
            <div class="homepage-links-grid__icon">
                <i class="fas fa-legal"></i>
            </div>
            <div class="homepage-links-grid__title">Anticorruzione e trasparenza</div>
            <div class="homepage-links-grid__text">
                In questa sezione potrai consultare le regole in materia di trasparenza e di prevenzione della corruzione per le A.P.S.P.;
            </div>
            <a href="https://apspcesarebenedetti.chebellagiornata.it/anticorruzione-e-trasparenza/" class="homepage-links-grid__button">LEGGI TUTTO &gt;</a>
        </div>
        <div class="homepage-links-grid__item">
            <div class="homepage-links-grid__icon">
                <i class="fa fa-institution"></i>
            </div>
            <div class="homepage-links-grid__title">Amministrazione trasparente</div>
            <div class="homepage-links-grid__text">
                In questa sezione potrai visionare circolari, scaricare documenti ed avere maggiori informazioni sull'Amministrazione dell'APSP;
            </div>
            <a href="https://apspcesarebenedetti.chebellagiornata.it/amministrazione-trasparente/" class="homepage-links-grid__button">LEGGI TUTTO &gt;</a>
        </div>
        <div class="homepage-links-grid__item">
            <div class="homepage-links-grid__icon">
                <i class="fa fa-group"></i>
            </div>
            <div class="homepage-links-grid__title">Volontariato</div>
            <div class="homepage-links-grid__text">
                I volontari portano "aria fresca" all'interno della nostra Casa e ci permettono di sviluppare nuovi progetti che arricchiscono le giornate dei residenti;
            </div>
            <a href="https://apspcesarebenedetti.chebellagiornata.it/volontari/" class="homepage-links-grid__button">LEGGI TUTTO &gt;</a>
        </div>
        <div class="homepage-links-grid__item">
            <div class="homepage-links-grid__icon">
                <i class="fa fa-folder-open"></i>
            </div>
            <div class="homepage-links-grid__title">Pubblicità legale</div>
            <div class="homepage-links-grid__text">
                All'interno del sistema telematico sono pubblicati gli atti che devono essere portati a conoscenza dei cittadini, affinché possano prenderne visione;
            </div>
            <a href="https://apspcesarebenedetti.chebellagiornata.it/pubblicita-legale/" class="homepage-links-grid__button">LEGGI TUTTO &gt;</a>
        </div>
        <div class="homepage-links-grid__item">
            <div class="homepage-links-grid__icon">
                <i class="fa fa-calculator"></i>
            </div>
            <div class="homepage-links-grid__title">Tariffe servizi</div>
            <div class="homepage-links-grid__text">
                In questa sezione potrai consultare un elenco delle tariffe suddivise per i servizi offerti dell'APSP Cesare Benedetti;
            </div>
            <a href="https://apspcesarebenedetti.chebellagiornata.it/i-nostri-servizi/tariffe-e-servizi/" class="homepage-links-grid__button">LEGGI TUTTO &gt;</a>
        </div>
        <div class="homepage-links-grid__item">
            <div class="homepage-links-grid__icon">
                <i class="fa fa-thumbs-o-up"></i>
            </div>
            <div class="homepage-links-grid__title">Qualità</div>
            <div class="homepage-links-grid__text">
                La nostra Casa abbraccia una Politica per la Qualità tesa a perseguire uno standard elevato dei servizi forniti e al miglioramento continui degli stessi;
            </div>
            <a href="https://apspcesarebenedetti.chebellagiornata.it/qualita/" class="homepage-links-grid__button">LEGGI TUTTO &gt;</a>
        </div>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}

// Shortcode to render the homepage links grid
function homepage_links_grid_shortcode() {
    return homepage_links_grid_render();
}
add_shortcode('homepage_links_grid', 'homepage_links_grid_shortcode');
