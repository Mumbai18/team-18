$(function() {

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
	var female=false;
	var handicap=false;
	var sports=false;
	if($('#female').checked)
	{
		female=true;
	}
	if($('#sports').checked)
	{
		sports=true;
	}
	if($('#handicap').checked)
	{
		handicap=true;
	}
	var email=$('#email');
	var name=$('#name');
	var password=$('#password');
	var confirm_password=$('#confirm-password');
	var amount=$('#amount');
	if(email.val()==''){
		//write the value	
	}
	else if(name.val()==''){
		//write the condition
	}
	else if(password.val()==''){
		//write the condition
	}
	else if( confirm_password.val()=='' )
	{
			//write the condition
	}
	else if( password.val()!=confirm_password.val()){
			//write the condition
	}
	else if(amount<=0){
		//write the condition
	}
	else{
		$('register-form').on('register-submit', function (e) {

<<<<<<< HEAD
=======
	if($(''))


        $('register-form').on('register-submit', function (e) {

>>>>>>> 408856b14e36d7d5fc40f37c368671fa8c4ae84c
          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'post.php',
            data: $('register-form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });
<<<<<<< HEAD
        });
	}
});
=======

        });

      });
>>>>>>> 408856b14e36d7d5fc40f37c368671fa8c4ae84c
