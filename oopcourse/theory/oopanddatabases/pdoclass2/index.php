<?php


require 'classes/Database.php';

// Code to instatiate Database class and create object that represents database conection
$database = new Database();

//Filter submit data
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//var_dump($post);

//Create variables that stores submit values and submit values into database
if($post['action']) {
	$title = $post['title'];
	$body = $post['body'];
	

	// Insert submited values into databse
	$database->query('INSERT INTO posts (title, body) VALUES(:title, :body)');
	$database->bind(':title', $title);
	$database->bind(':body', $body);
	$database->execute();
	if($database->lastInsertId()){
		echo '<p>Post Added!</p>';
	}
}

// Code that fetch data from database
$database->query('SELECT * FROM posts');
$rows = $database->resultset();

include 'posts.html.php'; // php template include file

