<?php
    $newTarget = $_GET['amount'];
	$task = $_GET['task'];
	$team = $_GET['team'];

	$vals = file_get_contents("files/".$team.".php");
	$temp = explode (";", $vals);
	$targets = explode("," , $temp[0]);
	$remaining = explode("," , $temp[1]);
	
	//needs some work when $remaining - $dif < 0
	
if($newTarget != 1){	
switch ($task){
    case "peerReview":
        $dif = $newTarget - $targets[0];
		$targets[0] = $newTarget;
		$remaining[0] = $remaining[0] + $dif;
		if($remaining[0] < 0){
			$remaining[0] = 0;
		}		
        break;
    case "editing":
        $dif = $newTarget - $targets[1];
		$targets[1] = $newTarget;
		$remaining[1] = $remaining[1] + $dif;
		if($remaining[1] < 0){
			$remaining[1] = 0;
		}	
        break;
    case "proofing":
        $dif = $newTarget - $targets[2];
		$targets[2] = $newTarget;
		$remaining[2] = $remaining[2] + $dif;
		if($remaining[2] < 0){
			$remaining[2] = 0;
		}	
        break;    
}
}


$x = implode("," , $targets);
$y = implode("," , $remaining);
$z = $x.";".$y;

file_put_contents("files/".$team.".php",$z);

header("Location: index.php");
exit;
?>