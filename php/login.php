<?php
		// Connessione al database
	include "config.php";
	if ($mysqli->connect_error) {
		die('Errore di connessione (' . $mysqli->connect_errno . ') '
    	. $mysqli->connect_error);
	}
	$username = $_POST['username']; // $_POST['username'];
	$password =md5($_POST['password']); // $_POST['password'];
	$query = $mysqli->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
	if($query->num_rows) {
		echo "Accesso consentito";
	} else {
		echo "Accesso rifiutato";
	}
?>

