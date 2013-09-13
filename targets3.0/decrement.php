<?php
//action
//testing git again
	$amount = $_GET['amount'];
	$task = $_GET['task'];

	$vals = file_get_contents("vals.php");
	$temp = explode (";", $vals);
	$targets = explode("," , $temp[0]);
	$remaining = explode("," , $temp[1]);

switch ($task){
    case "peerReview":
        $remaining[0] = $remaining[0] - $amount;
        break;
    case "editing":
        $remaining[1] = $remaining[1] - $amount;
        break;
    case "proofing":
        $remaining[2] = $remaining[2] - $amount;
        break;    
}
$x = implode("," , $targets);
$y = implode("," , $remaining);
$z = $x.";".$y;

file_put_contents("vals.php",$z);

header("Location: index.php");
exit;

?>