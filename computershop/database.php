<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'auth';

try{
  $conn=new PDO("mysql:host=$server;dbname=$database;",$username, $password);//pdo-new and most secure way of doing database transaction
}catch(PDOException $e){//if unable to connect to db
  die( "Connection failed: ".$e->getMessage());//display error msg
}//e getmessage-prints out error code
?>
