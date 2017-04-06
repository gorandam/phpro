<?php


function __autoload($classname) {
include strtolower($classname) . '.php';
}

/*
$mono = new Courier('Monospace Delivery');
$dono =  new Courier('Douspace Delivery');

var_dump($mono);
var_dump($dono);



$courier = new PigeonPost('Local Avian Delivry LTD');


if ($courier instanceOf Courier) {
echo $courier->name . " is a Courier\n";
}

if($courier instanceOf PigeonPost) {
	echo $courier->name . " is a PigeonPost\n";
}



$box1 = new Parcel();
$box1->destinationCountry = 'Denmark';

$box2 = $box1;
$box2->destinationCountry = 'Brazil';

echo 'Parcels need to ship to: '
	. $box1->destinationCountry . ' and '
	. $box2->destinationCountry;


if ($box1 == $box2) {
	echo 'equivalent \n';
}

if ($box1 === $box2) {
	echo 'exact same object \n';
}



$myparcel = new Parcel();
$myparcel->setWeight(5)->setCountry('Peru');



$mycourier = new Courier('Avian Services', 'Australia');
echo $mycourier;
// var_dump($mycourier);



$courier = new Courier();
$courier->ship(new Parcel());
$courier->ship(new Parcel());
$courier->ship(new Parcel());
echo count($courier);
*/

try{
	$pdo = new PDO('mysql:host=nonsense');
	echo 'Conected to the database';
} catch (PDOException $e) {
	echo 'Oops!' . $e->getMessage();
	exit();
	
}



