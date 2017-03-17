<?php

function __autoload($classname) {
include strtolower($classname) . '.php';
}

$mindi = new Person();
$billy = new Person();


$mindi->setName('Mindi');
$mindi->setGender('female');
$mindi->setHairColor('light brown');
$mindi->setEyeColor('blue');

$billy->setName('Billy');
$billy->setGender('male');
$billy->setHairColor('light brown');
$billy->setEyeColor('black');


var_dump($mindi);
var_dump($billy);

$c = new Employee();
$c->showData();
