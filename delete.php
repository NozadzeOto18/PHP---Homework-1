<?php
    include 'db.php';
    $deleted_id = $_POST["deleted_id"];
    $sql="DELETE FROM `users` WHERE `id`=$deleted_id";
    if($conn->query($sql) ===TRUE){
        echo "User with id- $deleted_id is now deleted";
    }
?>