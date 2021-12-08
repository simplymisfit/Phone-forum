<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

$nick = $_POST[nick];
$tresc = $_POST[tresc];
$tytul = $_POST[tytul];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO posty (nick, tresc, idKategorii)
VALUES ('$nick', '$tresc', '1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: artykulhuawei.php');
?>