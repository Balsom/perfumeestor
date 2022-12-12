<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المنتجات</title>
    <style>
        h3
        {
font-weight:blod;
font-size: 50px;
color: rgb(145, 137, 24);
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
        }
        .navbar-brand{
            margin-left: 70px;
            color: rgb(145, 137, 24);
            font-size: 40px;
            background-color:black;

        }
        .main{
            
            width: 30%;
            padding:20px;
            box-shadow: 2px 2px 10px silver;
            margin-top: 50px;
            background-color: white;
        }
        a{
            color: black;
            font-size:20px;
            background-color:rgba(172, 33, 86, 0.678);
            
            
            
        }
       
    </style>
</head>
<body>
    <nav class="navbar  navbar-light bg-light">
<a class="navbar-brand"href="card.php"> MY Card عربتي </a>
    </nav>
 <center>
 <div class="main">
 <img src="mm.jpg" style="float:center;" width="200px" height="200px"/>
<h3>perfume store </h3>
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
    <a href='val.php? id=$row[id]' class='btn btn-success'>اضافة المنتج الى العربة </a>
</div>
</div>
</main>
    <center>
    ";
}
?>
</body>
</html>