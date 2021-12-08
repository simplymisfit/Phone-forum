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
        <style>
			.gallery {
				margin: 10px 50px;
			}
			
			.gallery img {
				height: 200px;
				width: 230px;
				padding: 5px;
				filter: grayscale(100%);
				transition: 1s;
			}
			
			.gallery img:hover {
				filter: grayscale(0);
			}
			table {
				text-align: center;
			}
			
			.baner {
				text-align: center;
				margin-top: 5px;
				margin-left: 450px;
				height: 0px;
			}
			
			</style>
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
    <center> <?php

$id = $_GET["id"];
$query = "SELECT * FROM categories WHERE id=$id";
$cate = mysqli_query($link,$query);
$row= mysqli_fetch_array($cate);

        if(isset($_POST['nazwa']))
        {
		  $idKategorii = $_POST['idKategorii'];
          $nazwa = $_POST['nazwa'];
          $tytul = $_POST['tytul'];
          $tresc = $_POST['tresc'];
          $wstep = $_POST['wstep'];
          $id = $_POST['id'];
          $cat = "UPDATE categories SET idKategorii='$idKategorii', nazwa='$nazwa', tytul='$tytul', tresc='$tresc', wstep='$wstep' WHERE id='$id'";
          $cate = mysqli_query($link,$cat) or die("Nie mogę się połączyć z bazą danych".mysqli_error);
          header("location: index.php");
        }

?>

<html>
<head>
</head>
<body>
  <form action="edit3.php" method="post">
	Id kategorii: <select name="idKategorii">
										  <option value="1">ASUS</option>
										  <option value="2">ONEPLUS</option>
										  <option value="3">SAMSUNG</option>
										  <option value="4">HUAWEI</option>
										  <option value="5">MOTOROLA</option>
										  <option value="6">GOOGLE</option>
										</select><br>
    Nazwa: <textarea name="nazwa"><?php echo $row[2]; ?></textarea><br>
    Tytuł: <textarea name="tytul"><?php echo $row[3]; ?></textarea><br>
    Treść: <textarea name="tresc"><?php echo $row[4]; ?></textarea><br>
    Wstęp: <textarea name="wstep"><?php echo $row[5]; ?></textarea><br>
    <input type="hidden" name="id" value="<?php echo $row[0]; ?>">
    <input type="submit" value="Update">
  </form>
          <a href="index.php">Powrot</a>
</body>
</html>
