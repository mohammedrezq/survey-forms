<?php
/**
 * @package AlecadddPlugin
 */

namespace Includes\Base;

use \Includes\Base\BaseController;

class Enqueue extends BaseController {


	public function register() {
		//Admin Pages (Backend)
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );

		// Front Pages (Frontend)
		add_action( 'wp_enqueue_scripts', array( $this, 'frontend_enqueue' ) );
	}

	public function enqueue() {
		// enqueue all our scripts.

		// wp_enqueue_script( 'media-upload' );
		// wp_enqueue_media();
		
		// Add Dynamic Version while developing from : https://developer.wordpress.org/reference/functions/wp_enqueue_script/ 
		// $my_js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'assets/dist/main.bundle.js' ));
		// $my_css_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'assets/dist/main.css' ));


		wp_enqueue_style( 'mypluginstyle', $this->plugin_url . 'assets/dist/main.css', null, time(), 'all');
		wp_enqueue_script( 'mypluginscript', $this->plugin_url . 'assets/dist/main.js', array('jquery','wp-blocks', 'wp-element', 'wp-components', 'wp-i18n'), time(), true );

	}
	public function frontend_enqueue() {
	
		wp_enqueue_style( 'mypluginstyle', $this->plugin_url . 'assets/dist/main.css', null, time(), 'all');
		wp_enqueue_script( 'mypluginscript', $this->plugin_url . 'assets/dist/main.js', array('jquery','wp-blocks', 'wp-element', 'wp-components', 'wp-i18n'), time(), true );
	
	}
}
