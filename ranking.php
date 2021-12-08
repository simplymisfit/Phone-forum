<?php
require_once "config.php";
session_start();
?>

<html lang="pl-PL">
<head>
	    <title>BLOG TELEFONY KOMORKOWE</title>
   <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index.css" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">

            <script src='js/jquery-3.3.1.min.js' type='text/javascript'></script>
        <script src='js/script.js' type='text/javascript'></script>
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
									if ($_SESSION['loggedin'] && $_SESSION['username'] == "misfit" ){
						
						echo '
						
						
										<button type="button" class="togglebutton" id="formButton">Schowaj/pokaż!</button>
						<form id="form1" method="post" enctype="multipart/form-data">
										<table>
										<tr>
										
										<td width="80">Zdjęcie:</td>
										
										<td>  <input type="hidden" name="size" value="1000000">	  <input type="file" name="image" required>
										</tr>
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
										<input type="submit" class="kategorie" name="send" value="Dodaj"></td>
										</table>
										</form>'; 
										
									 }
									 else if ($_SESSION['loggedin'] && $_SESSION['username'] != "misfit" ){
						
									echo '
						
						
										<button type="button" class="togglebutton" id="formButton">Schowaj/pokaż!</button>
						<form id="form1" method="post" enctype="multipart/form-data">
										<table>
										<tr>
										
										<td width="80">Zdjęcie:</td>
										
										<td>  <input type="hidden" name="size" value="1000000">	  <input type="file" class="kategorie" name="image" required>
										</tr>
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
										<input type="submit" class="kategorie" name="send" value="Dodaj"></td>
										</table>
										</form>'; 
										
									 }
									 else{
						
						echo '
										<button type="button" class="togglebutton" id="formButton">Schowaj/pokaż!</button>
						<form id="form1" method="post">
										<table>
										<tr>
										<td width="80">Zdjęcie:</td>
										<td><textarea name="zdjecie" rows=1 cols=38 required readonly></textarea>
										</tr>
										<tr>
										<td width="80">Urządzenie:</td>
										<td><textarea name="urzadzenie" rows=1 cols=38 required readonly></textarea>
										</tr>
										<tr>
										<td width="80">Pamięć:</td>
										<td><textarea name="pamiec" rows=1 cols=38 required readonly></textarea>
										</tr>
										<tr>
										<td width="80">CPU:</td>
										<td><textarea name="cpu" rows=1 cols=38 required readonly></textarea>
										</tr>
										<tr>
										<td width="80">UX:</td>
										<td><textarea name="ux" rows=1 cols=38 required readonly></textarea>
										</tr>
										<tr>
										<td width="80">3D:</td>
										<td><textarea name="3d" rows=1 cols=38 required readonly></textarea>
										</tr>
										<tr>
										<td width="80">Wynik:</td>
										<td><textarea name="wynik" rows=1 cols=38 required readonly></textarea>
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
										<a href="login.php" class="kategorie">Zaloguj się</a>
										</table>
										</form>';
										
									 }
										if(isset($_POST["send"]))
    {

		
  	// execute query
  	mysqli_query($link, $sql);
  			$image = $_FILES['image']['name'];
			$target = "images/".basename($image);
			if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
            $urzadzenie = $_POST["urzadzenie"];
            $pamiec = $_POST["pamiec"];
            $cpu = $_POST["cpu"];
            $ux = $_POST["ux"];
            $d = $_POST["3d"];
            $wynik = $_POST["wynik"];
            $ocena = $_POST["ocena"];
        $link->set_charset("utf8");
        $insrouteimage = mysqli_query($con, "INSERT INTO `images` (`image`) VALUES ('$image')") or die(mysqli_error());
        $insroute=mysqli_query($con, "INSERT INTO `ranking` (`urzadzenie`,`pamiec`, `cpu`, `ux`,`3d`,`wynik`,`ocena`) VALUES ('$urzadzenie','$pamiec','$cpu','$ux', '$d', '$wynik', '$ocena')") or die(mysqli_error());
        
        header('Location: kom.php');
        exit;
    }
    ?>
										

            

        <div class='container'>
            <input type='hidden' id='sort' value='asc'>
            <table width='100%' id='empTable' border='1' cellpadding='10'>
                <tr>
					<th>Zdjecie</th>
                    <th><span onclick='sortTable("urzadzenie");'>Urządzenie</span></th>
                    <th><span onclick='sortTable("pamiec");'>RAM + pamięć</span></th>
                    <th><span onclick='sortTable("cpu");'>CPU</span></th>
                    <th><span onclick='sortTable("ux");'>UX</span></th>
                    <th><span onclick='sortTable("3d");'>3D</a></th>
                    <th><span onclick='sortTable("wynik");'>Wynik</a></th>
                    <th><span onclick='sortTable("ocena");'>Ocena</a></th>
                </tr>
                <?php 
                $query = "SELECT ranking.urzadzenie, ranking.pamiec, ranking.cpu, ranking.ux, ranking.3d, ranking.wynik, ranking.ocena, images.id, images.image, ranking.id
							FROM ranking
							LEFT JOIN images ON ranking.id = images.id
							ORDER BY ranking.wynik desc;";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){

                ?>
                    <tr>
						<td><img src="images/<?php echo $row[8]; ?>" height=150px; width=150px;></td>
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[4]; ?></td>
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?></td>
                                                <?php if(isset($_SESSION["loggedin"]) && ($_SESSION['username']=='misfit')){
                              echo " <td><a href='delete.php?id=" . $row[9] . "'><img src='images/delete.png'></a></td> " ;
                              echo " <td><a href='edit.php?id=" . $row[9] . "'><img src='images/edit.png'></a></td> " ;
                }
                        ?>
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
