<?php
    require '../config/connection.php';
    require '../function/utility.php';
    
    $email=$_POST['email'];
    $password=$_POST['password'];

    $email=filter_var($email, FILTER_SANITIZE_EMAIL);
    $password=sanitizeString($password);
    
    $sql="SELECT * FROM users WHERE email='$email'";
    $result=$conn->query($sql);
    if($result->num_rows == 0) {
        echo "Email insesistente";
    } else {
        $password=md5($password);
        $sql="SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            header("Location:../public/home.html");
            echo "Benvenuto";
            // redirect sulla home page per utenti che hanno fatto il login
        }else{
            echo "Spiacente la password inserita è errata";
        }
    }
    $conn->close();
?>