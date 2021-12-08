<?php
require_once "config.php";
session_start();
?>
<html lang="pl-PL">
<head>
   <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
            <script src='js/jquery-3.3.1.min.js' type='text/javascript'></script>
</head>
<body>

<ul>
  <li><a href="index.php">Strona główna</a></li>
  <li><a href="ranking.php">Ranking</a></li>
  <li><a class="active" href="telefony.php">Telefony</a></li>
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

    <h2>TELEFONY</h2>

        <center>

                    <?php
                    $usrnm = isset($_GET['username']) ? $_POST['username'] : '';
                    $log = "SELECT usertype FROM users WHERE username='$usrnm'";
                    $result = mysqli_query($con,$log);
                    $usertype = isset($_GET['usertype']) ? $_POST['usertype'] : '';
							if(isset($_SESSION["loggedin"]) && $usertype=='$result'){
										echo '<form method="post">
										<table>
										<tr>
										<td width="80">Urządzenie:</td>
										<td><textarea name="urzadzenie" rows=1 cols=38 required></textarea>
										</tr>
										<tr>
										<td width="80">Pamięć:</td>
										<td><textarea name="pamiec" rows=1 cols=38 required></textarea>
										</tr>
										<tr>
										<td width="80">CPU:</td>
										<td><textarea name="cpu" rows=1 cols=38 required></textarea>
										</tr>
										<tr>
										<td width="80">UX:</td>
										<td><textarea name="ux" rows=1 cols=38 required></textarea>
										</tr>
										<tr>
										<td width="80">3D:</td>
										<td><textarea name="3d" rows=1 cols=38 required></textarea>
										</tr>
										<tr>
										<td width="80">Wynik:</td>
										<td><textarea name="wynik" rows=1 cols=38 required></textarea>
										</tr>
										<tr>
										<td width="80">Ocena:</td>

										<div class="my-rating"></div>
										<td><select name="ocena">
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										</select></td>
										</tr>
										<input type="submit" class="btn btn-default" name="send" value="Dodaj"></td>
										</table>
										</form>';
    }
							else if(isset($_SESSION["loggedin"]) && $usertype!='$result'){
										echo '<form method="post">
										<table>
										<tr>
										<td width="80">Urządzenie:</td>
										<td><textarea name="urzadzenie" rows=1 cols=38 required></textarea>
										</tr>
										<tr>
										<td width="80">Pamięć:</td>
										<td><textarea name="pamiec" rows=1 cols=38 required></textarea>
										</tr>
										<tr>
										<td width="80">CPU:</td>
										<td><textarea name="cpu" rows=1 cols=38 required></textarea>
										</tr>
										<tr>
										<td width="80">UX:</td>
										<td><textarea name="ux" rows=1 cols=38 required></textarea>
										</tr>
										<tr>
										<td width="80">3D:</td>
										<td><textarea name="3d" rows=1 cols=38 required></textarea>
										</tr>
										<tr>
										<td width="80">Wynik:</td>
										<td><textarea name="wynik" rows=1 cols=38 required></textarea>
										</tr>
										<tr>
										<td width="80">Ocena:</td>

										<div class="my-rating"></div>
										<td><select name="ocena">
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										</select></td>
										</tr>
										<input type="submit" class="btn btn-default" name="send" value="Dodaj"></td>
										</table>
										</form>';
    }
							else
											{
										echo '<form method="post">
										<table>
										<tr>
										<td width="80">Urządzenie:</td>
										<td><textarea name="urzadzenie" rows=1 cols=38 readonly required></textarea>
										</tr>
										<tr>
										<td width="80">Pamięć:</td>
										<td><textarea name="pamiec" rows=1 cols=38 readonly required></textarea>
										</tr>
										<tr>
										<td width="80">CPU:</td>
										<td><textarea name="cpu" rows=1 cols=38 readonly required></textarea>
										</tr>
										<tr>
										<td width="80">UX:</td>
										<td><textarea name="ux" rows=1 cols=38 readonly required></textarea>
										</tr>
										<tr>
										<td width="80">3D:</td>
										<td><textarea name="3d" rows=1 cols=38 readonly required></textarea>
										</tr>
										<tr>
										<td width="80">Wynik:</td>
										<td><textarea name="wynik" rows=1 cols=38 readonly required></textarea>
										</tr>
										<tr>
										<td width="80">Ocena:</td>
										<td><select name="ocena">
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										</select></td>
										</tr>
										<a href="login.php" class="btn btn-default">Zaloguj się</a>
										</table>
										</form>';
											}

    if(isset($_POST["send"]))
    {

            $urzadzenie = $_POST["urzadzenie"];
            $pamiec = $_POST["pamiec"];
            $cpu = $_POST["cpu"];
            $ux = $_POST["ux"];
            $d = $_POST["3d"];
            $wynik = $_POST["wynik"];
            $ocena = $_POST["ocena"];
        $link->set_charset("utf8");
        $insroute=mysqli_query($con, "INSERT INTO `phones` (`urzadzenie`,`pamiec`, `cpu`, `ux`,`3d`,`wynik`,`ocena`) VALUES ('$urzadzenie','$pamiec','$cpu','$ux', '$d', '$wynik', '$ocena')") or die(mysqli_error());
        header('Location: kom.php');
        exit;
    }
    ?>

            <table width='100%' id='empTable' border='1' cellpadding='10'>
                <tr>
                    <th>Urządzenie</th>
                    <th>RAM + pamięć</th>
                    <th>CPU</th>
                    <th>UX</th>
                    <th>3D</th>
                    <th>Wynik</th>
                    <th>Ocena</th>
                </tr>
                <?php
                $query = "SELECT * FROM phones order by id asc";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){

                ?>
                    <tr>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[4]; ?></td>
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?></td>
                        <td><?php echo $row[7]; ?></td>
                        <?php if(isset($_SESSION["loggedin"]) && ($_SESSION['username']=='misfit')){
                              echo " <td><a href='delete.php?id=" . $row['id'] . "'><img src='images/delete.png'></a></td> " ;
                              echo " <td><a href='edit.php?id=" . $row['id'] . "'><img src='images/edit.png'></a></td> " ;
                }
                        ?>
                    </tr>
                    
                    <div class='container'>
            <input type='hidden' id='sort' value='asc'>
            <table width='100%' id='empTable' border='1' cellpadding='10'>
                <tr>
                    <th><span onclick='sortTable("urzadzenie");'>Urządzenie</span></th>
                    <th><span onclick='sortTable("pamiec");'>RAM + pamięć</span></th>
                    <th><span onclick='sortTable("cpu");'>CPU</span></th>
                    <th><span onclick='sortTable("ux");'>UX</span></th>
                    <th><span onclick='sortTable("3d");'>3D</a></th>
                    <th><span onclick='sortTable("wynik");'>Wynik</a></th>
                    <th><span onclick='sortTable("ocena");'>Ocena</a></th>
                </tr>
                <?php 
                $query = "SELECT * FROM phones order by id asc";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){

                ?>
                    <tr>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[4]; ?></td>
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?></td>
                        <td><?php echo $row[7]; ?></td>
                    </tr>

            <?php
    }
             mysqli_close($con);
            ?>
        </table>

    </center>


</div>
</body>

</html>
