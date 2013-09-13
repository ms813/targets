var team;

$(document).ready(function(){
	
	team = $('#teamSelect').val();

	$('.action').click(function(){
		action(event);
	});
});

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
	return parent.attr('class');
}

function capitaliseFirstLetter(string)
{
    return string.charAt(0).toUpperCase() + string.slice(1);
}