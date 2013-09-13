$(document).ready(function(){
	$('input').change(function(){
		update(event);
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

function update(event){
	var parent = $(event.target).parent();
	var task = parent.attr('class');
	var amount = $('#' + task + 'Amount').val();
	$('#' + task + 'Button').attr("href", "action.php?task="+task+"&amount="+amount);
}
