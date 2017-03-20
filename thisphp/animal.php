<?php

class Animal {
	protected $name;
	public function __construct($name) {
        $this->name = $name;
	}
	public function getName() {
	return $this->name;
	}
	public function speak() {
		return $this->getName().' is speakig <br />';
	}
}




