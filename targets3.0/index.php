<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/main.js"></script>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	
		<?php
			$vals = file_get_contents("vals.php");
			$temp = explode (";", $vals);
			$targets = explode("," , $temp[0]);
			$remaining = explode("," , $temp[1]);
		?>
		<div class='title'>
		    <h1>Target Counter 3.0</h1>
		</div>
		<div class='teamSelect'>
		    <label>Team:
		        <select id='teamSelect'>
		            <option value='ana'>Analytical</option>
		            <option value='bio'>Biological</option>
		            <option value='gen'>General</option>
		            <option value='inorg'>Inorganic</option>
		            <option value='int'>Interfaces</option>
		            <option value='mat'>Materials</option>
		            <option value='org'>Organic</option>
		            <option value='app'>Organic Applications</option>
		            <option value='phys'>Physical</option>
		        </select>
		    </label>
		    <button id='defaultTeamButton'>Set as default team</button>
		</div>
		<div class='peerReview'>
		    <h2>Peer Review</h2>
		    <span id='peerReviewTarget'>Target:
		        <?php echo $targets[0]; ?>
		    </span>
		    <br/>
		    <span id='peerReviewRemaining'>Remaining:
		        <?php echo $remaining[0]; ?>
		    </span>
		    <br/>
		    <input type='text' id='peerReviewAmount' placeholder='1' class='amount'
		    />
		    <br/>
		    <a id='peerReviewButton' href='decrement.php?task=peerReview&amount=1' class='button'>Decrement</a>
		    <a href='update.php?task=peerReview' id='peerReviewUpdate' class='button update'>Update</a>
		    <a href='reset.php?task=peerReview' id='peerReviewReset' class='button reset'>Reset</a>
		</div>
		<div class='editing'>
		    <h2>Editing</h2>
		    <span id='editingTarget'>Target:
		        <?php echo $targets[1]; ?>
		    </span>
		    <br/>
		    <span id='editingRemaining'>Remaining:
		        <?php echo $remaining[1]; ?>
		    </span>
		    <br/>
		    <input type='text' id='editingAmount' placeholder='1' class='amount' />
		    <br/>
		    <a href='decrement.php?task=editing&amount=1' id='editingButton' class='button'>Decrement</a>
		    <a href='update.php?task=editing' id='editingUpdate' class='button update'>Update</a>
		    <a href='reset.php?task=editing' id='editingReset' class='button reset'>Reset</a>
		</div>
		<div class='proofing'>
		    <h2>Proofing</h2>
		    <span id='proofingTarget'>Target:
		        <?php echo $targets[2]; ?>
		    </span>
		    <br/>
		    <span id='proofingRemaining'>Remaining:
		        <?php echo $remaining[2]; ?>
		    </span>
		    <br/>
		    <input type='text' id='proofingAmount' placeholder='1' class='amount'
		    />
		    <br/>
		    <a href='decrement.php?task=proofing&amount=1' id='proofingButton' class='button'>Decrement</a>
		    <a href='update.php?task=proofing' id='proofingUpdate' class='button update'>Update</a>
		    <a href='reset.php?task=proofing' id='proofingReset' class='button reset'>Reset</a>
		</div>
	</body>
</html>