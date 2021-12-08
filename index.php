<?php
require_once "config.php";
session_start();
?>
<html lang="pl-PL">
<head>
   <meta charset="UTF-8">
   	    <title>BLOG TELEFONY KOMORKOWE</title>
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
			<input type="search" class="kategorie2" name="slowokluczowe" placeholder="Wpisz szukaną frazę" />
	
			
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
					
				if ($_SESSION['loggedin'] && $_SESSION['username'] == "misfit" ){
						
						echo '<button class="togglebutton" type="button" id="formButton">Schowaj/pokaż!</button>
								<form id="form1" method="post" enctype="multipart/form-data">
										<table>
										<tr>
										
										<td width="80">Zdjęcie:</td>
										
										<td>  <input type="hidden" name="size" value="1000000">	  <input type="file" name="image" required>
										
								<tr>
								<td width="80">Nazwa:</td>
								<td><textarea name="nazwa" rows=1 cols=38 required></textarea>
								<td width="80">Tytul:</td>
								<td><textarea name="tytul" rows=1 cols=38 required></textarea>
								</tr>
								<tr>
								<td width="80">Tresc:</td>
								<td><textarea name="tresc" rows=1 cols=38 required></textarea>
								<td width="80">Wstep:</td>
								<td><textarea name="wstep" rows=1 cols=38 required></textarea>
							
																		<td>Kategoria<select name="ocena">
										  <option value="1">ASUS</option>
										  <option value="2">ONEPLUS</option>
										  <option value="3">SAMSUNG</option>
										  <option value="4">HUAWEI</option>
										  <option value="5">MOTOROLA</option>
										  <option value="6">GOOGLE</option>
										</select></td>
								
								<td>
								<input type="submit" class="kategorie" name="send" value="Dodaj"></td></tr>
								</table>
								</form>';

					if(isset($_POST["send"]))
					{
							mysqli_query($con, $sql);
  			$image = $_FILES['image']['name'];
			$target = "artykul/".basename($image);
			if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
							$idKategorii = $_POST["idKategorii"];
							$nazwa = $_POST["nazwa"];
							$tytul = $_POST["tytul"];
							$tresc = $_POST["tresc"];
							$wstep = $_POST["wstep"];
							$link->set_charset("utf8");
							$insrouteimage = mysqli_query($con, "INSERT INTO `artykul` (`image`) VALUES ('$image')") or die(mysqli_error());
							$insroute=mysqli_query($con, "INSERT INTO `categories` (`idKategorii`,`nazwa`,`tytul`, `tresc`, `wstep`) VALUES ('$idKategorii','$nazwa','$tytul','$tresc','$wstep')") or die(mysqli_error());
							header('Location: index.php');
							exit;
					}
    ?>
						
						





</center>

<?php
				    $ark = "SELECT categories.id,categories.tytul, categories.wstep, artykul.id, artykul.image FROM categories 
        INNER JOIN artykul ON categories.id=artykul.id";
					$result = $link->query($ark);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_array()) {
								echo "<article>"."<a href='post2.php?id=$row[0]'>"."<br>";
								echo "<div class='zdjecie'><img src='./artykul/".$row[4]."' height='350px' width='350px'></div>";
								echo "<div class='tekst'><h3>".$row[1]."</h3>";								
								echo "<p>".$row[2]."</p></div>";
								echo "</article>";
								echo " <a href='delete2.php?id=" . $row[0] . "'><img src='images/delete.png'></a> " ;
								echo " <a href='edit3.php?id=" . $row[0] . "'><img src='images/edit.png'></a> " ;
									
								}
							}
						}
							else if ($_SESSION['loggedin'] && $_SESSION['username'] != "misfit" ){
								echo '<button class="togglebutton" type="button" id="formButton">Schowaj/pokaż!</button>
						<form id="form1" method="post">
								<table align = "center">
								<tr>
								<td width="80">Nazwa:</td>
								<td><textarea name="nazwa" rows=1 cols=38 required></textarea>
								<td width="80">Tytul:</td>
								<td><textarea name="tytul" rows=1 cols=38 required></textarea>
								</tr>
								<tr>
								<td width="80">Tresc:</td>
								<td><textarea name="tresc" rows=1 cols=38 required></textarea>
								<td width="80">Wstep:</td>
								<td><textarea name="wstep" rows=1 cols=38 required></textarea>
							
																		<td>Kategoria<select name="ocena">
										  <option value="1">ASUS</option>
										  <option value="2">ONEPLUS</option>
										  <option value="3">SAMSUNG</option>
										  <option value="4">HUAWEI</option>
										  <option value="5">MOTOROLA</option>
										  <option value="6">GOOGLE</option>
										</select></td>
								
								<td>
								<input type="submit" class="kategorie" name="send" value="Dodaj"></td></tr>
								</table>
								</form>';

					if(isset($_POST["send"]))
					{
								mysqli_query($con, $sql);
  			$image = $_FILES['image']['name'];
			$target = "artykul/".basename($image);
			if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
							$idKategorii = $_POST["idKategorii"];
							$nazwa = $_POST["nazwa"];
							$tytul = $_POST["tytul"];
							$tresc = $_POST["tresc"];
							$wstep = $_POST["wstep"];
							$link->set_charset("utf8");
							$insrouteimage = mysqli_query($con, "INSERT INTO `artykul` (`image`) VALUES ('$image')") or die(mysqli_error());
							$insroute=mysqli_query($con, "INSERT INTO `categories` (`idKategorii`,`nazwa`,`tytul`, `tresc`, `wstep`) VALUES ('$idKategorii','$nazwa','$tytul','$tresc','$wstep')") or die(mysqli_error());
							header('Location: index.php');
							exit;
					}
    
    
						
						
				    $ark = "SELECT categories.id,categories.tytul, categories.wstep, artykul.id, artykul.image FROM categories 
        INNER JOIN artykul ON categories.id=artykul.id";
					$result = $link->query($ark);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_array()) {
								echo "<article>"."<a href='post2.php?id=$row[0]'>"."<br>";
								echo "<h3>".$row[1]."</h3>";
								echo "<br>";
								echo "<img src='./artykul/".$row[4]."' height='150px' width='150px'>";
								echo "<p>".$row[2]."</p>";
								echo "<br>";
								echo "<br>";
								echo "</article>";
				
								}
							}
						}
					else {
						     $ark = "SELECT categories.id,categories.tytul, categories.wstep, artykul.id, artykul.image FROM categories 
        INNER JOIN artykul ON categories.id=artykul.id";
					$result = $link->query($ark);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_array()) {
								echo "<article>"."<a href='post2.php?id=$row[0]'>"."<br>";
								echo "<h3>".$row[1]."</h3>";
								echo "<br>";
								echo "<img src='./artykul/".$row[4]."' height='150px' width='150px'>";
								echo "<p>".$row[2]."</p>";
								echo "<br>";
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
