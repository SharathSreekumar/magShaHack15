function chk() {
	if ($("#pass").val() != "" && $("#pass").val() != " "){
		if($("#pass").val() !== ($("#cpass").val())){
			$('#submit').addClass('disabled');
		}
		else{
			$('#submit').removeClass('disabled');
		}
	}
	else
		$('#submit').addClass('disabled');
}
function resettxt() {
	$('#uname').val("");
	$('#pass').val("");
	$('#cpass').val("");
}
function notify(string){
	$.notify(string,{
		className: 'success',
		globalPosition: 'top center'
	});
}
$(document).ready(function() {
	$('.usert').click(function() {
		$('.usert').addClass('active');
		$('.createt').removeClass('active');
		$('#one').css('display', 'block');
		$('#two').css('display', 'none');
	});

	$('.createt').click(function() {
		$('.usert').removeClass('active');
		$('.createt').addClass('active');
		$('#one').css('display', 'none');
		$('#two').css('display', 'block');
	});

	$('#submit').click(function(){
		$.post('../insertusers.php',
			{
				uname: $('#uname').val(),
				pword: $('#pass').val()
			}
		);
		var message = $('#uname').val() + " has been added to the database.";
		notify(message);
		resettxt();
	});
});