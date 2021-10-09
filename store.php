<?php 
    include 'db.php';
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $birthday=$_POST['birthday'];
    if (!isset($name, $surname, $birthday)){
        echo "Some column is empty";
    }
    $sql="INSERT INTO `users` (`name`, `surname`, `birthday`) VALUE ('$name', '$surname', '$birthday')";

    if($conn->query($sql)===TRUE){
        echo "Information successfuly added";
    }
?>