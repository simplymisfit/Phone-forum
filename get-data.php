<?php
	if(!empty($_POST["cpu"])){
		  $sql="SELECT * FROM ranking ORDER BY cpu DESC";
		  echo $output; /* PRINT THE OUTPUT YOU WANT, IT WILL BE RETURNED TO THE ORIGINAL PAGE */
	}
	if(!empty($_POST["wynik"])){
		  $sql="SELECT * FROM ranking ORDER BY wynik DESC";
		  echo $output; /* PRINT THE OUTPUT YOU WANT, IT WILL BE RETURNED TO THE ORIGINAL PAGE */
	}
	if(!empty($_POST["3d"])){
		  $sql="SELECT * FROM ranking ORDER BY 3d DESC";
		  echo $output; /* PRINT THE OUTPUT YOU WANT, IT WILL BE RETURNED TO THE ORIGINAL PAGE */
}
?>
