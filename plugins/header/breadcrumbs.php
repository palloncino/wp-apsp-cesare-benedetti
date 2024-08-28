<?php
// Breadcrumbs function
function cesare_benedetti_breadcrumbs() {
    if (!is_front_page()) {
        echo '<nav class="breadcrumb">';
        echo '<a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'your-theme-textdomain') . '</a>';
        
        if (is_category() || is_single()) {
            echo ' &raquo; ';
            the_category(' &bull; ');
            if (is_single()) {
                echo ' &raquo; ';
                the_title();
            }
        } elseif (is_page()) {
            $ancestors = get_post_ancestors(get_queried_object_id());
            $ancestors = array_reverse($ancestors);
            
            foreach ($ancestors as $ancestor) {
                echo ' &raquo; ';
                echo '<a href="' . esc_url(get_permalink($ancestor)) . '">' . esc_html(get_the_title($ancestor)) . '</a>';
            }
            
            echo ' &raquo; ';
            echo esc_html(get_the_title());
        } elseif (is_search()) {
            echo ' &raquo; Search Results for... ';
            echo '"<em>';
            echo the_search_query();
            echo '</em>"';
        }
        
        echo '</nav>';
    }
}
