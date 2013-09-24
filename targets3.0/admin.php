<html>
	<head>	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	
	<body>
	<a class='button' href='index.php'>Main page</a>
	<?php 
	    $teams = array("Analytical", "Biological", "General", "Inorganic", "Interfaces","Materials","Organic","Organic Applications", "Physical");
	    $teamCodes = array("ana", "bio", "gen", "inorg", "int", "mat", "org", "app", "phys");
	    
	    $totalTarget;
	    $totalRemaining;
	    
	    echo "<table border='1'>";
		    echo "<tr>";
		        echo "<th>Team</th>";
		        echo "<th>Peer Review</th>";
		        echo "<th>Editing</th>";
		        echo "<th>Proofing</th>";
		    echo "</tr>";
		    
	    for($i = 0; $i < count($teams); $i++){
	        $vals = file_get_contents("files/".$teamCodes[$i] .".php");
	        $temp = explode (";", $vals);
		    $targets = explode("," , $temp[0]);
		    $remaining = explode("," , $temp[1]);
		    
		    $totalTarget[0] += $targets[0];
		    $totalTarget[1] += $targets[1];
		    $totalTarget[2] += $targets[2];
		    $totalRemaining[0] += $remaining[0];
		    $totalRemaining[1] += $remaining[1];
		    $totalRemaining[2] += $remaining[2];
		    
		    echo "<tr>";
		        echo "<td>".$teams[$i]."</td>";
		        echo "<td>".$remaining[0]."/".$targets[0]."</td>"; 
		        echo "<td>".$remaining[1]."/".$targets[1]."</td>"; 
		        echo "<td>".$remaining[2]."/".$targets[2]."</td>"; 
		    echo "</tr>";
	    }
	        echo "<tr>";
	            echo "<th>Totals</th>";
	            echo "<td>".$totalRemaining[0]."/".$totalTarget[0]."</td>";
	            echo "<td>".$totalRemaining[1]."/".$totalTarget[1]."</td>";
	            echo "<td>".$totalRemaining[2]."/".$totalTarget[2]."</td>";
	        echo "</tr>";
	        
	        $prP = round((1 - $totalRemaining[0]/$totalTarget[0])*100, 2);
	        $eP = round((1 - $totalRemaining[1]/$totalTarget[1])*100, 2);
	        $pP = round((1 - $totalRemaining[2]/$totalTarget[2])*100, 2);
	        
	        echo "<tr>";
	            echo "<th>% Complete</th>";
	            echo "<td>".$prP."</td>";
	            echo "<td>".$eP."</td>";
	            echo "<td>".$pP."</td>";
	        echo "</tr>";
	    echo "</table>";
	    
	    
	?>
	</body>
</html>