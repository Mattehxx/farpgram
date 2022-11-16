<?php
    require '../config/connection.php';
    require '../function/utility.php';
    
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $email=filter_var($email, FILTER_SANITIZE_EMAIL);
    $password=sanitizeString($password);
    
    $sql="SELECT * FROM users WHERE username='$username'";
    $result=$conn->query($sql);
    if($result->num_rows>0) {
        echo "Username già utilizzato";
    } else {
        $sql="SELECT * FROM users WHERE email='$email'";
        $result=$conn->query($sql);
        if($result->num_rows>0) {
            echo "Email già utilizzata";
        } else {
            $password=md5($password);
            $sql="INSERT INTO users (email, password) VALUES ('$email', '$password')";
            if($conn->query($sql)===TRUE){
                $idUser=$conn->insert_id;
                $sql="INSERT INTO accounts (username, idUser) VALUES ('$username', $idUser)";
                $conn->query($sql);
                echo "Registrazione effettuata";
            }else{
                echo $conn->error;
            }
        }
    }
    $conn->close();
?>