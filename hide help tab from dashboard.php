<?php

/* Start Adding Functions Below this Line *//**
 * Plugin Name:       hide help tab from dashboard
 * Description:       this plugin will hide help tab from wordpress dashboard.
 * Version:           1.0.0
 * Requires at least: 3.0.1
 * Requires PHP:      7.2
 * Author:            amin agha kazemi
 * Author URI:        https://aminakazemi.info/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       hide-help-tab-from-dashboard
 * Domain Path:       /languages
 */
 

add_filter('contextual_help_list','contextual_help_list_remove');
function contextual_help_list_remove(){
    global $current_screen;
    $current_screen->remove_help_tabs();
}
  
/* Stop Adding Functions Below this Line */
?>