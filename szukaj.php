<?php
require_once "config.php";
session_start();
?>
<html lang="pl-PL">
<head>
   <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index.css" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel = "stylesheet" href = "css/lightbox.min.css" type ="text/css">
        <script type="text/javascript" src="js/lightbox-plus-jquery.min.js">
			
			</script>
			<script>
$(document).ready(function() {
  $("#formButton").click(function() {
    $("#form1").slideToggle();
  });
});

			</script>
</head>
<body>

<ul>
  <li><a class="active" href="index.php">Strona główna</a></li>
  <li><a href="ranking.php">Ranking</a></li>
  <li><h3 class="baner"> BLOG TELEFONY KOMÓRKOWE </h3></li>
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
    <center>
		<form method="POST" action="szukaj.php">
			<input type="search" class="kategorie2" name="keyword" placeholder "Wpisz szukaną frazę" />
			<button type="submit" class="kategorie2" name="searchbtn">
			<img src="images/search1.png" height=17px; width=17px; alt="szukaj"/>
			<br/>
	
			</button>
		</form>
			
			
     <h2><a class="kategorie1" href="indexkategorie.php?idKategorii=1">ASUS</a> 
      <a class="kategorie1" href="indexkategorie.php?idKategorii=2">ONEPLUS</a> 
       <a class="kategorie1" href="indexkategorie.php?idKategorii=3">SAMSUNG</a> 
        <a class="kategorie1" href="indexkategorie.php?idKategorii=4">HUAWEI</a> 
         <a class="kategorie1" href="indexkategorie.php?idKategorii=5">MOTOROLA</a> 
          <a class="kategorie1" href="indexkategorie.php?idKategorii=6">GOOGLE</a> </h2>
			</center>
    
    <?php 
					

		if (isset($_POST['searchbtn'])) {
			$slowokluczowe = $_POST['slowokluczowe'];
			$sql = "SELECT * FROM categories WHERE tytul LIKE '%$slowokluczowe%'";
			$query = mysqli_query($link,$sql);
			
			if (mysqli_num_rows($query) < 1) {
				echo "Nie znalazłem szukanej frazy!";
			}else {
				while ($fetch = mysqli_fetch_assoc($query)) {
					$id = $fetch['id'];
					$tytul = $fetch['tytul'];
					
					echo "<article>"."<a href='post2.php?id=$id'>"."<br>";
										echo "<h3>".$tytul."</h3>";
										echo "<br>";
										echo "</article>";
				}
			}
		}

		
		
		
		?>
		

  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

			<?php
				mysqli_close($link);
			?>
	</body>

</html>

