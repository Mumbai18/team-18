<?php
   session_start();

   if(session_destroy()) {
     echo 'please log in';
     header("location: home.html");
   }
?>
