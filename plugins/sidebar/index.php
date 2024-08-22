<?php
/*
Plugin Name: Sidebar Menu - APSP Cesare Benedetti 
Description: Provides clickable sidebar menu items through a shortcode, shortcode: [sidebar_menu].
Version: 1.0
Author: Antonio Guiotto
*/

// Function to enqueue scripts and styles
function sidebar_menu_scripts()
{
    // Optionally, enqueue a CSS file if you have additional styles
    wp_enqueue_style('custom-sidebar-menu', plugins_url('/custom-sidebar-menu.css', __FILE__));
    // Uncomment and modify if you need to enqueue JavaScript
    // wp_enqueue_script('sidebar-menu-js', plugins_url('/sidebar-menu.js', __FILE__), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'sidebar_menu_scripts');

function sidebar_menu_shortcode()
{
    // Output the specified HTML
    return '<div>
                <div class="sidebar-menu-outer albo-online albo-pretorio" onclick="window.location.href=\'/albo-online\'">
                    <div class="sidebar-menu-inner">
                        <div class="sidebar-menu-icon">
                            <div class="animate-svg"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/MANINA.svg" alt="Cursor Icon"></div>
                        </div>
                        <div class="sidebar-menu-text">
                            <div class="sidebar-menu-text-container">
                                <div class="sidebar-menu-text-first">Albo</div>
                                <div class="sidebar-menu-text-second">Pretorio</div>
                            </div>
                            <div class="sidebar-menu-text-icon-container">
                                <div class="sidebar-menu-text-icon-content"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/FOLDER.svg" alt="Folder Icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu-outer amministrazione-trasparente" onclick="window.location.href=\'/amministrazione-trasparente\'">
                    <div class="sidebar-menu-inner">
                        <div class="sidebar-menu-icon">
                            <div class="animate-svg"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/MANINA.svg" alt="Cursor Icon"></div>
                        </div>
                        <div class="sidebar-menu-text">
                            <div class="sidebar-menu-text-container">
                                <div class="sidebar-menu-text-first">Amministrazione</div>
                                <div class="sidebar-menu-text-second">Trasparente</div>
                            </div>
                            <div class="sidebar-menu-text-icon-container">
                                <div class="sidebar-menu-text-icon-content"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/BANK.svg" alt="Bank Icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu-outer carta-servizi" onclick="window.open(\'https://www.apsp-roncegno.it/document/pdf/carta-dei-servizi-roncegno-2019/p29e166d7503aaf5194827ab81089f23/\', \'_blank\')">
                    <div class="sidebar-menu-inner">
                        <div class="sidebar-menu-icon">
                            <div class="animate-svg"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/MANINA.svg" alt="Cursor Icon"></div>
                        </div>
                        <div class="sidebar-menu-text">
                            <div class="sidebar-menu-text-container">
                                <div class="sidebar-menu-text-first">Carta</div>
                                <div class="sidebar-menu-text-second">dei Servizi</div>
                            </div>
                            <div class="sidebar-menu-text-icon-container">
                                <div class="sidebar-menu-text-icon-content"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/BOOK.svg" alt="Book Icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu-outer anticorruzione-trasparenza" onclick="window.location.href=\'/anticorruzione-e-trasparenza\'">
                    <div class="sidebar-menu-inner">
                        <div class="sidebar-menu-icon">
                            <div class="animate-svg"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/MANINA.svg" alt="Cursor Icon"></div>
                        </div>
                        <div class="sidebar-menu-text">
                            <div class="sidebar-menu-text-container">
                                <div class="sidebar-menu-text-first">Anticorruzione</div>
                                <div class="sidebar-menu-text-second">e trasparenza</div>
                            </div>
                            <div class="sidebar-menu-text-icon-container">
                                <div class="sidebar-menu-text-icon-content"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/BAN.svg" alt="Ban Icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
}

add_shortcode('cesare_benedetti_sidebar', 'sidebar_menu_shortcode');
