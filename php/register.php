<?php 
		// Connessione al database
		include "config.php";
	
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$username = $_POST['username']; // $_POST['username'];
	$password =md5($_POST['password']); // $_POST['password'];
	$sql = "INSERT INTO users (id, FirstName, LastName, username, password)
			VALUES (NULL,'$FirstName', '$LastName', '$username', '$password')";

if ($mysqli->query($sql) === TRUE) {
	echo "New record created successfully";
		} else {
	echo "Error: " . $sql . "<br>" . $mysqli->error;
}$mysqli->close();