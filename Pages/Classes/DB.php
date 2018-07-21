<?php
//This file will handle the connectivity of database and
//query function which is basically helping us to write the query in one line instead of preparing statements again and again
class DB
{
  public static function connect()
  {
    $host = 'localhost';
    $user = 'root';
    $password='';
    $dbname='educon';

    //set DSN
     $dsn = 'mysql:host='.$host . ';dbname='.$dbname;

     //create a pdo instance
     $pdo = new PDO($dsn,$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
     return $pdo;
  }

  public static function query($query,$params= array())
  {
    $statement = self::connect()->prepare($query);
    $statement->execute($params);

    //If Query is select then fetch items
    if(explode(' ',$query)[0]=='SELECT')
    {
      $data = $statement->fetchAll();
      return $data;
    }
  }
}
 ?>
