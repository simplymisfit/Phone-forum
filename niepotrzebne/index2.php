<?php
require_once "config.php";
session_start();
?>

<html lang="pl-PL">
<head>
   <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<ul>
  <li><a class="active" href="index2.php">Strona główna</a></li>
    <?php
    
        if(isset($_SESSION["loggedin"]))
        {
            echo '<li><a href="logout2.php">Wyloguj się</a></li>';
        }
        else
        {
            echo '<li><a href="login2.php">Zaloguj się</a></li>';
        }
        mysqli_close($link);
    ?>
</ul>

<div style="padding:20px;margin-top:30px;background-color:whitesmoke;height:1500px;">


</div>
	</body>
	
</html>