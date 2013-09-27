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
	
	
	$i;

switch ($task){
    case "peerReview":
		$i = 0;
        break;
    case "editing":
		$i = 1;
        break;		
    case "proofing":
		$i = 2;
        break;    
}

$temp = $remaining[$i];
        $remaining[$i] = $remaining[$i] - $amount;
		
		if($remaining[$i] < 0){
			$remaining[$i] = 0;
			$personal[$i] += $temp;
		} else{
			$personal[$i] += $amount;
		}

$x = implode("," , $targets);
$y = implode("," , $remaining);
$z = $x.";".$y;

file_put_contents("files/".$team.".php",$z);

setcookie($team."personal", implode(",", $personal), time()+31536000);

header("Location: index.php");
exit;

?>