<?php

	session_start();

	$_SESSION["id"] = $_POST["id"];
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];


	$mysqli = new mysqli("localhost", "root", "", "cms");


	$sql = "SELECT * FROM users WHERE email='".$_POST["email"]."'";
	$result = $mysqli->query($sql);  //$mysqli->query($sql) it is a fn to run sql query.


	if(!empty($result->fetch_assoc())){  // this fn return the first row of resulted query
		$sql2 = "UPDATE users SET google_id='".$_POST["id"]."' WHERE email='".$_POST["email"]."'"; //update table if there is any previous login otherwise insert a new user in the login table.
	}else{
		$sql2 = "INSERT INTO users (name, email, google_id) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["id"]."')";
	}


	$mysqli->query($sql2);


	echo "Updated Successful";
?>