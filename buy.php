
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الشراء</title>
    <style>
         .main{
            width: 30%;
            padding:20px;
            box-shadow: 2px 2px 10px silver;
            margin-top: 50px;
            background-color: white;
        }
        h2{
        font-weight:blod;
    font-size: 40px;
    color: rgb(145, 137, 24);}
    h3{
        font-weight:blod;
    font-size: 20px;
    color: rgb(145, 137, 24); 
    }
label{
    padding: 15px;
cursor: pointer;
font-weight:bold ;
font-size: 15px;
}
input{
margin-bottom: 10px;
width:50%;
padding: 5px;
font-size: 10px;
font-weight:bold;
height: 10px;
}
button{
    border:none ;
    padding: 10px;
    width: 20%;
    font-weight: bold;
    font-size: 15px;
    margin-bottom: 15px;
}
a{
    font-size:20px;
            color: rgb(145, 137, 24);
            font-style:italic;
}

    </style>
</head>
<body>
    
<center>
        <div class="main">
      <img src="mm.jpg" style="float:center;" width="200px" height="200px"/>
<h2>اكمال الشراء</h2>
<h3>قم بمل هذا الفورم بالبيانات المطلوبة</h3>
<form action="bay.php" method="post">
<label for="name">الاسم</label>
<input type="text" name="name" >
<br>
<label for="adress">العنوان</label>
<input type="text" name="adress" >
<br>
<label for="email">البريد الالكتروني</label>
<input type="email" name="email"  >
<br>
<button name="add" type="submit" class='btn btn-warning'>ارسال</button>
     <br>
     <a href="shop.php">الرجوع لصفحة المنتجات</a>  

</form>
</div>
    </center>
</body>
</html>
