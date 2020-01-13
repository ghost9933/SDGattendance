<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "attendance";
    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "not connected";
    }

?>