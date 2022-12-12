<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productsالمنتجات</title>
    <style>
        h3
        {
font-weight:blod;
color: rgb(145, 137, 24);
font-size:50px;
        }
        .card{
            float:right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px; 
        }
        .card img{
            width: 100px;
            height:200px;
        }
        main{
            width: 60%;
            font-style:italic;
        }
        
        .main{
            width: 30%;
            padding:20px;
            box-shadow: 2px 2px 10px silver;
            margin-top: 50px;
            font-style:italic;
            background-color: white;
        }
        a{
            color: rgb(145, 137, 24);
            font-size:20px;
            background-color:black;
             font-style:italic;
        }
 

    </style>
</head>
<body>
 <center>
 <div class="main">
 <img src="mm.jpg" style="float:center;" width="200px" height="200px"/>
<h3> الادمن</h3>
<a href="index.php">الرجوع الى صفحة النشر</a>
    </div>
</center>

<?php
include('config.php');
$result = mysqli_query($con, "SELECT * FROM prod");
while($row = mysqli_fetch_array($result)){
    echo"
    <center>
    <main>
<div class='card' style='width: 15rem;'>
<img src='$row[image]' class='card_img-top'>
<div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>$row[price]</p>
    <a href='delete.php? id=$row[id]' class='btn btn-danger'>حذف منتج </a>
    <br>
    <br>
    <a href='update.php? id=$row[id]' class='btn btn-primary'>تعديل منتج </a>
</div>
</div>
</main>
    <center>
    ";
}
?>
</body>
</html>