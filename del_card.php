<?php
include('config.php');
$ID= $_GET['id'];
mysqli_query($con,"DELETE FROM addcard WHERE id=$ID");
header("location:card.php");
?>
<img src="log.jpg" style="float:center;" width="400px" height="500px"/>










