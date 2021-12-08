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
            <script src='js/jquery-3.3.1.min.js' type='text/javascript'></script>
        <script src='js/script.js' type='text/javascript'></script>
</head>
<body>

<ul>
  <li><a href="index.php">Strona główna</a></li>
  <li><a href="ranking.php">Ranking</a></li>
   <li><h3 class="baner"> BLOG TELEFONY KOMÓRKOWE </h3></li>
    <?php
            $link->set_charset("utf8");
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

            <center>
    <div class="artykultekst">

    <p>

    <?php

            $id = $_GET["id"];
        $sql = "SELECT categories.id,categories.tytul, categories.tresc, artykul.id, artykul.image FROM categories 
        INNER JOIN artykul ON categories.id=artykul.id WHERE categories.id=$id";

        $result = $link->query($sql);
     if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                echo "<h2>".
                $row[1]."</h2>"
                . "<br>".

                "<center><img src='./artykul/".$row[4]."' height='500px' width='500px'></center>".
                                "<br>".
                $row[2]
                . "<br>";
            }
        } else {
            echo "" . $link->error;
        }
    ?>

    </p></div></center>








        <?php
            $id = $_GET["id"];
    if(isset($_SESSION["loggedin"])){
					echo '<form method="post">
					<center><table>
					<tr>
					<td width="80">imię/nick:</td>
					<td><input type="text" name="name" value="'.$_SESSION["username"].'" readonly required></td>
					</tr>
					<tr>
					<td width="80">komentarz:</td>
					<td><textarea name="comment" rows=9 cols=38></textarea></p>
					<input type="submit" name="send" value="Dodaj"></td>
					</tr>
					</table>
					</form></center>';
    }
    else
    {
					echo '<form method="post">
					<center><table>
					<tr>
					<input type="hidden" name="id" value='.$id.'><br>
					<td width="80">imię/nick:</td>
					<td><a href="login.php">Zaloguj sie</a>
					</tr>
					<tr>
					<td width="80">komentarz:</td>
					<td><textarea name="comment" rows=9 cols=38 readonly required></textarea></p>
					<input type="submit" name="send" value="Dodaj"></td>
					</tr>
					</table></center>
					</form>';
    }
    ?>
    <?php


    if(isset($_POST["send"]))
    {
        $nazwa=$_POST['name'];
        $komentarz=$_POST['comment'];

        $link->set_charset("utf8");
        $insroute=mysqli_query($con, "INSERT INTO `comments` (`idposta`,`NAME`, `COMMENT`, `LOGS`) VALUES ('$id','$nazwa','$komentarz',now())") or die(mysqli_error());
        header('Location: kom.php');
        exit;
    }
    ?>

        <?php
        $id = $_GET["id"];


        $sql = "SELECT * FROM comments WHERE idposta = $id ORDER BY ID DESC";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo
                $row["NAME"]. " " .$row["LOGS"]
                . "<br>"
                . $row["COMMENT"]
                . "<hr>";
            }
        } else {
            echo "" . $link->error;
        }

        mysqli_close($link);
        ?>

        <a href="index.php">Powrot</a>

    </body>
</html>
