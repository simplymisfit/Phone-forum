<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION['loggedin'] = -1;
$_SESSION['username'] = -1;
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: goodbye2.php");
?>

<?php
    if(isset($_POST["submit"]))
    {
        $name=$_POST["username"];
        $pass=$_POST["pass"];
        if ($name!="" && $pass!="")
        {
            $sql = "SELECT id, username, password FROM users WHERE username='$name' AND password='$pass'";
            $result=$con->query($sql);
            if($result->num_rows==1)
            {
                $_SESSION["username"]=$name;
                header("location:index.php");
            }
        }
        else
        {
            echo "<p class='error'>Uzupełnij wszystkie pola</p>";
        }
    }
    else
    {
        echo "<p>Komentarz nie został wysłany";
    }
    ?>