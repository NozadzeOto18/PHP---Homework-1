<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="USERS";

    $conn = new mysqli ($servername, $username, $password, $dbname);

    if($conn->connect_error){
        echo "connection failed". $conn->connect_error;
    }
?>