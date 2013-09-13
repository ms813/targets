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
		<div class="admin">
		    <button id="showControl">Show Admin Controls</button>
		    <div id="control" hidden>
		        <h3>Enter this week's targets:</h3>
		        <label>New Manuscripts:
		            <input id="inputPeerReview" />
		        </label>
		        <br/>
		        <label>Team Edits:
		            <input id="inputTeamEdits" />
		        </label>
		        <br/>
		        <label>Non-Team Edits:
		            <input id="inputNonTeamEdits" />
		        </label>
		        <br/>
		        <label>Team Proofs:
		            <input id="inputTeamProofs" />
		        </label>
		        <br/>
		        <label>Non-Team Proofs:
		            <input id="inputNonTeamProofs" />
		        </label>
		        <br/>
		        <button id="resetTargets">Reset Targets</button>
		        <button id="updateTargets">Update Targets</button>
		    </div>
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
		        <input type='text' id='peerReviewAmount' placeholder='1' class='amount'/>
		        <br/>
		        <a id='peerReviewButton' href='action.php?task=peerReview&amount=1' class='button'>Decrement</a>
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
		        <input type='text' id='editingAmount' placeholder='1' class='amount'/>
		        <br/>
		        <a href='action.php?task=editing&amount=1' id='editingButton' class='button'>Decrement</a>
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
		        <input type='text' id='proofingAmount' placeholder='1' class='amount'/>
		        <br/>
		        <a href='action.php?task=proofing&amount=1' id='proofingButton' class='button'>Decrement</a>
		    </div>
	</body>
		
</html>