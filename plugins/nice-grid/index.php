<?php
/*
Plugin Name: Nice Grid Plugin
Description: Generates a customizable grid of items with background images, text, colors, and links. 
Usage: [nice_grid images="URL1,URL2,..." texts="Text1,Text2,..." colors="Color1,Color2,..." links="Link1,Link2,..."]
Version: 1.2
Author: Your Name
*/

function nice_grid_enqueue_styles() {
    // Add custom CSS for the grid layout
    wp_enqueue_style('nice-grid-css', plugins_url('nice-grid.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'nice_grid_enqueue_styles');

// Function to handle the grid generation
function nice_grid_shortcode($atts) {
    $atts = shortcode_atts(array(
        'images' => '',  // Comma-separated list of image URLs
        'texts' => '',   // Comma-separated list of corresponding texts
        'colors' => '',  // Optional comma-separated list of colors
        'links' => ''    // Optional comma-separated list of links
    ), $atts, 'nice_grid');

    // Split the strings into arrays
    $images = explode(',', $atts['images']);
    $texts = explode(',', $atts['texts']);
    $colors = explode(',', $atts['colors']);
    $links = explode(',', $atts['links']);

    // Ensure the images, texts, and links arrays have the same length
    $item_count = min(count($images), count($texts), count($links));

    // Default color is grey if not specified
    $default_color = 'grey';

    $output = '<div class="nice-grid">';

    for ($i = 0; $i < $item_count; $i++) {
        $image_url = esc_url(trim($images[$i]));
        $text = esc_html(trim($texts[$i]));
        $color = isset($colors[$i]) ? esc_html(trim($colors[$i])) : $default_color;
        $link = esc_url(trim($links[$i]));

        $output .= '<a href="' . $link . '" class="grid-item" style="background-image: url(' . $image_url . ');">
                        <div class="grid-text" style="background-color:' . $color . ';">
                            <strong>' . $text . '</strong>
                        </div>
                    </a>';
    }

    $output .= '</div>';
    return $output;
}
add_shortcode('nice_grid', 'nice_grid_shortcode');
