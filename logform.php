<?php
include('config.php');
if(isset($_POST['login'])){
    $NUMBER = $_POST['number'];
    $NAME = $_POST['name'];
    $PASSWORD = $_POST['password'];
    $insert = "INSERT INTO login (number, name , password ) VALUES ( 'NUMBER', '$NAME','$PASSWORD')";
    mysqli_query($con , $insert);
    header('location:index.php');
}
?>