<?php
/*
Plugin Name: Custom Footer Plugin
Description: Automatically adds a custom footer to every page for the APSP Cesare Benedetti website.
Version: 1.2
Author: Antonio Guiotto
*/

// Function to enqueue the CSS for the footer
function custom_footer_plugin_enqueue_styles() {
    wp_enqueue_style('custom-footer-plugin-css', plugins_url('footer-styles.css', __FILE__));
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'custom_footer_plugin_enqueue_styles');

// Function to render the footer
function custom_footer_plugin_render() {
    ?>
    <div class="footer-container">
        <div class="footer-inner">
            <div class="footer-cols">
                <div class="footer-col">
                    <div class="footer-widget">
                        <h4><a href="https://apspcesarebenedetti.chebellagiornata.it/le-novita/">NOVITÀ</a></h4>
                        <div class="footer-bloglist">
                            <div class="footer-bloglist-items">
                                <div class="footer-bloglist-item">
                                    <a href="#">Avviso di pubblica selezione per la figura di Assistente Amministrativo Categoria C – livello...</a>
                                    <span class="footer-bloglist-date">21 Settembre, 2024</span>
                                </div>
                                <div class="footer-bloglist-item">
                                    <a href="#">8° corso per volontari in cure palliative e serate per la comunità</a>
                                    <span class="footer-bloglist-date">18 Luglio, 2024</span>
                                </div>
                                <div class="footer-bloglist-item">
                                    <a href="#">Pubblicazione bando concorso per n. 6 posti di "Infermiere"</a>
                                    <span class="footer-bloglist-date">30 Luglio, 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-col">
                    <div class="footer-widget">
                        <h4>CHI SIAMO</h4>
                        <p>L'Azienda Pubblica di Servizi alla Persona Cesare Benedetti è un Ente di diritto pubblico senza finalità di lucro e convenzionato con l'Azienda Provinciale per i Servizi Sanitari di Trento.</p>
                        <p>Volge a garantire una qualità di vita il più possibile elevata al cliente anziano, autonomo o meno, considerandone i peculiari bisogni psichici, fisici e sociali, attraverso un'assistenza qualificata e continua, in stretta collaborazione con la famiglia.</p>
                    </div>
                </div>
                <div class="footer-col">
                    <div class="footer-widget">
                        <h4>CONTATTI</h4>
                        <div class="footer-contacts">
                            <div class="footer-contacts-list">
                                <div class="footer-contacts-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span class="footer-contacts-item-value">Via Del Garda 62, 38065 Mori, Trento (TN)</span>
                                </div>
                                <div class="footer-contacts-item">
                                    <i class="fas fa-phone"></i>
                                    <span class="footer-contacts-item-value">+39 0464 075001</span>
                                </div>
                                <div class="footer-contacts-item">
                                    <i class="fas fa-fax"></i>
                                    <span class="footer-contacts-item-value">+39 0464 071219</span>
                                </div>
                                <div class="footer-contacts-item">
                                    <i class="fas fa-envelope"></i>
                                    <span class="footer-contacts-item-value"><a href="mailto:segreteria@apsp-cesarebenedetti.it">segreteria@apsp-cesarebenedetti.it</a></span>
                                </div>
                                <div class="footer-contacts-item">
                                    <i class="fas fa-envelope-open"></i>
                                    <span class="footer-contacts-item-value"><a href="mailto:amministrazione@pec.apsp-cesarebenedetti.it">amministrazione@pec.apsp-cesarebenedetti.it</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-image-row">
                <div class="footer-image-container">
                    <a href="https://www.trentinofamiglia.it/Certificazioni-e-reti/Family-Audit" target="_blank">
                        <img class="footer-logo-img" style="max-height: 90px;" src="http://apspcesarebenedetti.chebellagiornata.it/wp-content/uploads/2024/09/asd.png" alt="Family Audit">
                    </a>
                </div>
                <div class="footer-image-container">
                    <a href="https://mypay.provincia.tn.it/pa/home.html" target="_blank">
                        <img class="footer-logo-img" style="max-height: 50px; margin-top: 40px;" src="http://apspcesarebenedetti.chebellagiornata.it/wp-content/uploads/2024/09/pagopa.png" alt="Pago PA - MyPay">
                    </a>
                </div>
                <div class="footer-image-container">
                    <a href="https://www.trentinofamiglia.it/News-eventi/News/Distretto-Family-Audit-Alta-Valsugana-welfare-aziendale-in-rete" target="_blank">
                        <img class="footer-logo-img" src="http://apspcesarebenedetti.chebellagiornata.it/wp-content/uploads/2024/09/distretto-family-1.png" alt="Distretto Family">
                    </a>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-inner">
                    <div class="footer-copyright">
                        © 2024 A.P.S.P. Cesare Benedetti | Partita IVA: 00323360222 | <a href="https://form.agid.gov.it/view/7707f7d2-41ac-4b89-b5de-58e8b3cd059d">Accessibilità Agid</a>
                    </div>
                    <nav class="footer-nav">
                        <ul class="footer-nav-list">
                            <li class="footer-nav-item"><a class="footer-nav-link" href="#">Home</a></li>
                            <li class="footer-nav-item"><a class="footer-nav-link" href="https://apspcesarebenedetti.chebellagiornata.it/chi-siamo/">Chi siamo</a></li>
                            <li class="footer-nav-item"><a class="footer-nav-link" href="https://apspcesarebenedetti.chebellagiornata.it/dove-siamo/">Dove Siamo</a></li>
                            <li class="footer-nav-item"><a class="footer-nav-link" href="https://apspcesarebenedetti.chebellagiornata.it/servizi/">Servizi</a></li>
                            <li class="footer-nav-item"><a class="footer-nav-link" href="https://apspcesarebenedetti.chebellagiornata.it/news/">News</a></li>
                            <li class="footer-nav-item"><a class="footer-nav-link" href="https://apspcesarebenedetti.chebellagiornata.it/note-legali/">Note legali</a></li>
                            <li class="footer-nav-item"><a class="footer-nav-link" href="https://apspcesarebenedetti.chebellagiornata.it/privacy/">Privacy</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php
}
add_action('wp_footer', 'custom_footer_plugin_render', 20);
?>
