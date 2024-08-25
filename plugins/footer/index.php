<?php
/*
Plugin Name: Footer Plugin
Description: Generates a custom footer for the APSP Cesare Benedetti website.
Version: 1.0
Author: Your Name
*/

// Function to enqueue the CSS for the footer
function footer_plugin_enqueue_styles() {
    wp_enqueue_style('footer-plugin-css', plugins_url('footer-styles.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'footer_plugin_enqueue_styles');

// Function to render the footer
function footer_plugin_render() {
    ?>
    <div class="l-footer">
        <div class="l-footer-h">
            <div class="l-subfooter at_top">
                <div class="l-subfooter-h g-cols">
                    <div class="one-third">
                        <div class="widget">
                            <h4><a style="color: rgb(178, 149, 126);" href="https://www.apsp-cesarebenedetti.it/le-novita/52-0-1/">NOVITÀ</a></h4>
                            <div class="w-bloglist date_atbottom">
                                <div class="w-bloglist-list">
                                    <div class="w-bloglist-entry">
                                        <a href="https://www.apsp-cesarebenedetti.it/8-corso-per-volontari-in-cure-palliative-e-serate-per-la-comunit-/53-84/" class="w-bloglist-entry-link">8° corso per volontari in cure palliative e serate per la comunità</a>
                                        <span class="w-bloglist-entry-date">18 Luglio, 2024</span>
                                    </div>
                                    <div class="w-bloglist-entry">
                                        <a href="https://www.apsp-cesarebenedetti.it/concorso-pubblico-per-esami-per-la-copertura-di-n-6-sei-posti-vacanti-a-tempo-pieno-36h-sett-nella-figura-professionale-di-infermiere--cat-c-evoluto---prima-posizione-retributiva/53-87/" class="w-bloglist-entry-link">Pubblicazione bando concorso per n. 6 posti di “Infermiere” </a>
                                        <span class="w-bloglist-entry-date">30 Luglio, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-third">
                        <div class="widget">
                            <h4>CHI SIAMO</h4>
                            <p>L’Azienda Pubblica di Servizi alla Persona Cesare Benedetti è un Ente di diritto pubblico senza finalità di lucro e convenzionato con l’Azienda Provinciale per i Servizi Sanitari di Trento.</p>
                            <p>Volge a garantire una qualità di vita il più possibile elevata al cliente anziano, autonomo o meno, considerandone i peculiari bisogni psichici, fisici e sociali, attraverso un'assistenza qualificata e continua, in stretta collaborazione con la famiglia.</p>
                        </div>
                        <br>
                        <br>
                        <a href="https://www.trentinofamiglia.it/Certificazioni-e-reti/Family-Audit" target="_blank" style="text-decoration: none; color: rgb(233, 228, 219);">
                            <img class="w-logo-img" src="https://www.apsp-cesarebenedetti.it/skin/cesarebenedetti_riev/images/jpg/family_audit/" alt="" style="margin-top:30px; width: 60%; height:auto;">
                        </a>
                    </div>
                    <div class="one-third">
                        <div class="widget">
                            <h4>CONTATTI</h4>
                            <div class="w-contacts">
                                <div class="w-contacts-h">
                                    <div class="w-contacts-list">
                                        <div class="w-contacts-item">
                                            <i class="fa fa-map-marker"></i>
                                            <span class="w-contacts-item-value">Via Del Garda 62, 38065 Mori, Trento (TN)</span>
                                        </div>
                                        <div class="w-contacts-item">
                                            <i class="fa fa-phone"></i>
                                            <span class="w-contacts-item-value">+39 0464 075001</span>
                                        </div>
                                        <div class="w-contacts-item">
                                            <i class="fa fa-fax"></i>
                                            <span class="w-contacts-item-value">+39 0464 071219</span>
                                        </div>
                                        <div class="w-contacts-item">
                                            <i class="fa fa-envelope-o"></i>
                                            <span class="w-contacts-item-value"><a href="mailto:segreteria@apsp-cesarebenedetti.it">segreteria@apsp-cesarebenedetti.it</a></span>
                                        </div>
                                        <div class="w-contacts-item">
                                            <i class="fa fa-envelope"></i>
                                            <span class="w-contacts-item-value"><a href="mailto:amministrazione@pec.apsp-cesarebenedetti.it">amministrazione@pec.apsp-cesarebenedetti.it</a></span>
                                        </div>
                                        <center>
                                            <a href="https://mypay.provincia.tn.it/pa/home.html " target="_blank" style="text-decoration: none; color: rgb(233, 228, 219);">
                                                <img class="w-logo-img" src="https://www.apsp-cesarebenedetti.it/skin/cesarebenedetti_riev/images/png/logo_pagopa_mypay/" alt="Pago PA - MyPay" style="margin-top:30px; width: 60%; height:auto;">
                                            </a>
                                        </center>
                                        <center>
                                            <a href="https://www.trentinofamiglia.it/News-eventi/News/Distretto-Family-Audit-Alta-Valsugana-welfare-aziendale-in-rete" target="_blank" style="text-decoration: none; color: rgb(233, 228, 219);">
                                                <img class="w-logo-img" src="https://www.apsp-cesarebenedetti.it/skin/cesarebenedetti_riev/images/png/distretto_family/" alt="" style="margin-top:30px; width: 60%; height:auto;">
                                            </a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-subfooter at_bottom">
                <div class="l-subfooter-h_2 i-cf">
                    <div class="w-copyright">© 2015 A.P.S.P. Cesare Benedetti | Partita IVA: 00323360222 | <a href="https://form.agid.gov.it/view/7707f7d2-41ac-4b89-b5de-58e8b3cd059d">Accessibilità Agid</a></div>
                    <nav class="w-nav layout_hor touch_disabled">
                        <ul class="w-nav-list level_1">
                            <li class="w-nav-item level_1"><a class="w-nav-anchor level_1" href="#">Home</a></li>
                            <li class="w-nav-item level_1"><a class="w-nav-anchor level_1" href="https://www.apsp-cesarebenedetti.it/chi-siamo/32-1/">Chi siamo</a></li>
                            <li class="w-nav-item level_1"><a class="w-nav-anchor level_1" href="https://www.apsp-cesarebenedetti.it/dove-siamo/32-2/">Dove Siamo</a></li>
                            <li class="w-nav-item level_1"><a class="w-nav-anchor level_1" href="https://www.apsp-cesarebenedetti.it/servizi/32-3/">Servizi</a></li>
                            <li class="w-nav-item level_1"><a class="w-nav-anchor level_1" href="https://www.apsp-cesarebenedetti.it/news/52-0-1/">News</a></li>
                            <li class="w-nav-item level_1"><a class="w-nav-anchor level_1" href="https://www.apsp-cesarebenedetti.it/note-legali/32-23/">Note legali</a></li>
                            <li class="w-nav-item level_1"><a class="w-nav-anchor level_1" href="https://www.apsp-cesarebenedetti.it/privacy/32-118/">Privacy</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php
}

// Hook the footer render function into the wp_footer action
add_action('wp_footer', 'footer_plugin_render', 20);
