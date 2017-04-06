<?php


require 'classes/Database.php';

// Code to instatiate Database class and create object that represents database conection
$database = new Database();

//Filter submit data
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//var_dump($post);

/*
//Create variables that stores submit values and submit values into database
if($post['action'] and $post['action'] == "Submit") {
	$title = $post['title'];
	$body = $post['body'];
	

	// Insert submited values into databse
	try{
		$database->query('INSERT INTO posts (title, body) VALUES(:title, :body)');
		$database->bind(':title', $title);
		$database->bind(':body', $body);
		$database->execute();
		if($database->lastInsertId()){
			echo '<p>Post Added!</p>';
	}
	} catch (PDOException $e) {
	 	$database->error = 'Error insert values into database' $e->getMessage();
		exit();
	}
	
}
*/

//Code to update value in the database
if($post['action']) {
	$id = $post['id'];
	$title = $post['title'];
	$body = $post['body'];
	

	// Insert submited values into databse
	try {
		$database->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
		$database->bind(':title', $title);
		$database->bind(':body', $body);
		$database->bind(':id', $id);
		$database->execute();
	} catch(PDOException $e) {
		$database->error = 'Error update values in the databse' . $e->getMessage();
		exit();
	}
}

if($_POST['delete']) {
	$delete_id = $_POST['delete_id'];
	
	//Code to delete values from database
	try {
		$database->query('DELETE FROM posts WHERE id = :id');
		$database->bind(':id', $delete_id);
		$database->execute();
	} catch (PDOException $e) {
		$database->error = 'Error delete values form database' . $e->getMessage();
		exit();
	}
}
	
// Code that fetch data from database
$database->query('SELECT * FROM posts');
$rows = $database->resultset();

include 'posts.html.php'; // php template include file

