<<?php
	$servername = "localhost";
	$username = "root";
	$password = "Emil";
	$dbname = "folkom";

	$connect = mysql_connect("$servername","$username","$password") or die("Kunde inte ansluta till databasen");
	mysql_select_db("$dbname") or die ("Kunde inte hitta databasen");

	ob_start();
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	$rank = $_POST['rank'];

	if ($username&&$password){
		$username = mysql_real_escape_string($username);
		$query = mysql_query("SELECT * FROM login WHERE password='$password' AND username='$username'");

		$numrows = mysql_num_rows($query);

		if($numrows!=0) {
			while ($row = mysql_fetch_assoc($query)){
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
				$dbrank = $row['rank'];

			}

			if (($hash != $username['password'])){
				header("Location: resultat.php");
				$_SESSION['username']=$dbusername;
				$_SESSION['password']=$dbpassword;
				$_SESSION['rank']=$dbrank;
			}
			else{
				header("Location: loginSite.php");
				echo "<script type='text/javascript'>alert('Felaktiga inloggnings uppgifter')</script>";
			}

		}
		else{
			header("Location: loginSite.php");
			echo "<script type='text/javascript'>alert('Felaktiga inloggnings uppgifter')</script>";
		}


	}

else{
	header("Location: index.html");
	echo "<script type='text/javascript'>alert('Felaktiga inloggnings uppgifter')</script>";
}
?>
