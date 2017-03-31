<?php

/*
class Employee extends Person {
	
	public function showData() {
	parent::showData();
	echo "This is Emloyee's showData()\n";
	}
}
*/


class Employee {
	
	private $fname;
	private $date_of_birth;
	public function setFirstName($fname) {
		$this->fname = $fname;
	}
	public function getFirstName() {
		return $this->fname;
	}
	public function setBirthDate($dob) {
		$this->date_of_birth = $dob;
	}
	public function getBirthDate() {
		return $this->date_of_birth;
	}
	public function __sleep() {
		return array("fname"); //because of this, only name is serialized;
	}
	
	public function __wakeup() {
		if ($this->fname == "Marsha") {
			$this->date_of_birth = "09-02-1983";
		}
	}
}




	

