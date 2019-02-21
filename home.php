
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to ItSolutionStuff.com</title>
</head>
<a href="logout.php">logout</a>
<body>
<?php
session_start();
?>
<h1>Website Home Page</h1>
<p><strong>Id: </strong><?php echo $_SESSION['id'];  ?></p>
<p><strong>Name: </strong><?php echo $_SESSION['name'];  ?></p>
<p><strong>Email: </strong><?php echo $_SESSION['email'];  ?></p>


</body>
</html>
