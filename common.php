<?php
namespace mimosafa\WP;

class Common {

	private static $instance;

	public static function init() {
		self::$instance ?: self::$instance = new self();
	}

	private function __construct() {
		require_once __DIR__ . '/classloader.php';
	}

	/**
	 * Common methods.
	 *
	 * - Labelize.
	 *
	 * @access public
	 *
	 * @param  string $str
	 * @return string
	 */
	public static function labelize( $str ) {
		return ucwords( str_replace( [ '-', '_' ], ' ', $str ) );
	}

}
