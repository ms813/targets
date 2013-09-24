<html>
	<head>	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	
	<body>
		<script>		
			$(document).ready(function(){
			var counter = 0;			
				$('#colour').click(function(){
				if(counter % 2 === 0){
				$("#overview td").each(function(){
					
					var content = $(this).html();
					var vals = content.split("/");
					if(vals[1] == undefined){
						return true;
					} else{
					
					var ratio = vals[0]/vals[1];					
					
					var red;
					var green;

					if(vals[1] == 0){
						$(this).css('background-color', '#00FF00');
					} else{
						if(ratio > 0.5){
							red = 255;
							green = parseInt(-2*255*ratio+(2*255));
						} else{
							green = 255;
							red = parseInt(2*255*ratio);
						}	
						var rgbColor = 'rgb(' + red + ',' + green+ ', 0)';
						var hexColor = rgb2hex(rgbColor);
						$(this).css('background-color', rgbColor);
					}
					}
				});
				} else{
					$("#overview td").each(function(){
						$(this).css('background-color', 'white');
					});
				}
				counter++;
				});
				$('#colour').trigger('click');
			});
			
			function rgb2hex(rgb) {
				rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
					function hex(x) {
						return ("0" + parseInt(x).toString(16)).slice(-2);
					}
				return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
			}
		</script>
	<div><a class='button' href='index.php'>Main page</a></div><br/>
	<?php 
	    $teams = array("Analytical", "Biological", "General", "Inorganic", "Interfaces","Materials","Organic","Organic Applications", "Physical");
	    $teamCodes = array("ana", "bio", "gen", "inorg", "int", "mat", "org", "app", "phys");
	    
	    echo "<table id='overview' border='1'>";
		    echo "<tr>";
		        echo "<th>Team</th>";
		        echo "<th>Peer Review</th>";
		        echo "<th>Editing</th>";
		        echo "<th>Proofing</th>";
				echo "<th>Hours Remaining*</th>";
				echo "<th>% Hours Complete</th>";
		    echo "</tr>";
			
			$totalTarget = [0,0,0,0];
			$totalRemaining = [0,0,0,0];
		    
	    for($i = 0; $i < count($teams); $i++){
	        $vals = file_get_contents("files/".$teamCodes[$i] .".php");
	        $temp = explode (";", $vals);
		    $targets = explode("," , $temp[0]);
		    $remaining = explode("," , $temp[1]);
		    
			$totalHours = round($targets[0]/3 + $targets[1]*2 + $targets[2], 2);
			$remainingHours = round($remaining[0]/3 + $remaining[1]*2 + $remaining[2], 2);
			
			//running total of targets met for totals row
		    $totalTarget[0] += $targets[0];
		    $totalTarget[1] += $targets[1];
		    $totalTarget[2] += $targets[2];
			$totalTarget[3] += $totalHours;
		    $totalRemaining[0] += $remaining[0];
		    $totalRemaining[1] += $remaining[1];
		    $totalRemaining[2] += $remaining[2];	
			$totalRemaining[3] += $remainingHours;
					    
		    echo "<tr>";
		        echo "<td>".$teams[$i]."</td>";
		        echo "<td>".$remaining[0]."/".$targets[0]."</td>"; 
		        echo "<td>".$remaining[1]."/".$targets[1]."</td>"; 
		        echo "<td>".$remaining[2]."/".$targets[2]."</td>"; 
				echo "<td>".$remainingHours."/".$totalHours."</td>";
				echo "<td>".round((1 - $remainingHours/$totalHours)*100 , 2)."</td>";
		    echo "</tr>";
	    }
	        echo "<tr>";
	            echo "<th>Totals</th>";
	            echo "<td>".$totalRemaining[0]."/".$totalTarget[0]."</td>";
	            echo "<td>".$totalRemaining[1]."/".$totalTarget[1]."</td>";
	            echo "<td>".$totalRemaining[2]."/".$totalTarget[2]."</td>";
				echo "<td>".$totalRemaining[3]."/".$totalTarget[3]."</td>";
	        echo "</tr>";
	        
	        $prP = round((1 - $totalRemaining[0]/$totalTarget[0])*100, 2);
	        $eP = round((1 - $totalRemaining[1]/$totalTarget[1])*100, 2);
	        $pP = round((1 - $totalRemaining[2]/$totalTarget[2])*100, 2);
	        $tP = round((1 - $totalRemaining[3]/$totalTarget[3])*100, 2);
	        
	        echo "<tr>";
	            echo "<th>Departmental % Complete</th>";
	            echo "<th>".$prP."</th>";
	            echo "<th>".$eP."</th>";
	            echo "<th>".$pP."</th>";
	            echo "<th>".$tP."</th>";
	        echo "</tr>";
			echo "<tfoot>* Hours calculated using Peer review  - 20 mins, Editing - 2 hours, Proofing - 1 hour.</tfoot>";
	    echo "</table>";	
	?>
	<a class='action' id='colour'>Toggle Colour</a>
	</body>
</html>