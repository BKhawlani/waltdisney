<?php
$adi=$_POST["adi"];
$eposta=$_POST["eposta"];
$mesaj=$_POST["mesaj"];

require_once "function.php";
$baglanti=baglan();
$sorgu = "INSERT INTO mesajlar (msg_adi,eposta,mesaj)
VALUES ('$adi','$eposta','$mesaj')";
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    echo "Kayıt başarıyla eklendi";
}else{
    echo "Kayıt eklenemedi";
}
//echo $sorgu ;
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Walt Dizney</title>
        <meta charset="UTF-8" name="proje" content="Siyahat şirketi">
    <link rel="stylesheet" href="css_sayfasi.css">
    <style>
        
h1{
                text-align: center;
                color:green;
            }</style>
 

        </head>
        
        <body>

            <div class="kilif">

            
          <header>
          <?php require("bas.php");?>


          
               
            <div class="site_menu">
                <ul>
                                 <li><a href="index.php">Turlar</a></li>
                                 <li><a href="otel.php" >Otel</a></li>
                                 <li><a href="Arac.php" >Arac</a></li>
                                <li><a href="rez.php" >Rezervasyon</a></li>
                                <li  class="active" ><a href="ulasmak.php" >Bize Ulaşin</a></li>
                            </ul>
            </div>  
            </header>
            <div class="mesafe"> </div>
            <div class="kutu">

            <h2>Bize Ulaş</h2>
            
            <form action="mesaj.php" method="post">
                <label for="Adi">Adi:</label>
                <input type="text"  name="adi">
                <label for="eposta">E-posta:</label>
                <input type="text"  name="eposta">
                <label for="mesaj">Mesaj:</label>
                <input type="text"  name="mesaj">
                <div class="gonder"> <input type="submit" value="Gönder"></div>
            </form>
            </div>
            <?php
if ($adi&&$eposta&&$mesaj){
 
    echo "<h1 clas'oldu' >Mesajiniz Gönderildi</h1>";
}
else {
    echo "<h1>Tüm boşluklar doldurlmalı</h1>";
}
?>
            <div class="footer">
        <?php
        require("footer.php");
        ?>
       </div> </div>
        </body>
    
</html>