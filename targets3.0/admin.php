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
		    
		    echo "<tr>";
		        echo "<td>".$teams[$i]."</td>";
		        echo "<td>".$remaining[0]."/".$targets[0]."</td>"; 
		        echo "<td>".$remaining[1]."/".$targets[1]."</td>"; 
		        echo "<td>".$remaining[2]."/".$targets[2]."</td>"; 
		    echo "</tr>";
	    }
	    echo "</table>";
	?>
	</body>
</html>