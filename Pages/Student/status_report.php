<?php
session_start();
include('../Classes/DB.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Status Report</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>	
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="https://lh3.googleusercontent.com/19lQHb_YLsHXlVdKrlhUgrr70-KoI4bbzOy7T2KGetrFf9leL6XPI551u4FwUSohHhg=s360-rw" style="height: 50px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 
</nav>
</div>

<div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Jain Social Group Educon</h1>
          <?php
        $status = DB::query('SELECT status from student_registered where s_id = :s_id',array(':s_id'=>$_SESSION['login_id']))['0']['status'];
       
        if($status == 1)
              {
                header("location: StudentPage.html");
              }
              else
              {
               echo " <p><h3>Your Application is in process. Kindly wait for further details</h3></p>";
              }

          // echo $_SESSION['login_id'];
          ?>
          
          
          
        </div>
      </div>
</body>
</html>