<?php


function __autoload($classname) {
include strtolower($classname) . '.php';
}

/*
$mono = new Courier();
$dono =  new Courier();

var_dump($mono);




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





$myCourier = new Courier();
$parcel = new Parcel();
var_dump($myCourier);


// add the address if we have it;
//$parcel->destinationAddress = "Vojvode Stepe Street";
var_dump($parcel->destinationAddress);
$parcel->weight = rand(1, 7);
var_dump($parcel->weight);



try {
	$myCourier->ship($parcel);
	echo "parcel shipped";
} catch(HeavyParcelException $e) {
	echo "Parcel weight error: " . $e->getMessage();
} catch (Exception $e) {
	echo "Something went wrong. " . $e->getMessage();
	exit;   // exit so we don't try to proceed any further
}









































