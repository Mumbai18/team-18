$(function(){

    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	// var female=false;
	// var handicap=false;
	// var sports=false;
	// if($('#female').checked)
	// {
	// 	female=true;
	// }
	// if($('#sports').checked)
	// {
	// 	sports=true;
	// }
	// if($('#handicap').checked)
	// {
	// 	handicap=true;
	// }

	// var password=$('#password');
	// var confirm=$('#confirm');
	// if(password.val()!=confirm.val()){
	// 		alert("Password mismatch!!");
	// }
	// else{
	// 	$('register-form').on('register-submit', function (e) {
	// 		e.preventDefault();
	// 		$.ajax({
    //         	type: 'post',
    //         	url: 'post.php',
    //         	data: $('register-form').serialize(),
    //         	success: function () {
    //           	alert('form was submitted');
    //         	}
    //       	});
	// 	});
	// }
});
