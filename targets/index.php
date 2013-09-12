<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="style/style.css">
    	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script src="js/targets.js"></script>
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
        <link rel="shortcut icon" href="files/rsclogo.ico">
    </head>
    
    <body>
    
        <?php include 'pubheader.php'; ?>
    
        <div class='header'>
            <div class='header-content'>
                <h1>Physical Team Weekly Targets</h1>
                <h2>A visual guide to meeting our targets</h2>
            </div>
        </div>
        <div class="main-content">
			<div class="admin">
				<button id="showControl">Click here to enter targets</button>
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
					<button id="inputTargets">Submit New Targets</button>
					<button id="hideControl">Hide input panel</button>
				</div>
			</div>
			<div class="peerReview">
				<h3>Peer Review</h3>					
                <div class="targetdiv" id="peerReviewDiv"><h4>Team</h4>                   
                    <div class="total">Target:
                        <div id="peerReviewNo">
                        </div>
                    </div>
                    <div class="remaining">Remaining:
                        <div id="peerReviewRemaining">
                        </div>
                    </div>
                    <button id="peerReviewButton">I've picked up a new manuscript!</button>
					<div class='barOuter'>
						<div class='barInner' id='bar2'>
							<span>0%</span>
						</div>
					</div>
                </div>
            </div>
            <div class="editing">
                <h3>Editing</h3>
                <div class="targetdiv" id="teamEditsDiv"><h4>Team</h4>
                    <div class="total">Target:
                        <div id="teamEditsNo">
                        </div>
                    </div>
                    <div class="remaining">Remaining:
                        <div id="teamEditsRemaining">
                        </div>
                    </div>
                    <button id="teamEditButton">I've done a team edit!</button>
					<div class='barOuter'>
						<div class='barInner' id='bar0'>
							<span>0%</span>
						</div>
					</div>
                </div>
                <div class="targetdiv" id="nonTeamEditsDiv"><h4>Non-Team</h4>
                    <div class="total">Target:
                        <div id="nonTeamEditsNo">
                        </div>
                    </div>
                    <div class="remaining">Remaining:
                        <div id="nonTeamEditsRemaining">
                        </div>
                    </div>
                    <button id="nonTeamEditButton">I've done a non-team edit!</button>
					<div class='barOuter'>
						<div class='barInner' id='bar1'>
							<span>0%</span>
						</div>
					</div>
                </div>
            </div>
            <div class="proofing">
                <h3>Proofing</h3>
                <div class="targetdiv" id="teamProofsDiv"><h4>Team</h4>
                    <div class="total">Target:
                        <div id="teamProofsNo">
                        </div>
                    </div>
                    <div class="remaining">Remaining:
                        <div id="teamProofsRemaining">
                        </div>
                    </div>
                    <button id="teamProofButton">I've done a team proof!</button>
					<div class='barOuter'>
						<div class='barInner' id='bar3'>
							<span>0%</span>
						</div>
					</div>
                </div>
                <div class="targetdiv" id="nonTeamProofsDiv"><h4>Non-Team</h4>
                    <div class="total">Target:
                        <div id="nonTeamProofsNo">                            
                        </div>
                    </div>
                    <div class="remaining">Remaining:
                        <div id="nonTeamProofsRemaining">
                        </div>
                    </div>   
					<button id="nonTeamProofButton">I've done a non-team proof!</button>
					<div class='barOuter'>
						<div class='barInner' id='bar4'>
							<span>0%</span>
						</div>
					</div>					
                </div>                
            </div>
        </div>
    </body>

</html>