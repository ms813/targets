<?php
//test
$vals = file_get_contents("vals.php");
$arrayVals = explode(",",$vals);

echo "<h1>prooof</h1>";
echo "<p>".$arrayVals[0]." remaining</p>";

if($arrayVals[0] > 0)
    echo "<p><a href='action.php?task=p&minus=1'>-1</a></p>";    
else
    echo "<p>Target met</p>";

echo "<h1>edit</h1>";
echo "<p>".$arrayVals[1]." remaining</p>";

if($arrayVals[1] > 0)
    echo "<p><a href='action.php?task=e&minus=1'>-1</a></p>";    
else
    echo "<p>Target met</p>";

echo "<h1>peer review</h1>";
echo "<p>".$arrayVals[2]." remaining</p>";
if($arrayVals[2] > 0)
    echo "<p><a href='action.php?task=pr&minus=1'>-1</a></p>";    
else
    echo "<p>Target met</p>";

?>

<style>
a {
    text-decoration: none;
    border: 1px solid #333;
    border-top: 1px solid #888;
    padding: 5px 10px;
    background: -webkit-linear-gradient(top,#ddd,#bbb);
    box-shadow: 0 2px 5px #333;
    border-radius:5px;
    color:black;
}
a:hover{
    background: #ccc;
}
</style>