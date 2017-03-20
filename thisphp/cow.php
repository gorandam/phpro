<?php

class Cow extends Animal {
	public function getName() {
		return 'Cow: '.parent::getName();
	}
}