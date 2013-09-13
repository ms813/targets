<?php
    $target = $_GET['target'];
	$task = $_GET['task'];
	
	$vals = file_get_contents("vals.php");
	$temp = explode (";", $vals);
	$targets = explode("," , $temp[0]);
	$remaining = explode("," , $temp[1]);
	
	
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

$x = implode("," , $targets);
$y = implode("," , $remaining);
$z = $x.";".$y;

file_put_contents("vals.php",$z);
	
	header("Location: index.php");
    exit;
?>