$(document).ready(function(){
	$('input').change(function(){
		update(event);
	});
});

function update(event){
	var parent = $(event.target).parent();
	var task = parent.attr('class');
	var amount = $('#' + task + 'Amount').val();
	$('#' + task + 'Button').attr("href", "action.php?task="+task+"&amount="+amount);
}
