<?php
/**
 * Plugin Name: Therosessom Plugin
 * Description: Custom plugin for Therosessom WordPress theme with core functionality.
 * Version: 1.0.0
 * Author: Therosessom
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Define plugin directory
define('THEROSESSOM_PLUGIN_DIR', dirname(__FILE__));

/**
 * General housekeeping and plugin activation tasks
 */
include_once(THEROSESSOM_PLUGIN_DIR . '/lib/functions/general.php');
register_activation_hook(__FILE__, array('Therosessom_General', 'plugin_activation'));
register_deactivation_hook(__FILE__, array('Therosessom_General', 'plugin_deactivation'));

/**
 * Post types
 */
include_once(THEROSESSOM_PLUGIN_DIR . '/lib/functions/post-types.php');

/**
 * Texonomies
 */
include_once(THEROSESSOM_PLUGIN_DIR . '/lib/functions/taxonomies.php');

/**
 * Short codes
 */
// include_once(THEROSESSOM_PLUGIN_DIR . '/lib/functions/shortcodes.php');

/**
 * Widgets
 */
// include_once(THEROSESSOM_PLUGIN_DIR . '/lib/functions/widgets.php');

/**
 * Admin Page
 */
// if (is_admin()) {
//     include_once(THEROSESSOM_PLUGIN_DIR . '/lib/admin/admin-settings.php');
// }