<?php

require 'classes/Database.php';

$database = new Database();

//Filter insert data
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//var_dump($post);

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

// Code that fetch data from database
$database->query('SELECT * FROM posts');
$rows = $database->resultset();

// Down code goes in php template file and we will include it
?>


<h1>Add Post</h1>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<label>Post Title</label><br />
	<input type="text" name="title" placeholder="Add a Title..."><br /><br />
	<label>Post Body</label><br />
	<textarea name="body"></textarea><br />
	<input type="submit" name="submit" value="Submit">
</form>
	


?>
<h1>Posts<h1>
<div>
	<?php foreach($rows as $row) : ?>
	<div>
		<h3><?php echo $row['title']; ?></h3>
		<p><?php echo $row['body']; ?></p>
	
	</div>
<?php endforeach; ?>
	
</div>
	
