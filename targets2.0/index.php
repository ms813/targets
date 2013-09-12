<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="js/main.js"></script>
        <link rel="shortcut icon" href="files/rsclogo.ico">
        <!--<?php include 'pubheader.php'; ?>-->
    </head>
    
    <body>
        <div class='page-content'>
            <div class='title'>
                <h1>Target Counter 2.0</h1>
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
                    <label> New Manuscripts:
    					<input id="inputPeerReview"/>
					</label><br/>
					<label> Team Edits:
						<input id="inputTeamEdits"/>
					</label><br/>
					<label> Non-Team Edits:
						<input id="inputNonTeamEdits"/>
					</label><br/>					
					<label> Team Proofs:
						<input id="inputTeamProofs"/>
					</label><br/>
					<label> Non-Team Proofs:
						<input id="inputNonTeamProofs"/>
					</label><br/>
					<button id="resetTargets">Reset Targets</button>
					<button id="updateTargets">Update Targets</button>
				</div>
			</div>			
        
			<div class='counters'>
				<div class='box'>
					<h3>Peer Review</h3>
					<div class='peerReview'>
						<h4>Team:</h4>
						<div class='target'>Target:</div>
						<div class='remaining'>Remaining:</div>
						<label>Enter amount:
							<input type='text' class='amount'/>
						</label>
						<button class='decrement'>Decrement</button>
						<button class='increment'>Increment</button>
					</div>
				</div>
				<div class='box'>
					<h3>Editing</h3>
					<div class='teamEdits'>
						<h4>Team:</h4>
						<div class='target'>Target:</div>
						<div class='remaining'>Remaining:</div>
						<label>Enter amount:
							<input type='text' class='amount'/>
						</label>
						<button class='decrement'>Decrement</button>
						<button class='increment'>Increment</button>
					</div>
					<div class='nonTeamEdits'>
						<h4>Non-team:</h4>
						<div class='target'>Target:</div>
						<div class='remaining'>Remaining:</div>
						<label>Enter amount:
							<input type='text' class='amount'/>
						</label>
						<button class='decrement'>Decrement</button>
						<button class='increment'>Increment</button>
					</div>
				</div>
				<div class='box'>
					<h3>Proofing</h3>
					<div class='teamProofs'>
						<h4>Team:</h4>
						<div class='target'>Target:</div>
						<div class='remaining'>Remaining:</div>
						<label>Enter amount:
							<input type='text' class='amount'/>
						</label>
						<button class='decrement'>Decrement</button>
						<button class='increment'>Increment</button>
					</div>
					<div class='nonTeamProofs'>
						<h4>Non-team:</h4>
						<div class='target'>Target:</div>
						<div class='remaining'>Remaining:</div>
						<label>Enter amount:
							<input type='text' class='amount'/>
						</label>
						<button class='decrement'>Decrement</button>
						<button class='increment'>Increment</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

