<?php
    require 'connection.php';

    $sql = 'INSERT INTO `users` (`id`, `email`, `password`) VALUES (NULL, '$email', '$password')'; 
    $mysqli->query($sql);

    echo 'Ho inserito nel database '.$dbname.' '.$email.' e '.$password.'<br>';

    $sql = 'select email from users'; 
    $cursor = $mysqli->query($sql);

    // linkare alla home

    $cursor->free();
    $mysqli->close();
?>