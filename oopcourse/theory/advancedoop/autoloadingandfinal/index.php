<?php

spl_autoload_register(function($class_name){
	include strtolower($class_name) . '.php';
});

$foo = new Foo;
$bar = new Bar;

$bar->sayHello();




