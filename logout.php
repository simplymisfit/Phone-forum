<?php
session_start();
 
		$_SESSION['loggedin'] = -1;
		$_SESSION['username'] = -1;
 

session_destroy();
 

header("location: goodbye.php");
?>
