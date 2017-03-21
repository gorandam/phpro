<?php


function __autoload($classname) {
include strtolower($classname) . '.php';
}

/*
$mono = new Courier('Monospace Delivery');
$dono =  new Courier('Douspace Delivery');

var_dump($mono);
var_dump($dono);

*/

$courier = new PigeonPost('Local Avian Delivry LTD');


if ($courier instanceOf Courier) {
echo $courier->name . " is a Courier\n";
}

if($courier instanceOf PigeonPost) {
	echo $courier->name . " is a PigeonPost\n";
}

