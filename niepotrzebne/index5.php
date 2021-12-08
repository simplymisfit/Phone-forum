<?php
require_once "config.php";
session_start();
?>
<html lang="pl-PL">
<head>
   <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index.css" type="text/css" />
    <link rel="stylesheet" href="css/galeria.css" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<body>

<ul>
  <li><a href="index.php">Strona główna</a></li>
  <li><a href="ranking.php">Ranking</a></li>
  <li><a href="telefony.php">Telefony</a></li>
    <?php

    if(isset($_SESSION["loggedin"]))
    {
        echo'<li style="float: right;"><a href="logout.php">Wyloguj się</a></li>';
    }
    else
    {
        echo'<li style="float: right;"><a href="login.php">Zaloguj się</a></li>';
    }


    ?>
</ul>

<div style="padding:20px;margin-top:30px;background-color:whitesmoke;height:1500px;">

    <h2>BLOG POŚWIĘCONY TELEFONOM KOMÓRKOWYM</h2>
    <?php 
    
    $ark = "SELECT id,nazwa,tytul FROM categories ORDER BY id DESC";
    $result = $link->query($ark);

     if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
				echo "<article>"."<a target='_blank' href='post2.php?id=$row[id]'>"."<br>";
				echo "<h3>".$row[nazwa]."</h3>";
				echo "<br>";
				echo "<p>".$row[tytul]."</p>";
				echo "<br>";
				echo "</article>";
				
			}
		}
    
     ?>
    

  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<?php
        mysqli_close($link);
?>
	</body>

</html>
