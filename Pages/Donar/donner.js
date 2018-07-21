$(function(){

    $('#login-form-link').click(function(e) {
    	$("#donor_login_form").delay(100).fadeIn(100);
 		$("#donor_register_form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#donor_register_form").delay(100).fadeIn(100);
 		$("#donor_login_form").fadeOut(100);
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


	
	
	  $("#donor_register_form").on("submit", function() {
		  $.ajax({
			  url:'../../process.php',
			  method: 'POST',
			  data: $('#donor_register_form').serialize(),
			  failure: function()
			  {
				alert("error");
			  },
			  success: function (data) {
				if (data == 0) {
				  alert('Already registered');
				} else if (data == 1) {
				  alert('Registered successfully.');
				  // window.location.href = encodeURI(DOMAIN + '/index.php?msg=You are registered!!');
				}
			  }
			  });

			//   $("#donor_register_form").on("submit", function() {
			// 	$.ajax({
			// 		url:'../../process.php',
			// 		method: 'POST',
			// 		data: $('#donor_register_form').serialize(),
			// 		failure: function()
			// 		{
			// 		  alert("error");
			// 		},
			// 		success: function (data) {
			// 		  if (data == 0) {
			// 			alert('Already registered');
			// 		  } else if (data == 1) {
			// 			alert('Registered successfully.');
			// 			// window.location.href = encodeURI(DOMAIN + '/index.php?msg=You are registered!!');
			// 		  }
			// 		}
			// 		});
		  
	 

	 });

});


