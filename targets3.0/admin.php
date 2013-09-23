<html>
	<head>	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	
	<body>
	<a href='index.php'>Main page</a>
	<div class='team'>Analytical
	<?php 
		$vals = file_get_contents("files/ana.php");
		$temp = explode (";", $vals);
		$targets = explode("," , $temp[0]);
		$remaining = explode("," , $temp[1]);		
	?>
		<div class='counter'>Peer Review<br/>
			Target:
			<span>
		        <?php echo $targets[0]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[0]; ?>
		    </span>
		</div>
		<div class='counter'>Editing<br/>
			Target:
			<span>
		        <?php echo $targets[1]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[1]; ?>
		    </span>
		</div>
		<div class='counter'>Proofing<br/>
			Target:
			<span>
		        <?php echo $targets[2]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[2]; ?>
		    </span>
		</div>
	</div>
	<div class='team'>Biological
		<?php 
		$vals = file_get_contents("files/bio.php");
		$temp = explode (";", $vals);
		$targets = explode("," , $temp[0]);
		$remaining = explode("," , $temp[1]);		
		?>
		<div class='counter'>Peer Review<br/>
			Target:
			<span>
		        <?php echo $targets[0]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[0]; ?>
		    </span>
		</div>
		<div class='counter'>Editing<br/>
			Target:
			<span>
		        <?php echo $targets[1]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[1]; ?>
		    </span>
		</div>
		<div class='counter'>Proofing<br/>
			Target:
			<span>
		        <?php echo $targets[2]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[2]; ?>
		    </span>
		</div>
	</div>
	<div class='team'>General
		<?php 
		$vals = file_get_contents("files/gen.php");
		$temp = explode (";", $vals);
		$targets = explode("," , $temp[0]);
		$remaining = explode("," , $temp[1]);		
		?>
		<div class='counter'>Peer Review<br/>
			Target:
			<span>
		        <?php echo $targets[0]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[0]; ?>
		    </span>
		</div>
		<div class='counter'>Editing<br/>
			Target:
			<span>
		        <?php echo $targets[1]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[1]; ?>
		    </span>
		</div>
		<div class='counter'>Proofing<br/>
			Target:
			<span>
		        <?php echo $targets[2]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[2]; ?>
		    </span>
		</div>
	</div>
	<div class='team'>Inorganic
		<?php 
		$vals = file_get_contents("files/inorg.php");
		$temp = explode (";", $vals);
		$targets = explode("," , $temp[0]);
		$remaining = explode("," , $temp[1]);		
		?>
		<div class='counter'>Peer Review<br/>
			Target:
			<span>
		        <?php echo $targets[0]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[0]; ?>
		    </span>
		</div>
		<div class='counter'>Editing<br/>
			Target:
			<span>
		        <?php echo $targets[1]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[1]; ?>
		    </span>
		</div>
		<div class='counter'>Proofing<br/>
			Target:
			<span>
		        <?php echo $targets[2]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[2]; ?>
		    </span>
		</div>
	</div>
	<div class='team'>Interfaces
		<?php 
		$vals = file_get_contents("files/int.php");
		$temp = explode (";", $vals);
		$targets = explode("," , $temp[0]);
		$remaining = explode("," , $temp[1]);		
		?>
		<div class='counter'>Peer Review<br/>
			Target:
			<span>
		        <?php echo $targets[0]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[0]; ?>
		    </span>
		</div>
		<div class='counter'>Editing<br/>
			Target:
			<span>
		        <?php echo $targets[1]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[1]; ?>
		    </span>
		</div>
		<div class='counter'>Proofing<br/>
			Target:
			<span>
		        <?php echo $targets[2]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[2]; ?>
		    </span>
		</div>
	</div>
	<div class='team'>Materials
		<?php 
		$vals = file_get_contents("files/mat.php");
		$temp = explode (";", $vals);
		$targets = explode("," , $temp[0]);
		$remaining = explode("," , $temp[1]);		
		?>
		<div class='counter'>Peer Review<br/>
			Target:
			<span>
		        <?php echo $targets[0]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[0]; ?>
		    </span>
		</div>
		<div class='counter'>Editing<br/>
			Target:
			<span>
		        <?php echo $targets[1]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[1]; ?>
		    </span>
		</div>
		<div class='counter'>Proofing<br/>
			Target:
			<span>
		        <?php echo $targets[2]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[2]; ?>
		    </span>
		</div>
	</div>
	<div class='team'>Organic
		<?php 
		$vals = file_get_contents("files/org.php");
		$temp = explode (";", $vals);
		$targets = explode("," , $temp[0]);
		$remaining = explode("," , $temp[1]);		
		?>
		<div class='counter'>Peer Review<br/>
			Target:
			<span>
		        <?php echo $targets[0]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[0]; ?>
		    </span>
		</div>
		<div class='counter'>Editing<br/>
			Target:
			<span>
		        <?php echo $targets[1]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[1]; ?>
		    </span>
		</div>
		<div class='counter'>Proofing<br/>
			Target:
			<span>
		        <?php echo $targets[2]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[2]; ?>
		    </span>
		</div>
	</div>
	<div class='team'>Organic Applications
		<?php 
		$vals = file_get_contents("files/app.php");
		$temp = explode (";", $vals);
		$targets = explode("," , $temp[0]);
		$remaining = explode("," , $temp[1]);		
		?>
		<div class='counter'>Peer Review<br/>
			Target:
			<span>
		        <?php echo $targets[0]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[0]; ?>
		    </span>
		</div>
		<div class='counter'>Editing<br/>
			Target:
			<span>
		        <?php echo $targets[1]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[1]; ?>
		    </span>
		</div>
		<div class='counter'>Proofing<br/>
			Target:
			<span>
		        <?php echo $targets[2]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[2]; ?>
		    </span>
		</div>
	</div>
	<div class='team'>Physical
		<?php 
		$vals = file_get_contents("files/phys.php");
		$temp = explode (";", $vals);
		$targets = explode("," , $temp[0]);
		$remaining = explode("," , $temp[1]);		
		?>
		<div class='counter'>Peer Review<br/>
			Target:
			<span>
		        <?php echo $targets[0]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[0]; ?>
		    </span>
		</div>
		<div class='counter'>Editing<br/>
			Target:
			<span>
		        <?php echo $targets[1]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[1]; ?>
		    </span>
		</div>
		<div class='counter'>Proofing<br/>
			Target:
			<span>
		        <?php echo $targets[2]; ?>
		    </span>
		    <br/>
		    Remaining:
			<span>
		        <?php echo $remaining[2]; ?>
		    </span>
		</div>
	</div>
	</body>
</html>