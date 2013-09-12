/*
*
Target counter 2.0

Some notes on the filing system:
    Each team has its own file, of 2 * 5 comma separated values, separated with a ;
    The first 5 values are the targets, the second 5 are the remaining number
    e.g.
    
    10,9,8,7,6;5,4,3,2,1

    Peer review:        target = 10, remaining = 5;
    team edits:         target = 9, remaining = 4;
    non-team edits:     target = 8, remaining = 3;
    team proofs:        target = 7, remaining = 2;
    non-team proofs:    target = 6, remaining = 1.
*
*/


//global variables
var team;
var activities = new Array('peerReview', 'teamEdits', 'nonTeamEdits', 'teamProofs', 'nonTeamProofs');


//on document load
$(document).ready(function() {
    init(team);

    $('#defaultTeamButton').click(function() {
        var t = $('#teamSelect').val();
        setTeam(t);
    });

    $('.decrement').click(function() {
        submit(-1);
    });

    $('.increment').click(function() {
        submit(1);
    });
	
	$('#teamSelect').change(function(){
			changeTeam($('#teamSelect').val());
	});
	
	$('#showControl').click(function(){
		if ($('#control').is(":visible")){
			$('#control').hide(400);
			$('#showControl').text("Show Admin Controls");
		} else{
			$('#control').show(400);
			$('#showControl').text("Hide Admin Controls");
		}
	});

});


//functions

function init() {
    team = getDefaultTeam();
	loadAndUpdate();
    $('#teamSelect').val(team);
}

function loadAndUpdate() {
    $.get('files/' + team + ".txt", function(file) {
        update(getTargets(file), getRemaining(file));
    });
}

function changeTeam(t){
	team = t;
	loadAndUpdate();
	if(team !== getDefaultTeam()){
		$('.increment').attr('disabled', true);
		$('.decrement').attr('disabled', true);
	} else{
		$('.increment').attr('disabled', false);
		$('.decrement').attr('disabled', false);
	}
}

function update(targets, remaining) {
    if (targets !== null) {
        $('.target').text(function(i) {
            return "Target: " + targets[i % targets.length];
        });
    }

    if (remaining !== null) {
        $('.remaining').text(function(i) {
            return "Remaining: " + remaining[i % remaining.length];
        });
    }
}

function submit(sign) {
    var parent = $(event.target).parent();
    var activity = parent.attr('class');

    var amount = parent.find('.amount').val();
    if (amount === "") {
        amount = 1;
    }
    setRemaining(activity, sign * amount);
}

function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays === null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

function getCookie(c_name) {
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1) {
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1) {
        c_value = null;
    }
    else {
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1) {
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start, c_end));
    }
    return c_value;
}

function setTeam(team) {
    setCookie('teamCookie', team, 30);
    alert('Default team changed');
	changeTeam(team);
    location.reload(true);
}

function getDefaultTeam() {
	var c = getCookie('teamCookie');
    if (c !== null) {
        return c;
    } else{
		firstTimeSetup();
		return 'ana';
	}
	
}
	
function firstTimeSetup(){
	alert("Please select a default team!");
}

function setRemaining(activity, amount) {
    $.get('files/' + team + ".txt", function(file) {
        var remaining = getRemaining(file);
		
		for(var i=0; i < activities.length; i++){
			if(activity == activities[i]){						
				remaining[i] = parseInt(remaining[i]) + amount;
				saveAndUpdate(null, remaining);
			} 
		}       
    });
}

function saveAndUpdate(targets, remaining){

	if(targets !== null && remaining !== null){
		joinAndSave(targets, remaining);
	} else{	
		if(targets === null){
			$.get('files/' + team + ".txt", function(file) {
				targets = getTargets(file);
				joinAndSave(targets, remaining);			
			});
		}
		if(remaining === null){
			$.get('files/' + team + ".txt", function(file) {
				remaining = getRemaining(file);
				joinAndSave(targets, remaining);	
			});	
		}
	}
	
}

function joinAndSave(targets, remaining){
	var t = targets.join(",");
	var r = remaining.join(",");
	var x = [t,r];
	var content = x.join(";");
			
	$.post("save.php", {data : content, path : 'files/' + team + ".txt"});
	update(targets, remaining);
}

function getTargets(file){
	var fileContent = file.split(";");
    return fileContent[0].split(",");	
}

function getRemaining(file){
	var fileContent = file.split(";");
    return fileContent[1].split(",");
}
function endsWith(str, suffix) {
    return str.indexOf(suffix, str.length - suffix.length) !== -1;
}