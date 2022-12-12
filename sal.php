<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مبيعاتي</title>
    <style>

h3{
    font-weight:blod;
    font-size: 40px;
    color: rgb(145, 137, 24);
    font-style:italic;
}
main{
    width: 40%;
    margin-top:30px;
}
table{ 
    box-shadow: 5spx 5px 20px silver;
    background-color: khaki;

}
thead{
    background-color:rgba(131, 56, 3, 0.986);
    text-align:center;
   
}
tbody{
    text-align:center;
    background-color:#f2f2f2;
    font-style:italic;
}
a{
    font-size:20px;
            color: rgb(145, 137, 24);
            font-style:italic;
            background-color:black;
}
.main{
            width: 50%;
            padding:30px;
            box-shadow: 3px 3px 12px silver;
            margin-top: 50px;
            background-color: white;
        }
        body{
            background-image: url('px.jpeg');
        }
    </style>
</head>
<body>
    <center>
    <div class="main">
    <img src="mm.jpg" style="float:center;" width="200px" height="200px"/>
        <h3>مبيعاتك المحجوزة</h3>
        <a href="index.php">الرجوع</a>
</div>
    </center>
<?php
include('config.php');
$result = mysqli_query($con, "SELECT * FROM addcard");
while($row =mysqli_fetch_array($result)){
    echo "
    <center>
    <main>
        <table class='table'>
<thead>
<tr>
    <th scope='col'>اسم المنتج</th>
    <th scope='col'>سعر المنتج</th>
</tr>
</thead>
<tbody>
<tr>
    <td>$row[name]</td>
    <td>$row[price]</td>
</tr>
</tbody>
        </table>
    </main>
</center>
 ";
}
?>
<br>
</body>
</html>