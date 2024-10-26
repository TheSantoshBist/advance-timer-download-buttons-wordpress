<?php
/*
Plugin Name: Download Timer Buttons
Description: Adds timed download buttons to your posts with customizable download links.
Version: 1.3
Author: Santosh Bist
Author URI: https://sbist.com.np
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Register CSS and JS files conditionally
function dtimerbtn_enqueue_scripts() {
    global $post;

    // Check if any of the shortcodes are present on the current page
    if (has_shortcode($post->post_content, 'bottom_button') || 
        has_shortcode($post->post_content, 'top_button') || 
        has_shortcode($post->post_content, 'middle_button')) {
        
        // Enqueue CSS
        wp_enqueue_style('dtimerbtn-style', plugin_dir_url(__FILE__) . 'css/style.css', array(), '1.0');
        
        // Enqueue JS
        wp_enqueue_script('dtimerbtn-script', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery'), '1.0', true);

        // Add defer attribute to the script
        add_filter('script_loader_tag', 'dtimerbtn_add_defer_attribute', 10, 2);
    }
}
add_action('wp_enqueue_scripts', 'dtimerbtn_enqueue_scripts');

// Add defer attribute to the script tag
function dtimerbtn_add_defer_attribute($tag, $handle) {
    if ('dtimerbtn-script' === $handle) {
        return str_replace(' src', ' defer="defer" src', $tag);
    }
    return $tag;
}

// Shortcode function for Bottom Button
function dtimerbtn_render_bottom_button($atts) {
    $atts = shortcode_atts(array('link' => '#'), $atts);
    ob_start(); ?>
    <div style="text-align:center" id="center-container" class="first-dl">
        <button id="course-btn" onclick="startCourseTimer()">Click to get File</button>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('bottom_button', 'dtimerbtn_render_bottom_button');

// Shortcode function for Top Button
function dtimerbtn_render_top_button($atts) {
    $atts = shortcode_atts(array(
        'link' => '#'
    ), $atts);
    ob_start();
    ?>
    <div style="text-align:center" id="center-container" class="grlink">
        <button id="get-link-btn" class="hide" onclick="startDlTimer()">Get File Link</button>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('top_button', 'dtimerbtn_render_top_button');

// Shortcode function for Middle Button (Download Link)
function dtimerbtn_render_middle_button($atts) {
    $atts = shortcode_atts(array(
        'link' => '#'
    ), $atts);
    ob_start();
    ?>
    <div style="text-align:center" id="center-container" class="main-dl">
        <a id="course-link" href="<?php echo esc_url($atts['link']); ?>" class="hide">Download Now</a>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('middle_button', 'dtimerbtn_render_middle_button');

