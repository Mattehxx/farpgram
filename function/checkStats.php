<?php
    require '../config/connection.php';

    $username=$_POST['username'];

    $sql="SELECT idUser FROM accounts WHERE username='$username'";  //Prendo l'id dell'account di cui voglio vedere il profilo
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $myIdUser=$row['idUser'];

    $sql="SELECT COUNT(*) AS follower FROM follow WHERE idAccountFollowed='$myIdUser'"; //Prendo il numero di follower dell'account di cui voglio vedere il profilo
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $follower=$row['follower'];

    $sql="SELECT COUNT(*) AS following FROM follow WHERE idAccount='$myIdUser'";    //Prendo il numero di seguiti dell'account di cui voglio vedere il profilo
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $following=$row['following'];

    $jsonString['follower']=$follower;  //Aggiungo il numero di follower all'array
    $jsonString['following']=$following;    //Aggiungo il numero di seguiti all'array
     
    echo json_encode($jsonString);  //Ritorno il json contenente le infomazioni relative a: nPost, follower, seguiti

    $conn->close();
?>