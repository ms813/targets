<?php
    $target = $_GET['amount'];
	$task = $_GET['task'];
	$team = $_GET['team'];

	$vals = file_get_contents("files/".$team.".php");
	$temp = explode (";", $vals);
	$targets = explode("," , $temp[0]);
	$remaining = explode("," , $temp[1]);
	
if($target > 0){	
switch ($task){
    case "peerReview":
        $targets[0] = $target;
        $remaining[0] = $target;
        break;
    case "editing":
        $targets[1] = $target;
        $remaining[1] = $target;
        break;
    case "proofing":
        $targets[2] = $target;
        $remaining[2] = $target;
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