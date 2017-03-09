<?

class Courier {

 	public $name;
	public $home_country;
	
	public function __construcu($name) {
		$this->name = $name;
		return true;
	}
	
	public function ship ($parcel) {
	// sends the parcel to its destination
	return true;
	}
}

	