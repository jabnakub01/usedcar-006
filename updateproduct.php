<?php
    session_start();
    include("connect.php");

    $pid = $_POST['hdnProductId'];
    $model = $_POST['txtModel'];
    $color = $_POST['txtColor'];
    $price = $_POST['txtPrice'];

    $sql = "UPDATE car SET model='$model', color='$color', price=$price, WHERE id=$pid";

    //echo $sql;
    $result=$con->query($sql);
    if(!$result){
        echo "Error: ".$con->error;
    }
    else{
        header("Location: index.php");
    }
?>