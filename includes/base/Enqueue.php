<?php
/**
 * @package AlecadddPlugin
 */

namespace Includes\Base;

use \Includes\Base\BaseController;

class Enqueue extends BaseController {


	public function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
	}

	public function enqueue() {
		// enqueue all our scripts.

		// wp_enqueue_script( 'media-upload' );
		// wp_enqueue_media();

		wp_enqueue_style( 'mypluginstyle', $this->plugin_url . 'assets/dist/main.css', null, time(), 'all');
		wp_enqueue_script( 'mypluginscript', $this->plugin_url . 'assets/dist/main.bundle.js' );

	}
}
