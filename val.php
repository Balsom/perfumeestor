<?php
include('config.php');
$ID=$_GET['id'];
$up= mysqli_query($con, "select * from prod where id=$ID");
$data = mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تاكيد شراء المنتج</title>
    <style>
        input{
            display:none;
        }
        .main{
            width: 30%;
            padding:20px;
            box-shadow: 2px 2px 10px silver;
            margin-top: 50px;
            background-color: white;
        }
        a{font-size:20px;
            color: rgb(145, 137, 24);
        }
        body{
            background-image: url('px.jpeg');
        }
    </style>
</head>
<body>
    <center>
        <div class="main">
        <form action="insert_card.php" method="post">
        <img src="mm.jpg" style="float:center;" width="200px" height="200px"/>
<h2>هل تريد شراء هذا المنتج</h2>
<input type="text" name="id" value='<?php echo $data['id']?>'>
<input type="text" name="name"  value='<?php echo $data['name']?>'>
<input type="text" name="price" value='<?php echo $data['price']?>' >
<button name="add" type="submit" class='btn btn-warning'>تاكيد اضافة المنتح للعربة</button>
     <br>
     <a href="shop.php">الرجوع لصفحة المنتجات</a>  

</form>
</div>
    </center>
</body>
</html>