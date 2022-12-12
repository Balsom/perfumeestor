
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
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
<h2>تسجيل الدخول <h2>
<form action="logform.php" method="post">
<label for="name">الاسم</label>
<input type="text" name="name" >
<br>
<label for="password">كلمة المرور</label>
<input type="password" name="password"  >
<br>
<button name="login" type="submit" class='btn btn-warning'>تسجيل الدخول</button>
     <br>
    

</form>
</div>
    </center>
</body>
</html>
