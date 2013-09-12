<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/main.js"></script>
	</head>
	<body>
		<?php
			$vals = file_get_contents("vals.php");
			$temp = explode (";", $vals);
			$targets = explode("," , $temp[0]);
			$remaining = explode("," , $temp[1]);
		?>
		<div class='peerReview'>
			<h2>Peer Review</h2>
			<span id='peerReviewTarget'>Target: <?php echo $targets[0]; ?></span><br/>
			<span id='peerReviewRemaining'>Remaining: <?php echo $remaining[0]; ?></span><br/>
			<input type='text' id='peerReviewAmount' placeholder='1'/><br/>
			<a id='peerReviewButton' href='action.php?task=peerReview&amount=1'>Decrement</a>
		</div>
		<div class='editing'>
			<h2>Editing</h2>
			<span id='peerReviewTarget'>Target: <?php echo $targets[1]; ?></span><br/>
			<span id='peerReviewRemaining'>Remaining: <?php echo $remaining[1]; ?></span><br/>
			<input type='text' id='editingAmount' placeholder='1'/><br/>
			<a href='action.php?task=editing&amount=1' id='editingButton'>Decrement</a>
		</div>
		<div class='proofing'>
			<h2>Proofing</h2>
			<span id='peerReviewTarget'>Target: <?php echo $targets[2]; ?></span><br/>
			<span id='peerReviewRemaining'>Remaining: <?php echo $remaining[2]; ?></span><br/>
			<input type='text' id='proofingAmount' placeholder='1'/><br/>
			<a href='action.php?task=proofing&amount=1' id='proofingButton'>Decrement</a>
		</div>
	</body>
	
</html>