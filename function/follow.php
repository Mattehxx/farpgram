<?php
    require '../config/connection.php';

    session_start();

    $myAccount=$_SESSION['user'];
    $toFollow=$_POST['toFollow'];

    $sql="INSERT INTO follow (idAccount, idAccountFollowed) SELECT idUser FROM accounts WHERE username='$myAccount' OR username='$toFollow'";  //sistema query per prendere due idUser diversi
    $result=$conn->query($sql);
?>