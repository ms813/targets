<?php
//action
//testing git again
	$amount = $_GET['amount'];
	$task = $_GET['task'];
	$team = $_GET['team'];

	$vals = file_get_contents("files/".$team.".php");
	$temp = explode (";", $vals);
	$targets = explode("," , $temp[0]);
	$remaining = explode("," , $temp[1]);
	
	//get personal tally out from the cookie
	
	$personal;
	
	if(isset($_COOKIE[$team.'personal'])){
		$c = $_COOKIE[$team.'personal'];
		$personal = explode(",", $c);
	}
	
	
	

switch ($task){
    case "peerReview":
        $remaining[0] = $remaining[0] - $amount;
		$personal[0] += $amount;
        break;
    case "editing":
        $remaining[1] = $remaining[1] - $amount;
		$personal[1] += $amount;
        break;
    case "proofing":
        $remaining[2] = $remaining[2] - $amount;
		$personal[2] += $amount;
        break;    
}
$x = implode("," , $targets);
$y = implode("," , $remaining);
$z = $x.";".$y;

file_put_contents("files/".$team.".php",$z);

setcookie($team."personal", implode(",", $personal), time()+31536000);

header("Location: index.php");
exit;

?>