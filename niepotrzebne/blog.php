<html lang="pl-PL">
<head>
   <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<ul>
  <li><a href="index.html">Strona główna</a></li>
  <li><a href="ranking.html">Ranking</a></li>
  <li><a class="active" href="top10.html">Top 10 - Co kupić?</a></li>
  <li><a href="gryiaplikacje.html">Gry i aplikacje</a></li>
</ul>

<div style="padding:20px;margin-top:30px;background-color:whitesmoke;height:1500px;">
    

    
        <fieldset id="user_login">
        <legend>Logowanie</legend>
        <form method="post" action="logowanie.php" autocomplete="off">
            <table id="user_table">
                <tr>
                    <td>Login</td>
                    <?php if(isset($_SESSION["name"])){
    echo'<td><input type="text" name="name" value="'.$_SESSION["name"].'" readonly required></td>';
}
                    else
                    {
                        echo"<td><a href='logowanie.php'>Zaloguj sie</a></td>";
                    }
                    ?>
                </tr>
                <tr>
                <td>Comment</td>
                <td><textarea name="comment" required></textarea></td>
                </tr>
                <tr>
                <td colspan="2"><input type="submit" name="submit" id="comm" value="Wstaw komentarz"></td>
                </tr>

            </table>
        </form>
        </fieldset>
    
<?php
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $pass=$_POST["pass"];
        if ($name!="" && $pass!="")
        {
            $sql = "SELECT ID, USERNAME, PASSWORD FROM users WHERE USERNAME='$name' AND PASSWORD='$pass'";
            $result=$con->query($sql);
            if($result->num_rows==1)
            {
                $_SESSION["name"]=$name;
                header("location:index.php");
            }
        }
        else
        {
            echo "<p class='error'>Wypelnij wszystkie pola</p>";
        }
    }
    else
    {
        echo "<p>Uzupelnij wszystkie pola aby otrzymac dostep";
    }
    ?>
    
    </div>
    </body>
</html>