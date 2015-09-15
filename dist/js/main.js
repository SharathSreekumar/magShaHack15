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

function chck(){
	if ($("#user1").val() != "" && $("#user1").val() != " "){
		$('#login').addClass('disabled');
	}else{
		$('#login').removeClass('disabled');
	}
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

function checkEmp()
{
	if ($("#newloc").val() == "" || $("#newloc").val() == " "){
		alert("Please enter data before submitting");
	}
}

function checkEmpS()
{
	if ($("#newser").val() == "" || $("#newser").val() == " "){
		alert("Please enter data before submitting");
	}
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

	$('.bust').click(function() {
		$('.bust').addClass('active');
		$('.createbl').removeClass('active');
		$('.createbl').removeClass('active');
		$('#three').css('display', 'block');
		$('#four').css('display', 'none');
		$('#five').css('display', 'none');
	});

	$('.createbl').click(function() {
		$('.createbl').addClass('active');
		$('.createbs').removeClass('active');
		$('.bust').removeClass('active');
		$('#four').css('display', 'block');
		$('#five').css('display', 'none');
		$('#three').css('display', 'none');
	});

	$('.createbs').click(function() {
		$('.createbs').addClass('active');
		$('.createbl').removeClass('active');
		$('.bust').removeClass('active');
		$('#five').css('display', 'block');
		$('#four').css('display', 'none');
		$('#three').css('display', 'none');
	});

	$('#btnOrigin').on("click",function(){
		alert($('#btnOrigin').val());
		$('#btttn').text($('#btnOrigin').text());

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