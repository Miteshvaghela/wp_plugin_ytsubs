<?php
/**
 * Plugin Name: Youtube subscriber button
 * Plugin URI: https://www.aizo9.com
 * Author: Mitesh vaghela
 * Author URI: https://www.aizo9.com
 * Description: Youtube subscriber button. 
 * Version: 1.0.0
*/

if(!defined('ABSPATH')){
    exit('Unauthorized access');
}


require_once(plugin_dir_path(__FILE__).'/includes/yt-scripts.php');

require_once(plugin_dir_path(__FILE__).'/includes/yt-include.class.php');

function register_ytsubs_widget(){
    register_widget('YT_Subs_Widget');
}

add_action('widgets_init', 'register_ytsubs_widget');

?>