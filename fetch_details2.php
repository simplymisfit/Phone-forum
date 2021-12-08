<?php

include "config.php";

	$columnName = $_POST['columnName'];
	$sort = $_POST['sort'];

	$select_query = "SELECT * FROM kategorie order by ".$columnName." ".$sort." ";

	$result = mysqli_query($link,$select_query);

	$html = '';
		while($row = mysqli_fetch_array($result)){
			$asus = $row[1];
			$samsung = $row[2];

			$html .= "<tr>
			<td>".$asus."</td>
			<td>".$samsung."</td>
			</tr>";
		}

echo $html;
?>

