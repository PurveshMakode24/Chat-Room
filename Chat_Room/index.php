<?php include 'database.php' ?> 
<?php
// create select query
	$query= "SELECT * FROM shouts ORDER BY id DESC";
	$shouts= mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MESSENGER-Chat Room</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body> 
	<div id="container">
		<header>
			<h1>MESSENGER-Chat Room</h1>
		</header>
		<div id="shouts">
			<ul>
				<?php while($row = mysqli_fetch_assoc($shouts)) :?>
					<li class="shout"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?>:</strong> <?php echo $row['message'] ?></li>
				
				<?php endwhile; ?>
			</ul>
	
		</div>
		<div id="input">
			<?php if(isset($_GET['error'])) : ?>
				<div class="error"><?php echo $_GET['error'] ?></div>
			<?php endif;?>
			<form method="post" action="process.php">
				<input type="text" name="user" placeholder="Enter Your Name">
				<input type="text" name="message" placeholder="Enter A Message">
				<br>
				<input class="hitme" type="submit" name="submit" value="Hit Your Message">
			</form>
		</div>
	</div>
</body>
</html>