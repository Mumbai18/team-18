
       $(document).ready(function() {
          //  var DOMAIN = "localhost/team-18/Pages";
        $("#student_register_form").on("submit", function() {
            $.ajax({
                url:'../../process.php',
                method: 'POST',
                data: $('#student_register_form').serialize(),
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
            
        });

       });
