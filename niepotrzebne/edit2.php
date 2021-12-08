<?php
require_once "config.php";
session_start();

$id = $_GET["id"];
$query = "SELECT * FROM phones WHERE id=$id";
$result = mysqli_query($con,$query);
$row= mysqli_fetch_array($result);

        if(isset($_POST['urzadzenie']))
        {
          $urzadzenie = $_POST['urzadzenie'];
          $pamiec = $_POST['pamiec'];
          $cpu = $_POST['cpu'];
          $ux = $_POST['ux'];
          $d = $_POST['3d'];
          $wynik = $_POST['wynik'];
          $ocena = $_POST['ocena'];
          $id = $_POST['id'];
          $sql = "UPDATE phones SET urzadzenie='$urzadzenie', pamiec='$pamiec', cpu='$cpu', ux='$ux', 3d='$d', wynik='$wynik', ocena='$ocena' WHERE id='$id'";
          $result = mysqli_query($con,$sql) or die(":c".mysqli_error);
          header("location: index.php");
        }

?>

<html>
<head>
</head>
<body>
  <form action="edit2.php" method="post">
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
</body>
</html>
