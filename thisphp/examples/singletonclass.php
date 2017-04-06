<?php

class SingletonClass {

	private static $instance; // This property holds and returns the instance of the singleton object
	private function __construct() {}
	public function __clone() {
		trigger_error('Clone is not allowed.', E_USER_ERROR);
	}
	public static function init() {
		if (!isset(self::$instance)) {
			$c = __CLASS__;
			self::$instance = new $c;
		}
		return self::$instance;
	}
	// other public, dynamic methods for singleton
}

	