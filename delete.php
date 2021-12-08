<?php
require_once "config.php";
session_start();

		$id = $_GET[id];
		$sql = "DELETE FROM ranking WHERE id='$id'";

		if ($con->query($sql) === TRUE) {
			echo "Record deleted successfully";
		} else {
			echo "Error deleting record: " . $con->error;
		}

$con->close();
header('Location: index.php');
?>
