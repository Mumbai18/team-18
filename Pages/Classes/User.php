<?php
include('./Classes/DB.php');
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

    public static function createStudent($name, $state, $city, $location, $landmark, $room_no, $pincode, $contact_no,$assets_range,$password)

    {
              if(self::nameExists($name))
              {
               DB::query('INSERT INTO student_registered(name,state,city,location,landmark,room_no,pincode,contact_no,assets_range,registration_time,password) 
               VALUES (:name,:state,:city,:location,:landmark,:room_no,:pincode,:contact_no,:assets_range,:registration_time,:password)',
               array(':name'=>$name,':state'=>$state,':city'=>$city,':location'=>$location,':landmark'=>$landmark,':room_no'=>$room_no,':pincode'=>$pincode,':contact_no'=>$contact_no,':assets_range'=>$assets_range,':registration_time'=>date("Y-M-D h:m:s"),':password'=>password_hash($password, PASSWORD_BCRYPT)));

               return "Success";

              }
              else{
                return "Already registered";
              }
             
        
    } 
    
    public static function createDonor()
    {
      
    }
 }
?>