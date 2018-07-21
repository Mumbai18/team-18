<?php
include('./Classes/User.php');
$result = User::createStudent("varsha", "maharashtra", "Thane", "Mulund", "XYZ", "12345", "421001", "9673581001","0-2000","varsha123");
echo $result;
?>