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
  <li><a class="active" href="ranking.php">Ranking</a></li>
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
    
    
    <h2>RANKING TELEFONÓW</h2>
    
        <center>


<?php

$id = $_GET["id"];
$query = "SELECT * FROM ranking WHERE id=$id";
$result = mysqli_query($con,$query);
$row= mysqli_fetch_array($result);

        if(isset($_POST['urzadzenie']))
        {
		$zdjecie = $_POST['zdjecie'];
          $urzadzenie = $_POST['urzadzenie'];
          $pamiec = $_POST['pamiec'];
          $cpu = $_POST['cpu'];
          $ux = $_POST['ux'];
          $d = $_POST['3d'];
          $wynik = $_POST['wynik'];
          $ocena = $_POST['ocena'];
          $id = $_POST['id'];
          $sql = "UPDATE ranking SET urzadzenie='$urzadzenie', pamiec='$pamiec', cpu='$cpu', ux='$ux', 3d='$d', wynik='$wynik', ocena='$ocena' WHERE id='$id'";
          $result = mysqli_query($con,$sql) or die(":c".mysqli_error);
          header("location: index.php");
        }

?>

  <form action="edit.php" method="post">
    Urządzenie: <input type="text" name="urzadzenie" value="<?php echo $row[1]; ?>"><br>
    RAM + pamięć: <input type="text" name="pamiec" value="<?php echo $row[2]; ?>"><br>
    CPU: <input type="text" name="cpu" value="<?php echo $row[3]; ?>"><br>
    UX: <input type="text" name="ux" value="<?php echo $row[4]; ?>"><br>
    3D: <input type="text" name="3d" value="<?php echo $row[5]; ?>"><br>
    Wynik: <input type="text" name="wynik" value="<?php echo $row[6]; ?>"><br>
    Ocena: <input type="text" name="ocena" value="<?php echo $row[7]; ?>"><br>
    <input type="hidden" name="id" value="<?php echo $row[0]; ?>">
    <input type="submit" value="Update">
    
  </form>
            <a href="ranking.php">Powrot</a>
  </center>
</body>
</html>
