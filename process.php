<?php
include('Pages/Classes/User.php');
// echo " gkkg";
if(isset($_POST['name'])&& isset($_POST['state']) && isset($_POST['city']) &&
isset($_POST['location']) && isset( $_POST['landmark']) && isset($_POST['room_no']) &&
isset($_POST['pincode']) && isset($_POST['contact_no']) && isset($_POST['assets_range']) &&
isset($_POST['password']) && isset($_POST['family_income']) && isset($_POST['family_expenses']) && isset($_POST['gender']))
{
$result = User::createStudent($_POST['name'], $_POST['state'], $_POST['city'], $_POST['location'], $_POST['landmark'], $_POST['room_no'], $_POST['pincode'], $_POST['contact_no'],$_POST['assets_range'],$_POST['password'],$_POST['family_income'],$_POST['family_expenses'],$_POST['gender']);
echo $result;
}



if(isset($_POST['name'])&& isset($_POST['email']) && isset($_POST['password']) &&
isset($_POST['amount']))
{
$result = User::createDonor($_POST['name'], $_POST['email'], $_POST['password'], $_POST['amount']);
echo $result;
}

// $result = User::createVolunteers("varsha","9673581001","email@gmail.com","12345");
// echo $result;


// if(isset($_POST['email'])&& isset($_POST['password']))
// {
// $result = User::createCoreCommitee($_POST['email'], $_POST['password']);
// echo $result;



if(isset($_POST['name'])&& isset($_POST['contact_no']) && isset($_POST['email'])&& isset($_POST['password']))
{
$result = User::createVolunteers($_POST['name'], $_POST['contact_no'], $_POST['email'], $_POST['password']);
echo $result;
}


if(!Login::isLoggedIn())
{
    


if(isset($_POST['name']) && isset($_POST['password']))
{
    $result = User::studentLogin($_POST['name'],$_POST['password']);
    echo $result;
}
}
else
{
    echo "Already logged In";
}


?>