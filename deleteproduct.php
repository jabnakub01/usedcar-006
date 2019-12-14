<?php
    session_start();
    include("connect.php");

    $pid = $_GET['pid'];
    $sql = "DELETE FROM car WHERE id=$pid";

    $result=$con->query($sql);
    if(!$result){
        echo "Error." .$con->error;
    }
    else{
        header("Location:index.php");
    }
?>