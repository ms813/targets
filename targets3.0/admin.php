<html>
	<head>	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	
	<body>
	<a href='index.php'>Main page</a>
	<?php 
	    $teams = array("Analytical", "Biological", "General", "Inorganic", "Interfaces","Materials","Organic","Organic Applications", "Physical");
	    $teamCodes = array("ana", "bio", "gen", "inorg", "int", "mat", "org", "app", "phys");
	    
	    for($i = 0; $i < count($teams); $i++){
	        $vals = file_get_contents("files/".$teamCodes[$i] .".php");
	        $temp = explode (";", $vals);
		    $targets = explode("," , $temp[0]);
		    $remaining = explode("," , $temp[1]);
		    
		    echo "<div class='team'>".$teams[$i];
		    echo "<div class='counter'>Peer Review<br/>";
		    echo $remaining[0]."/".$targets[0]; 
		    echo "</div>";
		    echo "<div class='counter'>Editing<br/>";
		    echo $remaining[1]."/".$targets[1]; 
		    echo "</div>";
		    echo "<div class='counter'>Proofing<br/>";
		    echo $remaining[2]."/".$targets[2]; 
		    echo "</div>";
		    echo "</div>";
	    }
	    
	    
		$vals = file_get_contents("files/ana.php");
		$temp = explode (";", $vals);
		$targets = explode("," , $temp[0]);
		$remaining = explode("," , $temp[1]);		
	?>
	</body>
</html>