<?php
    require '../config/connection.php';
    //input del testo da cercare dato che non è più una funzione
    $sql="SELECT * FROM accounts WHERE username LIKE '$text%'";
    $result=$conn->query($sql);
    if($result->num_rows>0) {
        $data=array();
        while ($row=$result->fetch_assoc()) {
            $data[]=$row;
        }
    }
    echo json_encode($data);
    
    $conn->close();
?>