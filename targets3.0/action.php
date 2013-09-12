<?php
//action

$minus = $_GET['minus'];
$task = $_GET['task'];

$vals = file_get_contents("vals.php");

$arrayVals = explode(",",$vals);

switch ($task){
    case "p":
        $arrayVals[0] = $arrayVals[0] - $minus;
        break;
    case "e":
        $arrayVals[1] = $arrayVals[1] - $minus;
        break;
    case "pr":
        $arrayVals[2] = $arrayVals[2] - $minus;
        break;    
}
    
$finalVals = implode(",",$arrayVals);

file_put_contents("vals.php",$finalVals);

header("Location: test.php");
exit;

?>