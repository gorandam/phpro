<?php

class Courier {

 	public $name;
	public $home_country;
	
	public function __construct($name) {
		$this->name = $name;
		return true;
	}
	
	public function ship ($parcel) {
	 echo "Parcel ship succesfuly!!!";
	return true;
	}
	
	function setName($name) {
	$this->name = $name;
	}
}

