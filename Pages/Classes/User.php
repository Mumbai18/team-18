<?php
include('Pages/Classes/DB.php');
 class User{
     
    private static function nameExists($name,$table)
                {
                  if(!DB::query('SELECT name from '.$table. 'where name = :name',array(':name'=>$name)))
                  {
                return 1;
                }
                else{
                return 0;
                 }
                }

    public static function createStudent($name, $state, $city, $location, $landmark, $room_no, $pincode, $contact_no,$assets_range,$password,$family_income,$family_expense,$gender)

    {
              if(self::nameExists($name,'student_registered'))
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
    
    // public static function createDonor($name,$email_id,$contact_no,$amount)

    // {
    //   if(self::nameExists)
      
    // }
 }
?>