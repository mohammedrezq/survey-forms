<?php
/**
 * 
 * @package survey-kit
 */

namespace Includes;

final class Init {
    /**
     * Store all classes inside an array
    * @return array Full list of classes
	 */
	public static function get_services() {
		return array(
			Pages\Dashboard::class,
			Base\Enqueue::class,
		);
	}


    /**
	 * Loop through the classes, initialize them, and call the register() method if it exists.
	 *
	 * @return void
	 */
	public static function register_services() {
		foreach ( self::get_services() as $class ) {
			// code...
			$service = self::instantiate( $class );
			if ( method_exists( $service, 'register' ) ) {
				$service->register();
			}
		}
	}

    	/**
	 * Initialize the class
	 *
	 * @param class $class class from the services araray
	 * @return class instance new instance of the class
	 */
	private static function instantiate( $class ) {
		$service = new $class();

		return $service;
	}
}