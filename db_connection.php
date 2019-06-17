<?php
	    $host = "localhost";
		$user= "root";
		$pass= "";
		$db = "home_automation";
		$connect = mysqli_connect($host, $user, $pass, $db);
		if(!$connect){

			die("Not connected".mysql_connect_errno($connect));
		}
		else{

			echo("connected to server");
		}



?>
