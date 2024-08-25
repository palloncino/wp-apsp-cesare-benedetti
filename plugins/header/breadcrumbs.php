<?php
// Breadcrumbs function
function cesare_benedetti_breadcrumbs() {
    if (!is_front_page()) {
        echo '<nav class="breadcrumb">';
        echo '<a href="' . home_url() . '">Home</a>';
        if (is_category() || is_single()) {
            echo ' &raquo; ';
            the_category(' &bull; ');
            if (is_single()) {
                echo ' &raquo; ';
                the_title();
            }
        } elseif (is_page()) {
            echo ' &raquo; ';
            echo the_title();
        } elseif (is_search()) {
            echo ' &raquo; Search Results for... ';
            echo '"<em>';
            echo the_search_query();
            echo '</em>"';
        }
        echo '</nav>';
    }
}
