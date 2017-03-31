<?php

require 'classes/Database.php';

$database = new Database();

//Filter submit data
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

/*
//Code to submit posts to database
//Create variables that stores submit values and submit values into database
if($post['submit']) {
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
*/
// Code to update posts in the database
if($post['submit']) {
	$id = $post['id'];
	$title = $post['title'];
	$body = $post['body'];
	
	// Update posts in the databse
	$database->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
	$database->bind(':title', $title);
	$database->bind(':body', $body);
	$database->bind(':id', $id);
	$database->execute();	
}


if($_POST['delete']) {
	$delete_id = $_POST['delete_id'];
	$database->query('DELETE FROM posts WHERE id = :id');
	$database->bind('id', $delete_id);
	$database->execute();
	
}

// Code that fetch data from database
$database->query('SELECT * FROM posts');
$rows = $database->resultset();

// Down code goes in php template file and we will include it
?>


<h1>Add Post</h1>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<label>Post ID</label><br />
	<input type="text" name="id" placeholder="Add a ID...."><br /><br />
	<label>Post Title</label><br />
	<input type="text" name="title" placeholder="Add a Title..."><br /><br />
	<label>Post Body</label><br />
	<textarea name="body"></textarea><br />
	<input type="submit" name="submit" value="Submit">
</form>
	
<h1>Posts<h1>
<div>
	<?php foreach($rows as $row) : ?>
	<div>
		<h3><?php echo $row['title']; ?></h3>
		<p><?php echo $row['body']; ?></p>
	    <br />
		
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
			<input type="submit" name="delete" value="Delete">
		</form>
	</div>
<?php endforeach; ?>
	
</div>
	
