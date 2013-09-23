var team;

$(document).ready(function(){
	
	init();
	
	team = $('#teamSelect').val();

	$('.action').click(function(){
		action(event);
	});
	
	$('#adminButton').click(function(){
		adminLogin();
	});
	
	$('#adminLogout').click(function(){
		setCookie('admin', 'expired', -1);
		location.reload();
	});
	
});

function init(){
	updateBars();	
	checkZero();
	checkAdmin();
}

function adminLogin(){
	var pass = 'admin';
	var attempt = $('#adminPass').val();
	if(pass == attempt){		
		setCookie('admin',true, 30);
		checkAdmin();
	} else{	
		alert('Incorrect password!');
	}	
}

function checkAdmin(){
	if(getCookie('admin')){
		$('.update').show(1000);
		$('.reset').show(1000);
		$('#adminPage').show(1000);
	} else{
		$('.update').hide();
		$('.reset').hide();
		$('#adminPage').hide();
	}
}

function checkZero(){
	if(parseInt($('#peerReviewRemaining').text()) <= 0){
		$('#peerReviewDecrement').click(function(e){
			e.preventDefault();
		});
	}
	if(parseInt($('#editingRemaining').text()) <= 0){
		$('#editingDecrement').click(function(e){
			e.preventDefault();
		});
	}
	if(parseInt($('#proofingRemaining').text()) <= 0){
		$('#proofingDecrement').click(function(e){
			e.preventDefault();
		});
	}
}

function action(event){
	var task = getParentTask(event);
	var amount = $('#' + task + 'Amount').val();
	
	if(amount === ""){
		amount = 1;
	}
	
	var a = $(event.target).attr('class').split(" ");
	var act = capitaliseFirstLetter(a[1]); // this is to get the id correct e.g. peerReviewDecrement
	$('#' + task + act).attr("href", a[1]+".php?team="+team+"&task="+task+"&amount="+amount);
}

function getParentTask(event){
    var parent = $(event.target).parent();
	return parent.attr('id');
}

function capitaliseFirstLetter(string)
{
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function updateBars(){
	//peer review percentage completion bar
	var pRT = parseInt($('#peerReviewTarget').text());
	var pRR = parseInt($('#peerReviewRemaining').text());
	var pRP = Math.round((1 - pRR/pRT) * 100);
	$('#peerReviewBar').width(pRP+"%");
	$('#peerReviewBar').html('<span>'+pRP+'%</span>');
	
	//editing percentage completion bar
	var eT = parseInt($('#editingTarget').text());
	var eR = parseInt($('#editingRemaining').text());
	var eP = Math.round((1 - eR/eT) * 100);
	$('#editingBar').width(eP+"%");
	$('#editingBar').html('<span>'+eP+'%</span>');
	
	//proofing percentage completion bar
	var pT = parseInt($('#proofingTarget').text());
	var pR = parseInt($('#proofingRemaining').text());
	var pP = Math.round((1 - pR/pT) * 100);
	$('#proofingBar').width(pP+"%");
	$('#proofingBar').html('<span>'+pP+'%</span>');

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