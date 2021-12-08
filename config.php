<?php

		$db_name = "projekt";
		$mysql_user = "admin";
		$mysql_pass = "";
		$server_name = "localhost";

		$link = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
		$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
 
if(!$con)
{
    echo '{"message":"Nie mogę się połączyć z bazą danych."}';
}
if(!$link)
{
    echo '{"message":"Nie mogę się połączyć z bazą danych."}';
}
?>
