<?php
/*
Plugin Name: Style Box Plugin with Short Codes
Plugin URI: http://icustomizethesis.com/demo-style-boxes-plugin-with-short-code/
Description: With this plugin you can create stylized alert, notes, tips, download boxes in your post using easy to remember short codes.
Version: 1.4
Author: Puneet Sahalot
Author URI: http://icustomizethesis.com/
*/

function style_box(){
    $style_box = get_option('style_box');
    if($style_box=='1'){
        if ( !defined('WP_CONTENT_URL') ) define( 'WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
        $plugin_url = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__));
        echo '<link rel="stylesheet" href="'.$plugin_url.'/style-box.css"'.' type="text/css" media="screen" />';
    }
}

function note_shortcode( $atts, $content = null ) {
   return '<span class="note">' . $content . '</span>';
}
add_shortcode( 'note', 'note_shortcode' );

function alert_shortcode( $atts, $content = null ) {
   return '<span class="alert">' . $content . '</span>';
}
add_shortcode( 'alert', 'alert_shortcode' );

function tip_shortcode( $atts, $content = null ) {
   return '<span class="tip">' . $content . '</span>';
}
add_shortcode( 'tip', 'tip_shortcode' );

function info_shortcode( $atts, $content = null ) {
   return '<span class="info">' . $content . '</span>';
}
add_shortcode( 'info', 'info_shortcode' );

function down_shortcode( $atts, $content = null ) {
   return '<span class="download">' . $content . '</span>';
}
add_shortcode( 'down', 'down_shortcode' );

function talk_shortcode( $atts, $content = null ) {
   return '<span class="talk">' . $content . '</span>';
}
add_shortcode( 'talk', 'talk_shortcode' );

function finder_shortcode( $atts, $content = null ) {
   return '<span class="finder">' . $content . '</span>';
}
add_shortcode( 'finder', 'finder_shortcode' );

function twitter_shortcode( $atts, $content = null ) {
   return '<span class="twitter">' . $content . '</span>';
}
add_shortcode( 'twitter', 'twitter_shortcode' );

function tool_shortcode( $atts, $content = null ) {
   return '<span class="tool">' . $content . '</span>';
}
add_shortcode( 'tool', 'tool_shortcode' );

function linux_shortcode( $atts, $content = null ) {
   return '<span class="linux">' . $content . '</span>';
}
add_shortcode( 'linux', 'linux_shortcode' );

function windows_shortcode( $atts, $content = null ) {
   return '<span class="windows">' . $content . '</span>';
}
add_shortcode( 'windows', 'windows_shortcode' );

function help_shortcode( $atts, $content = null ) {
   return '<span class="help">' . $content . '</span>';
}
add_shortcode( 'help', 'help_shortcode' );

function activate_style_box(){
        add_option('style_box','1','Activate the Plugin');
}

function deactivate_style_box(){
    delete_option('style_box');
}

add_action('wp_head', 'style_box');

register_activation_hook(__FILE__,'activate_style_box');
register_deactivation_hook(__FILE__,'deactivate_style_box');

?>