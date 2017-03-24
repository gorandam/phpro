<?php

class People {
	public $person1 = 'Mike';
	public $person2 = 'Shelly';
	public $person3 = 'Jeff';
	
	protected $person4 = 'john';
	private $person5 = 'Jen';
	
/*	
	function iterateObject() {
		foreach($this as $key => $value) {
			print "<br>$key => $value";
		}
	}
*/
}

$people = new People();

foreach($people as $key => $value) { // this is iteration from outsid of class and here we can't access  protected and private properties

	  print "$key => $value\n";
	

}

//$people->iterateObject();

