<?php 

	setcookie("team", $_POST["team"], time()+3600);
	header("Location: index.php");
?>