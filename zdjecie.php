<?php
  // Create database connection
require_once "config.php";
session_start();

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image) VALUES ('$image')";
  	// execute query
  	mysqli_query($link, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  header('Location: kom.php');
?>


  
</div>
</body>
</html>
