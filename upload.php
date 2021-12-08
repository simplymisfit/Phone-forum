<?php
require_once "config.php";
session_start();
  // Create database connection

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($link, $_POST['image_text']);

  	// image file directory
  	$target = "uploads/".basename($image);

  	$sql = "INSERT INTO ranking (zdjecie, zdjecie_tekst) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($link, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($link, "SELECT zdjecie FROM ranking");
?>
