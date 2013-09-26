<?php 

    if($_GET['reset']){
        $personal = "0,0,0";			
		setcookie("anapersonal", $personal, time()+31536000);
		setcookie("apppersonal", $personal, time()+31536000);
		setcookie("biopersonal", $personal, time()+31536000);
		setcookie("genpersonal", $personal, time()+31536000);
		setcookie("inorgpersonal", $personal, time()+31536000);
		setcookie("intpersonal", $personal, time()+31536000);
		setcookie("matpersonal", $personal, time()+31536000);
		setcookie("orgpersonal", $personal, time()+31536000);
		setcookie("physpersonal", $personal, time()+31536000);
    } else{
	    setcookie("team", $_POST["team"], time()+31536000);
    	header("Location: index.php");
    }
?>