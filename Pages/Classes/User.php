<?php
include('Pages/Classes/DB.php');
 class User{
     
    private static function nameExists($name)
                {
                  if(!DB::query('SELECT name from student_registered where name = :name',array(':name'=>$name)))
                  {
                return 1;
                }
                else{
                return 0;
                 }
                }

    public static function createStudent($name, $state, $city, $location, $landmark, $room_no, $pincode, $contact_no,$assets_range,$password,$family_income,$family_expense,$gender)

    {
              if(self::nameExists($name))
              {
                
              DB::query('INSERT INTO student_registered(name,state,city,location,landmark,room_no,pincode,contact_no,assets_range,registration_time,password,family_income,family_expense,gender,status) 
               VALUES (:name,:state,:city,:location,:landmark,:room_no,:pincode,:contact_no,:assets_range,:registration_time,:password,:family_income,:family_expense,:gender,:status)',
               array(':name'=>$name,':state'=>$state,':city'=>$city,':location'=>$location,':landmark'=>$landmark,':room_no'=>$room_no,':pincode'=>$pincode,':contact_no'=>$contact_no,':assets_range'=>$assets_range,':registration_time'=>date("Y-M-D h:m:s"),':password'=>password_hash($password, PASSWORD_BCRYPT),':family_income'=>$family_income,':family_expense'=>$family_expense,':gender'=>$gender,':status'=>'1'));
                     
                       
               return 1;

              }
              else{
                return 0;
              }
             
        
    } 
    
    public static function createDonor($name,$email_id,$password,$amount)

    {

      if(!DB::query('SELECT name from donor where name = :name',array(':name'=>$name)))
      {
        DB::query('INSERT INTO donor(name,email_id,password,amount) values(:name,:email_id,:password,:amount)',array(':name'=>$name,':email_id'=>$email_id,':password'=>password_hash($password, PASSWORD_BCRYPT),'amount'=>$amount));
    return 1;
    }
    else{
    return 0;
     }
     
    }


    public static function createVolunteers($name,$contact_no,$password,$email_id)

    {

      if(!DB::query('SELECT name from volunteers where name = :name',array(':name'=>$name)))
      {
        DB::query('INSERT INTO volunteers(name,contact_no,password,email_id) values(:name,:contact_no,:password,:email_id)',array(':name'=>$name,':contact_no'=>$contact_no,':password'=>password_hash($password, PASSWORD_BCRYPT),':email_id'=>$email_id));
    return 1;
    }
    else{
    return 0;
     }

      
     
    }
 }
?>