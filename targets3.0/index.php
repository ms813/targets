<?php
	if (isset($_COOKIE["team"])){
	$team = $_COOKIE['team'];
	} else $team = 'ana';
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
		<div class='header'>
			<div class='title'>
				<h1>Target Counter 3.0</h1>				
			</div>
			<div class='admin right'>
				<label>Admin Login:
					<input class='pass' id='adminPass' type='text'/>
					<button id='adminButton'>Enter</button>
					<button id='adminLogout'>Log out</button>
					<a id='adminPage' class='button' href='admin.php'>Admin Page</a>
				</label><br/>
				
			</div>
		</div>	
		<div class='main-content'>
		<div class='teamSelect'>
		<h2 class='currentTeam'>Currently viewing:</h2>
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
		<div id='peerReview' class='counter'>
		    <h2>Peer Review</h2>
		    Target:<span id='peerReviewTarget'>
		        <?php echo $targets[0]; ?>
		    </span>
		    <br/>
		    Remaining:<span id='peerReviewRemaining'>
		        <?php echo $remaining[0]; ?>
		    </span>
		    <br/>
		    <input type='text' id='peerReviewAmount' placeholder='1' class='amount'
		    />
		    <br/>
		    <a id='peerReviewDecrement' href='decrement.php?task=peerReview&amount=1' class='action decrement'>Decrement</a>
		    <a href='update.php?task=peerReview' id='peerReviewUpdate' class='action update'>Update</a>
		    <a href='reset.php?task=peerReview' id='peerReviewReset' class='action reset'>Reset</a>
			<div class='barOuter'>
				<div class='barInner' id='peerReviewBar'>
					<span>0%</span>
				</div>
			</div>
		</div>
		<div id='editing' class='counter'>
		    <h2>Editing</h2>
		    Target:<span id='editingTarget'>
		        <?php echo $targets[1]; ?>
		    </span>
		    <br/>
		    Remaining:<span id='editingRemaining'>
		        <?php echo $remaining[1]; ?>
		    </span>
		    <br/>
		    <input type='text' id='editingAmount' placeholder='1' class='amount' />
		    <br/>
		    <a href='decrement.php?task=editing&amount=1' id='editingDecrement' class='action decrement'>Decrement</a>
		    <a href='update.php?task=editing' id='editingUpdate' class='action update'>Update</a>
		    <a href='reset.php?task=editing' id='editingReset' class='action reset'>Reset</a>
			<div class='barOuter'>
				<div class='barInner' id='editingBar'>
					<span>0%</span>
				</div>
			</div>
		</div>
		<div id='proofing' class='counter'>
		    <h2>Proofing</h2>
		    Target:<span id='proofingTarget'>
		        <?php echo $targets[2]; ?>
		    </span>
		    <br/>
		    Remaining:<span id='proofingRemaining'>
		        <?php echo $remaining[2]; ?>
		    </span>
		    <br/>
		    <input type='text' id='proofingAmount' placeholder='1' class='amount'
		    />
		    <br/>
		    <a href='decrement.php?task=proofing&amount=1' id='proofingDecrement' class='action decrement'>Decrement</a>
		    <a href='update.php?task=proofing' id='proofingUpdate' class='action update'>Update</a>
		    <a href='reset.php?task=proofing' id='proofingReset' class='action reset'>Reset</a>
			<div class='barOuter'>
				<div class='barInner' id='proofingBar'>
					<span>0%</span>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>