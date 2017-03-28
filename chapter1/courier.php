<?php

class Courier {

 	public $name;
	public $home_country;
	
	public function __construct($name, $home_country) {
		$this->name = $name;
		$this->home_country = $home_country;
		return true;
	}
	
	/*
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
	*/
	public function __toString() {
		return $this->name . '(' . $this->home_country . ')';
		
	}
	
}




