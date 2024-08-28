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

// Function to render the homepage links grid
function homepage_links_grid_render() {
    ob_start(); // Start output buffering
    ?>
    <div class="homepage-links-grid">
        <div class="homepage-links-grid__container g-cols">
            <div class="homepage-links-grid__item">
                <div class="homepage-links-grid__iconbox">
                    <a href="https://www.apsp-cesarebenedetti.it/anticorruzione-e-trasparenza/32-15-1/" class="homepage-links-grid__link" target="_self">
                        <div class="homepage-links-grid__icon">
                            <i class="fa fa-legal"></i>
                        </div>
                        <h4 class="homepage-links-grid__title">Anticorruzione e trasparenza</h4>
                    </a>
                    <div class="homepage-links-grid__text">
                        <p>In questa sezione potrai consultare le regole in materia di trasparenza e di prevenzione della corruzione per le A.P.S.P.;</p>
                        <div class="g-hr type_invisible size_small"></div>
                        <a href="https://www.apsp-cesarebenedetti.it/anticorruzione-e-trasparenza/32-15-1/" target="_self">
                            <button class="homepage-links-grid__button outlined size_small"><span class="sp">LEGGI TUTTO &gt;</span></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="homepage-links-grid__item">
                <div class="homepage-links-grid__iconbox">
                    <a href="https://www.apsp-cesarebenedetti.it/amministrazione-trasparente/45-16/" class="homepage-links-grid__link" target="_self">
                        <div class="homepage-links-grid__icon">
                            <i class="fa fa-institution"></i>
                        </div>
                        <h4 class="homepage-links-grid__title">Amministrazione trasparente</h4>
                    </a>
                    <div class="homepage-links-grid__text">
                        <p>In questa sezione potrai visionare circolari, scaricare documenti ed avere maggiori informazioni sull'Amministrazione dell'APSP;</p>
                        <div class="g-hr type_invisible size_small"></div>
                        <a href="https://www.apsp-cesarebenedetti.it/amministrazione-trasparente/45-16/" target="_self">
                            <button class="homepage-links-grid__button outlined size_small"><span class="sp">LEGGI TUTTO &gt;</span></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="homepage-links-grid__item">
                <div class="homepage-links-grid__iconbox">
                    <a href="https://www.apsp-cesarebenedetti.it/volontari/32-20/" class="homepage-links-grid__link" target="_self">
                        <div class="homepage-links-grid__icon">
                            <i class="fa fa-group"></i>
                        </div>
                        <h4 class="homepage-links-grid__title">Volontariato</h4>
                    </a>
                    <div class="homepage-links-grid__text">
                        <p>I volontari portano "aria fresca" all'interno della nostra Casa e ci permettono di sviluppare nuovi progetti che arricchiscono le giornate dei residenti;</p>
                        <div class="g-hr type_invisible size_small"></div>
                        <a href="https://www.apsp-cesarebenedetti.it/volontari/32-20/" target="_self">
                            <button class="homepage-links-grid__button outlined size_small"><span class="sp">LEGGI TUTTO &gt;</span></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="homepage-links-grid__item">
                <div class="homepage-links-grid__iconbox">
                    <a href="http://www.apsp-cesarebenedetti.it/pubblicità-legale/58-22-1/" class="homepage-links-grid__link">
                        <div class="homepage-links-grid__icon">
                            <i class="fa fa-folder-open"></i>
                        </div>
                        <h4 class="homepage-links-grid__title">Pubblicità legale</h4>
                    </a>
                    <div class="homepage-links-grid__text">
                        <p>All'interno del sistema telematico sono pubblicati gli atti che devono essere portati a conoscenza dei cittadini, affinché possano prenderne visione;</p>
                        <div class="g-hr type_invisible size_small"></div>
                        <a href="http://www.apsp-cesarebenedetti.it/pubblicità-legale/58-22-1/" class="homepage-links-grid__link">
                            <button class="homepage-links-grid__button outlined size_small"><span class="sp">LEGGI TUTTO &gt;</span></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="homepage-links-grid__item">
                <div class="homepage-links-grid__iconbox">
                    <a href="https://www.apsp-cesarebenedetti.it/tariffe-e-servizi/32-18/" class="homepage-links-grid__link" target="_self">
                        <div class="homepage-links-grid__icon">
                            <i class="fa fa-calculator"></i>
                        </div>
                        <h4 class="homepage-links-grid__title">Tariffe servizi</h4>
                    </a>
                    <div class="homepage-links-grid__text">
                        <p>In questa sezione potrai consultare un elenco delle tariffe suddivise per i servizi offerti dell'APSP Cesare Benedetti;</p>
                        <div class="g-hr type_invisible size_small"></div>
                        <a href="https://www.apsp-cesarebenedetti.it/tariffe-e-servizi/32-18/" target="_self">
                            <button class="homepage-links-grid__button outlined size_small"><span class="sp">LEGGI TUTTO &gt;</span></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="homepage-links-grid__item">
                <div class="homepage-links-grid__iconbox">
                    <a href="https://www.apsp-cesarebenedetti.it/qualita-/32-8/" class="homepage-links-grid__link" target="_self">
                        <div class="homepage-links-grid__icon">
                            <i class="fa fa-thumbs-o-up"></i>
                        </div>
                        <h4 class="homepage-links-grid__title">Qualità</h4>
                    </a>
                    <div class="homepage-links-grid__text">
                        <p>La nostra Casa abbraccia una Politica per la Qualità tesa a perseguire uno standard elevato dei servizi forniti e al miglioramento continui degli stessi;</p>
                        <div class="g-hr type_invisible size_small"></div>
                        <a href="https://www.apsp-cesarebenedetti.it/qualita-/32-8/" target="_self">
                            <button class="homepage-links-grid__button outlined size_small"><span class="sp">LEGGI TUTTO &gt;</span></button>
                        </a>
                    </div>
                </div>
            </div>
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
