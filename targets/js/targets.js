$(document).ready(function(){    
    
    var targets;
    var remaining;
    
	init();
	
	function init(){
		loadTargets();
		loadRemaining();
        setInterval(function(){location.reload(true)}, 300000);
	}
	
			function loadTargets(){
				$.get('files/targets.txt', function(file){
					targets = file.split(",");	
					$('#teamEditsNo').html(targets[0]);
					$('#nonTeamEditsNo').html(targets[1]);
					$('#peerReviewNo').html(targets[2]);
					$('#teamProofsNo').html(targets[3]);
					$('#nonTeamProofsNo').html(targets[4]);
				});	
			}			
						
			function updateRemaining(number, button, div, txt){		
				$.get('files/remaining.txt', function(file){
					var x = file.split(",");
					
					if(x[number] != remaining[number]){
						//if the number on disk doesnt match the local number, update the local number
						remaining[number] = x[number];
					} 
					if(x[number] <=0){
						alert("Target already met!");						
					} else{
						remaining[number]--;							
					}			
					saveRemaining();
					updateColor(number, div);
					updateBar(number);						
					checkZero(number, button);		
					$(txt).html(remaining[number]);						
				});				
			}
			
			function loadRemaining(){
				$.get('files/remaining.txt', function(file){
					remaining = file.split(",");	
					$('#teamEditsRemaining').html(remaining[0]);
					$('#nonTeamEditsRemaining').html(remaining[1]);
					$('#peerReviewRemaining').html(remaining[2]);
					$('#teamProofsRemaining').html(remaining[3]);
					$('#nonTeamProofsRemaining').html(remaining[4]);		
                    checkAllZero();
        	        updateAllColors();		
				    updateAllBars();
				});	                
			}	

			function updateAllBars(){
				for(var i = 0; i <= targets.length; i++){
					updateBar(i);					
				}
			}
			
			function updateBar(number){
				var per = parseInt((1-remaining[number]/targets[number])*100);
				$('#bar'+number).width(per+'%')		
				$('#bar'+number).html('<span>'+per+'%</span>');
			}
			
			$('#showControl').click(function(){
				$('#control').show(400);
			});
			
			$('#hideControl').click(function(){
				$('#control').hide(400);
			});
			
			$('#inputTargets').click(function(){
				
				targets[0] = $('#inputTeamEdits').val();
				targets[1] = $('#inputNonTeamEdits').val();
				targets[2] = $('#inputPeerReview').val();
				targets[3] = $('#inputTeamProofs').val();
				targets[4] = $('#inputNonTeamProofs').val();
				var check = true;
				
				for(var i = 0; i < targets.length; i++){
					if(targets[i] === ""){
						check = false;
					}					
				}
				
				if(!check){
						alert("Please ensure all boxes are filled!");
				} else{					
					saveTargets();
					resetRemaining();
					location.reload(true);				
				}
				
				
			});

			$('#teamEditButton').click(function() {
				updateRemaining(0, '#teamEditButton', '#teamEditsDiv', '#teamEditsRemaining');
			});
			
			$('#nonTeamEditButton').click(function() {
                updateRemaining(1, '#nonTeamEditButton', '#nonTeamEditsDiv', '#nonTeamEditsRemaining');
			});
			
			$('#peerReviewButton').click(function() {
				updateRemaining(2, '#peerReviewButton', '#peerReviewDiv', '#peerReviewRemaining');
			});
			
			$('#teamProofButton').click(function() {
				updateRemaining(3, '#teamProofButton', '#teamProofsDiv', '#teamProofsRemaining');
			});
			
			$('#nonTeamProofButton').click(function() {
				updateRemaining(4, '#nonTeamProofButton', '#nonTeamProofsDiv', '#nonTeamProofsRemaining');
			});
			
			function updateColor(number, div){
				var ratio = remaining[number]/targets[number];
				var red;
				var green;

                if(targets[number] == 0){
                    $(div).css('background-color', '#00FF00');
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
				    $(div).css('background-color', hexColor);
                }
                
			}
			
			function updateAllColors(){
				updateColor(0, '#teamEditsDiv');
				updateColor(1, '#nonTeamEditsDiv');
				updateColor(2, '#peerReviewDiv');
				updateColor(3, '#teamProofsDiv');
				updateColor(4, '#nonTeamProofsDiv');				
			}
			
			function rgb2hex(rgb) {
				rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
					function hex(x) {
						return ("0" + parseInt(x).toString(16)).slice(-2);
					}
				return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
			}
			
			function saveRemaining(){
				var r = remaining.join(",");
				$.post("saveRemaining.php", {data : r});
			}		

			function saveTargets(){
				var r = targets.join(",");
				$.post("saveTargets.php", {data : r});
				alert("Targets updated!");
			}
			
			function resetRemaining(){
				for(var i = 0; i < targets.length; i++){	
					remaining[i] = targets[i];
				}
				saveRemaining();
				loadRemaining();
			}
			
			function checkZero(number, button){
				if(remaining[number] <= 0){
					$(button).attr('disabled','disabled');
					targetAchieved(button);
				}	
			}

			function checkAllZero(){
				if(remaining[0] <= 0){
					checkZero(0, '#teamEditButton');
				} 
				if(remaining[1] <= 0){
					checkZero(1, '#nonTeamEditButton');
				}
				if(remaining[2] <= 0){
					checkZero(2, '#peerReviewButton');
				} 
				if(remaining[3] <= 0){
					checkZero(3, '#teamProofButton');
				} 
				if(remaining[4] <= 0){
					checkZero(4, '#nonTeamProofButton');
				}				
			}
			
			function targetAchieved(button){
				$(button).css('background-color', '#99FF99');
				$(button).html("Target met!");
			}
		});