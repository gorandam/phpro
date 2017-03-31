<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/helpers.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Show posts</title>
	</head>
	<body>
		<h1>Add Post</h1>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
			<label>Post Title</label><br />
			<input type="text" name="title" placeholder="Add a Title..."><br /><br />
			<label>Post Body</label><br />
			<textarea name="body"></textarea><br />
			<input type="hidden" name="action" value="Submit">
			<input type="submit" value="Submit">
		</form>
		<h1>Posts</h1>
		<div>
			<?php foreach($rows as $row) : ?>
				<div>
					<h3><?php echo $row['title']; ?></h3>
					<p><?php echo $row['body']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</body>
</html>
			
	
