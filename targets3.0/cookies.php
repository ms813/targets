<?php 
	setcookie("team", $_POST["team"], time()+31536000);
	header("Location: index.php");
?>