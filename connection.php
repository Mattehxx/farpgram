<?php
     $host = 'localhost';
     $uname = 'lowuser';
     $psw = 'lowuser';
     $dbname = 'farpgram';
     $port = '3306';
 
     //$username=$_POST['username'];
     $email=$_POST['email'];
     $password=$_POST['password'];
 
     // Create connection
     $mysqli = new mysqli($host, $uname, $psw, $dbname, $port);
 
     // Check connection
     if ($mysqli->connect_errno) {
         die('DB connection error: ' . $mysqli->connect_error);
     }
?>     