<?php
include('config.php');
if(isset($_POST['add'])){
    $NAME = $_POST['name'];
    $ADRESS = $_POST['adress'];
    $EMAIL = $_POST['email'];
    $insert = "INSERT INTO buy (name, email , adress ) VALUES ( '$NAME', '$EMAIL','$ADRESS')";
    mysqli_query($con , $insert);
    header('location:buy.php');
}
?>