<?php


function __autoload($classname) {
include strtolower($classname) . '.php';
}

$mono = new Courier('Monospace Delivery');
$dono =  new Courier('Douspace Delivery');

var_dump($mono);
var_dump($dono);

