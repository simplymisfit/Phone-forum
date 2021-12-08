<?php
		require_once "config.php";
		session_start();

		$nick = $_POST[nick];
		$tresc = $_POST[tresc];

		$conn = mysqli_connect($servername, $username, $password, $dbname);

				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

		$sql = "INSERT INTO komentarze (nick, tresc)
		VALUES ('$nick', '$tresc')";

				if (mysqli_query($conn, $sql)) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

mysqli_close($conn);
header('Location: index.php');
?>
