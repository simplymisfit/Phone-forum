
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
			<input type="search" class="kategorie2" name="slowokluczowe" placeholder="Wpisz szukaną frazę" />
			<button type="submit" class="kategorie2" name="searchbtn">
			<img src="images/search1.png" height=17px; width=17px; alt="szukaj"/>
			<br/>
	
			</button>
		</form>
     <h2><a class="kategorie1" href="index.php">ASUS</a> 
      <a class="kategorie1" href="index.php">ONEPLUS</a> 
       <a class="kategorie1" href="index.php">SAMSUNG</a> 
        <a class="kategorie1" href="index.php">HUAWEI</a> 
         <a class="kategorie1" href="index.php">MOTOROLA</a> 
          <a class="kategorie1" href="index.php">GOOGLE</a> </h2>
			</center>
    
    <?php 
					
				if ($_SESSION['loggedin'] && $_SESSION['username'] == "misfit" ){
						
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
							$idKategorii = $_POST["idKategorii"];
							$nazwa = $_POST["nazwa"];
							$tytul = $_POST["tytul"];
							$tresc = $_POST["tresc"];
							$wstep = $_POST["wstep"];
							$link->set_charset("utf8");
							$insroute=mysqli_query($con, "INSERT INTO `categories` (`nazwa`,`tytul`, `tresc`, `wstep`) VALUES ('$nazwa','$tytul','$tresc','$wstep')") or die(mysqli_error());
							header('Location: index.php');
							exit;
					}
    ?>
						
						







<?php
						$idKategorii = $_GET[idKategorii];
						    $ark = "SELECT id,nazwa,tytul,wstep FROM categories WHERE idKategorii=$idKategorii ORDER BY id DESC";
					$result = $link->query($ark);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
								echo "<article>"."<a href='post2.php?id=$row[id]'>"."<br>";
								echo "<h3>".$row[tytul]."</h3>";
								echo "<br>";
								echo "<p>".$row[wstep]."</p>";
								echo "<br>";
								echo "<br>";
								echo "</article>";
								echo " <a href='delete2.php?id=" . $row[id] . "'><img src='images/delete.png'></a> " ;
								echo " <a href='edit3.php?id=" . $row[id] . "'><img src='images/edit.png'></a> " ;
									
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

						$nazwa = $_POST["nazwa"];
						$tytul = $_POST["tytul"];
						$tresc = $_POST["tresc"];
						$wstep = $_POST["wstep"];
						$link->set_charset("utf8");
						$insroute=mysqli_query($con, "INSERT INTO `categories` (`nazwa`,`tytul`, `tresc`, `wstep`) VALUES ('$nazwa','$tytul','$tresc','$wstep')") or die(mysqli_error());
						header('Location: index.php');
						exit;
				}
    
						
						$idKategorii = $_GET[idKategorii];
						    $ark = "SELECT id,nazwa,tytul,wstep FROM categories WHERE idKategorii=$idKategorii ORDER BY id DESC";
					$result = $link->query($ark);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
								echo "<article>"."<a href='post2.php?id=$row[id]'>"."<br>";
								echo "<h3>".$row[tytul]."</h3>";
								echo "<br>";
								echo "<p>".$row[wstep]."</p>";
								echo "<br>";
								echo "<br>";
								echo "</article>";
				
								}
							}
						}
					else {
						$idKategorii = $_GET[idKategorii];
						    $ark = "SELECT id,nazwa,tytul,wstep FROM categories WHERE idKategorii=$idKategorii ORDER BY id DESC";
							$result = $link->query($ark);
							 if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
										echo "<article>"."<a href='post2.php?id=$row[id]'>"."<br>";
										echo "<h3>".$row[tytul]."</h3>";
										echo "<br>";
										echo "<p>".$row[wstep]."</p>";
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
