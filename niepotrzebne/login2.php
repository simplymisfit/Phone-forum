<?php
require "config.php";
session_start();

    if(isset($_POST["send"]))
    {
        $nazwa=$_POST['name'];
        $komentarz=$_POST['comment'];
        $con->set_charset("utf8");
        //$sqll="INSERT INTO comments (`NAME`, `COMMENT`, `LOGS`) VALUES ('".$nazwa."','".$komentarz."',now())" or die(mysqli_error());
        
        $insroute=mysqli_query($con, "INSERT INTO comments (`NAME`, `COMMENT`, `LOGS`) VALUES ('".$nazwa."','".$komentarz."',now())") or die(mysqli_error());
        if ($insroute){
            echo "OK";
        }
        else
        {
            echo "BAD";
        }
    }
?>
<html>
    <head></head>
    <body>
            <?php

 
echo '<form method="post">
<table>
<tr>
<td width="80">imię/nick:</td>
<td><input type="text" name="name" size=20>
</tr>
<tr>
<td width="80">komentarz:</td>
<td><textarea name="comment" rows=9 cols=38></textarea></p>
<input type="submit" name="send" value="Dodaj"></td>
</tr>
</table>
</form>';
   ?>     
        
        
        <?php

$sql = "SELECT NAME, COMMENT, LOGS FROM comments";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row["NAME"]."<br>".$row["COMMENT"];
    }
} else {
    echo "0 results";
}

$con->close();
?> 
    </body>
</html>