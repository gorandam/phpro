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
	public function calculateShipping($parcel) {
		// look up the rate for the destination, we'll invent one
		$rate = 1.78;
		// calculate the cost
			$cost = $rate * $parcel->weight;
		return $cost;
	}
	
}

