<?php


class Parcel {

	protected $weight;
	protected $destinationAddress;
	protected $destionationCountry;

	public function setWeight($weight) {
		echo "weight set to: " . $weight . "\n";
		$this->weight = $weight;
		return $this;
	}
    public function setCountry($country) {
		echo "destionation country is: " .$country . "\n";
		$this->destinationCountry = $country;
		return $this;
	}
}






