<?php

function __autoload($classname) {
include strtolower($classname) . '.php';
}

/*
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



$a = new Cow("Elsie Mae Mae");
echo $a->getName();


$a = new Cow('Elsie Mae Mae');
echo $a->speak();
$b = new Animal('something');
echo $b->speak();



function Name(Animal $a) {
	echo $a->getName();
}

$b = new Cow('Milka');
Name($b);



	// example of usage of 'User' class with property overloading



$user = new User();
$user->firstname = 'Jane';
$user->lastname = 'Doe';
$user->email = 'janedoe@mydomain.com';
$user->address = 'My address 1111';
// display user data 

echo 'First Name: ' . $user->firstname . ' <br>Last Name: ' . $user->lastname . '<BR> Email: ' . $user->email . '<BR>Address: ' . $user->address;




$e = new Employee();
$e->setFirstName("Marsha");
$e->setBirthDate("09-12-1983");
$data = serialize($e)."\n";
echo $data."\n";
var_dump(unserialize($data));

*/









$first = new CopyClass();
$first->name = "Number 1";
$second = clone $first;
echo "first = " .$first->name . "<br><br>";

$second->name = "Number 2";
echo "first = " . $first->name . "<br>";
echo "second = " . $second->name . "<br>";