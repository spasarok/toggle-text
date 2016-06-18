<?php
/*
Plugin Name: Toggle Text
*/

if(! wp_script_is('jquery', $list = 'enqueued'))
    wp_enqueue_script('jquery');

wp_enqueue_script('toggle-text', plugins_url('toggle-text.js', __FILE__ ));
wp_enqueue_style('toggle-text', plugins_url('toggle-text.css', __FILE__ ));

function toggle_text_handler($atts, $content = null){
    $open = '<div class="toggle-text">';
    $heading = '<div class="toggle-text-heading">';
    $body = '<div class="toggle-text-body" style="display: none;">';
    $close = '</div>';
    $down_icon = json_decode('"'.'\u25BC'.'"');
    $icon = '<span class="toggle-text-icon"> '.$down_icon.'</span>';

    return $open . $heading . $atts['heading'] . $icon . $close . $body . $content . $close . $close;
}
add_shortcode('toggle-text', 'toggle_text_handler');

function toggle_text($toggle_text, $toggle_content){
    $open = '<div class="toggle-text">';
    $heading = '<div class="toggle-text-heading">';
    $body = '<div class="toggle-text-body">';
    $close = '</div>';

    echo $open . $heading . $toggle_text . $close . $body . $toggle_content . $close . $close;
}
