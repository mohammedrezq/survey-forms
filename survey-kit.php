<?php
/**
 * Plugin Name:       Survey Kit
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Mohammed Rezq
 * Author URI:        https://github.com/mohammedrezq
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       survey-kit
 * Domain Path:       /languages
 */

 
/*
Mo Forms is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Mo Forms is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Mo Forms. If not, see {URI to Plugin License}.
*/

// If this file called directly, abort !!
if(!defined('ABSPATH')) {
    exit();
}

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 *
 * @return void
 */
function activate_survey_plugin() {
	Includes\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_survey_plugin' );

/**
 * The code that runs during plugin deactivation
 */
function deactivate_survey_plugin() {
	Includes\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_survey_plugin' );

if ( class_exists( 'Includes\\Init' ) ) {
	Includes\Init::register_services();
}
