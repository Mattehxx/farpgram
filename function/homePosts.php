<?php
    require '../config/connection.php';
    require '../function/utility.php';

    session_start();
    //$_SESSION['user']='Mattehxx';

    $myId=getIdUser($_SESSION['user']);

    $sql="SELECT * FROM follow WHERE idAccount=$myId";
    $result=$conn->query($sql);

    $followed=array();
    while($row=$result->fetch_assoc()) {
        $followed[]=$row['idAccountFollowed'];
    }


    $i=0;
    $json=array();
    foreach ($followed as $idAccountFollowed) {
        $sql="SELECT * FROM posts p INNER JOIN imagevideos img ON p.id=img.idPost WHERE p.idAccount=$idAccountFollowed ORDER BY p.actionTime DESC";
        $result=$conn->query($sql);
        $j=0;
        while($row=$result->fetch_assoc()) {
            $json[$i][$j]['username']=getUsername($idAccountFollowed);
            $json[$i][$j]['body']=$row['body'];
            $json[$i][$j]['location']=$row['location'];
            $json[$i][$j]['actionTime']=$row['actionTime'];
            $json[$i][$j]['url']=$row['url'];
            $j++;
        }
        $i++;
    }

    echo json_encode($json);
?>