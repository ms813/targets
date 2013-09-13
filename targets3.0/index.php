<?php
			$team = $_COOKIE['team'];
			$vals = file_get_contents("files/".$team.".php");
			$temp = explode (";", $vals);
			$targets = explode("," , $temp[0]);
			$remaining = explode("," , $temp[1]);
?>
<html>
	<head>
	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$('#teamSelect').val('<?php echo $team ?>');
			var team = $('#teamSelect option:selected').html()
			$('.currentTeam').text("Currently viewing: " + team);
			
			$('#teamSelect').change(function(){
				changeTeam.submit();
			});
		});
		</script>
		<script src="js/main.js"></script>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
		<div class='title'>
		    <h1>Target Counter 3.0</h1>
			<h2 class='currentTeam'>Currently viewing:</h2>
		</div>
		<div class='teamSelect'>
		<form action='cookies.php' method='post' name='changeTeam'>
		    <label>Change team:
		        <select name='team' id='teamSelect'>
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
		</form>
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
		    <a id='peerReviewDecrement' href='decrement.php?task=peerReview&amount=1' class='action decrement'>Decrement</a>
		    <a href='update.php?task=peerReview' id='peerReviewUpdate' class='action update'>Update</a>
		    <a href='reset.php?task=peerReview' id='peerReviewReset' class='action reset'>Reset</a>
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
		    <a href='decrement.php?task=editing&amount=1' id='editingDecrement' class='action decrement'>Decrement</a>
		    <a href='update.php?task=editing' id='editingUpdate' class='action update'>Update</a>
		    <a href='reset.php?task=editing' id='editingReset' class='action reset'>Reset</a>
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
		    <a href='decrement.php?task=proofing&amount=1' id='proofingDecrement' class='action decrement'>Decrement</a>
		    <a href='update.php?task=proofing' id='proofingUpdate' class='action update'>Update</a>
		    <a href='reset.php?task=proofing' id='proofingReset' class='action reset'>Reset</a>
		</div>
	</body>
</html>