<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update تعديل منتج</title>
    <link rel="stylesheet" href="index.css">
    <style>.main{
    width:50%;
    box-shadow: 2px 2px 10px rgb(155, 153, 153);
    margin-top: 45px;
    padding: 10px;
    background-color: white;
}
body{
    background-color: rgba(168, 227, 250, 0.952);
}
</style>
</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up = mysqli_query($con, "select * from prod where id =$ID ");
    $data = mysqli_fetch_array($up);
    ?>
 <center>
 <div class="main">
 <form action="up.php" method="post" enctype="multipart/form-data">
 <h2>تعديل المنتجات</h2>
 <img src="mm.jpg" style="float:center;" width="400px" height="500px"/>
 <input type="text" name='id' value='<?php echo $data['id']?>'>
 <br>
 <input type="text" name='name'  value='<?php echo $data['name']?>'>
 <br>
 <input type="text" name='price' value='<?php echo $data['price']?>'>
<br>
<input type="file" id="file" name='mg/' style='display:none;'>
<label for="file">تحديث صورة المنتج </lable>
<button name='update' type='submit'>تعديل  المنتج</button>
<br><br>
<a href="products.php">عرض كل المنتجات </a>
 </form>
 </div>
 </center>  
</body>
</html>