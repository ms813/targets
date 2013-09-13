$(document).ready(function(){
	$('.amount').change(function(){
		decrement(event);
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
	
	$('.reset').click(function(){
        reset(event);
	});
	
	$('.update').click(function(){
	   update(event);
	});
});

function decrement(event){
	var task = getParentTask(event);
	var amount = $('#' + task + 'Amount').val();
	$('#' + task + 'Button').attr("href", "action.php?task="+task+"&amount="+amount);
}

function reset(event){
    var task = getParentTask(event);
    var target = $('#' + task + 'Amount').val();
    $('#' + task + 'Reset').attr("href", "reset.php?task="+task+"&target="+target);
}

function update(event){
    var task = getParentTask(event);
    var target = $('#' + task + 'Amount').val();
    $('#' + task + 'Update').attr("href", "update.php?task="+task+"&target="+target);
}

function getParentTask(event){
    var parent = $(event.target).parent();
	return parent.attr('class');
}
