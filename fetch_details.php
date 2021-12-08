<?php

include "config.php";
session_start();


	if(isset($_SESSION["loggedin"]) && ($_SESSION['username']=='misfit')){
	$columnName = $_POST['columnName'];
	$sort = $_POST['sort'];

	$select_query = "SELECT ranking.urzadzenie, ranking.pamiec, ranking.cpu, ranking.ux, ranking.3d, ranking.wynik, ranking.ocena, images.id, images.image
							FROM ranking
							LEFT JOIN images ON ranking.id = images.id
							 order by ".$columnName." ".$sort." ";

	$result = mysqli_query($link,$select_query);

	$html = '';
		while($row = mysqli_fetch_array($result)){
			$zdjecie = $row[8];
			$urzadzenie = $row[0];
			$pamiec = $row[1];
			$cpu = $row[2];
			$ux = $row[3];
			$d = $row[4];
			$wynik = $row[5];
			$ocena = $row[6];

			$html .= "<tr>
			<td><img src='images/".$zdjecie."'  height=150px; width=150px;></td>
			<td>".$urzadzenie."</td>
			<td>".$pamiec."</td>
			<td>".$cpu."</td>
			<td>".$ux."</td>
			<td>".$d."</td>
			<td>".$wynik."</td>
			<td>".$ocena."</td>                     
			<td><a href='delete.php?id=" . $row['id'] . "'><img src='images/delete.png'></a></td>
			<td><a href='edit.php?id=" . $row['id'] . "'><img src='images/edit.png'></a></td>       
			</tr>";
		}
	}
	else {
	$columnName = $_POST['columnName'];
	$sort = $_POST['sort'];

	$select_query = "SELECT ranking.urzadzenie, ranking.pamiec, ranking.cpu, ranking.ux, ranking.3d, ranking.wynik, ranking.ocena, images.id, images.image
							FROM ranking
							LEFT JOIN images ON ranking.id = images.id
							 order by ".$columnName." ".$sort." ";

	$result = mysqli_query($link,$select_query);

	$html = '';
		while($row = mysqli_fetch_array($result)){
			$zdjecie = $row[8];
			$urzadzenie = $row[0];
			$pamiec = $row[1];
			$cpu = $row[2];
			$ux = $row[3];
			$d = $row[4];
			$wynik = $row[5];
			$ocena = $row[6];

			$html .= "<tr>
			<td><img src='images/".$zdjecie."'  height=150px; width=150px;></td>
			<td>".$urzadzenie."</td>
			<td>".$pamiec."</td>
			<td>".$cpu."</td>
			<td>".$ux."</td>
			<td>".$d."</td>
			<td>".$wynik."</td>
			<td>".$ocena."</td>                         
			</tr>";
		}
	}

echo $html;
?>
