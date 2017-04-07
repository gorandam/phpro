<?php

class HeavyParcelException extends Exception {}


class Courier {
    /*
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
	
	public function __toString() {
		return $this->name . '(' . $this->home_country . ')';
		
	}

		
 protected $count = 0;
 public function ship(Parcel $parcel) {
	$this->count++;
	// ship parcel
	return true;
 }
 public function count() {
	 return $this->count;
 }
 */
   
     public function ship(Parcel $parcel) {
        //check we have an address
         var_dump(empty($parcel->destinationAdderss));
         if (!empty($parcel->destinationAdderss)) { // see on php net, there is a problem on this function empty()!!!!! for that reason we put negation operator first
             var_dump($parcel->destinationAddress);
             throw new Exception('Address not Specified');
         }

         //check the weight
         if ($parcel->weight > 5) {
             throw new HeavyParcelException('Parcel exceedes courier limit');
         }

         // otherwise we're cool
         return true;
     }

    
}




