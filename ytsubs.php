<?php
/**
 * Plugin Name: Youtube subscriber button in wordpress
 * Plugin URI: https://www.funtechstic.com/wordpress/plugins
 * Author: Mitesh vaghela
 * Author URI: https://www.funtechstic.com
 * Description: Youtube subscriber button. 
 * Date : 23-5-2022
 * Version: 1.0.2
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