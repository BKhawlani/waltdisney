
<?php
require_once"function.php";
$baglanti=adminbag();
    if ($_SERVER=$_POST){
        $uesrname=$_POST["kullanci_adi"];
        $password=$_POST["parola"];
        $sorgu="SELECT * from admin where username='".$uesrname."' AND password='".$password."'";
        $sonuc=mysqli_query($baglanti,$sorgu);
        $satir=mysqli_fetch_array($sonuc);
      
        if ($satir["usertype"]=="user"){
            echo "user";
        }
        else if($satir["usertype"]=="admin"){
            echo "admin";
            session_start();
            $_SESSION['username'] = $satir['username'];
            header("location:admin_sayfasi.php");
        }
        else {
            echo "<h3>hatali giriş yaptiniz</h3>";
           header("location:admin_login.php");


        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
<style>
    *
{
margin: 0px;
padding: 0px;
font-family: sans-serif;
box-sizing: border-box;


}
body{
    background-color: #7691ff;
}
    .kutu{

margin-top: 90px;
width: 500px;
background-color: #fff;
padding: 30px;
box-shadow: 0px 0px 10px 0px rgba(0,0,0,0,0.3);
border: 2px solid ;


    }
    h1{
        text-align: center;
        font-size: 36px;
        margin-bottom: 30px;
    }
   label{
    font-size: 18px;
    margin-bottom: 5px;

   }
   input[type="text"], input[type="password"]{
    padding : 10px;
    margin-bottom:20px ;
    border-radius:5px;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0,0.2);
   }
   input[type="submit"]{
    padding : 10px;
    border: none;
    border-radius:5px;
    color: #fff;
    font-size: 18px;
    background-color: #007bff;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0,0.2);
   }
   input[type="submit"]:hover{
    background-color: #0062cc;
   }
   h3{
    text-align: center;
   }
</style>
    </head>
<body>
    

<center>
    <div class="kutu">
   <h1>Girış Sayfası</h1> 
   <br><br><br><br>

<br><br>
<form action="#" method="POST">
<div>
   
    <label for="username" >Username:</label>
    <input type="text" name="kullanci_adi">
</div> <br><br>
<div> 
    <Label  for="password"> Password:</Label>
    <input type="password" name="parola" >
</div>
<div>
    <br><br>
    <input type="submit" value="Girış Yap">
</form></div></center></div></body></html>