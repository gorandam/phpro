<?php

class User{

	// constructor (not implemented)
 	public function __construct(){}

	//set undeclared property
	public function __set($property, $value){
		$this->$property = $value;
	}
	//get defined propterty
	public function __get($property) {
		if (isset($this->$property)) {
			return $this->$property;
		}		
	}
	
}