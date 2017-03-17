<?php
class Person {
	public $name;
	public $gender;
	public $haircolor;
	public $eyecolor;
	public function setName($name) {
		$this->name = $name;
	}
	public function getName() {	
		return $this->name;
	}
	
	public function setGender($gender) {
		$this->gender = $gender;
	}
	
	public function getGender() {
		return $this->gender;
	}
	
	public function setHairColor($haircolor) {
		$this->haircolor = $haircolor;
	}
	
	public function getHairColor() {
		return $this->haircolor;
	}
	
	public function setEyeColor($eyecolor) {
	$this->eyecolor = $eyecolor;
	}
	
	public function getEyeColor() {
	return $this->eyecolor;
	}
	
	public function __construct() {
	}
	
	public function showData() {
		echo "This is Person's showData()\n";
	}
	
	
}