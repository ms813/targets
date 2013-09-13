$(document).ready(function(){
	$('.amount').change(function(){
		decrement(event);
	});	
	
	$('.button').click(function(){
		action(event);
	});
});

function action(event){
	var task = getParentTask(event);
	var amount = $('#' + task + 'Amount').val();
	var a = $(event.target).attr('class').split(" ");
	var act = capitaliseFirstLetter(a[1]);
	$('#' + task + act).attr("href", a[1]+".php?task="+task+"&amount="+amount);
	alert($('#' + task + action).attr("href"));
}

function getParentTask(event){
    var parent = $(event.target).parent();
	return parent.attr('class');
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

function capitaliseFirstLetter(string)
{
    return string.charAt(0).toUpperCase() + string.slice(1);
}