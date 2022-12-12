<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parfum اضافة منتجات</title>
    <link rel="stylesheet" href="index.css">
    <style>
             
.main{
    width:50%;
    box-shadow: 2px 2px 10px rgb(155, 153, 153);
    margin-top: 45px;
    padding: 10px;
    background-color: white;
}
    </style>
</head>
<body>
 <center>
 <div class="main">
 <form action="insert.php" method="post" enctype="multipart/form-data">
 <h2>موقع تسويقي اونلاين </h2>
 <h3>متجر لبيع العطور</h3>
 <img src="mm.jpg" style="float:center;" width="400px" height="500px"/>
 <input type="text" name='name'>
 <br>
 <input type="text" name='price'>
<br>
<input type="file" id="file" name='image' style='display:none;'>
<label for="file">اختيار صورة للمنتج </lable>
<button name='upload'>رفع المنتج </button>
<br><br>
<a href="products.php">عرض كل المنتجات </a>
<br><br><br>
<a href="sal.php">صفحة طلبات المبيعات</a>
 </form>
 </div>
 </center>  
</body>
</html>