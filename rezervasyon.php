<?php
$adi=$_POST["adi"];
$soyadi=$_POST["soyadi"];
$telefon_numarasi=$_POST["numara"];
$uyuruk=$_POST["uyuruk"];
$hizmet=$_POST["hizmet"];
$cinsiyet=$_POST["cinsiyet"];
require_once "function.php";
$baglanti=baglan();
$sorgu = "INSERT INTO musteri_hizmet (	mus_adi,mus_soyadi,mus_numarasi,mus_uyuruk,mus_hizmet,mus_cinsiyet)
VALUES ('$adi','$soyadi','$telefon_numarasi','$uyuruk','$hizmet','$cinsiyet')";
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    //echo "Kayıt başarıyla eklendi";
}else{
    //echo "Kayıt eklenemedi";
}


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
                color: darkcyan;
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
                                <li class="active"><a href="rez.php" >Rezervasyon</a></li>
                                <li><a href="ulasmak.php" >Bize Ulaşin</a></li>
                            </ul>
            </div>  
            </header>
            <div class="mesafe"> </div>
             <?php
if ($adi&&$soyadi&&$telefon_numarasi&&$uyuruk&&$hizmet&&$cinsiyet){
 
    echo "<h1 clas'oldu' >Bilgileriniz girildi</h1>";
}
else {
    echo "<h1>Tüm boşluklar doldurlmalı</h1>";
}
?>
  
            <ul class="rezler">
                <li><a href="tur-rez.php"><img src="resimler/tur-rez.jpg" alt="" width="399" height="300" /></a></li>
               <li><a href="otel-rez.php"><img src="resimler/otel-rez.jpg" alt="" width="399" height="300" /></a></li>

    
            </ul>
            <ul class="rez-aciklama">
               <li><a href="tur-rez.php"> <h4 >
                   Tur Rezervasyon
                </h4></a></li>
                <li><a href="otel-rez.php"><h4> Otel Rezervasyon</h4></a></li>
            </ul>

            <div class="araba">
   <ul class="rezler">
   <li><a href="arac-rez.php"><img src="resimler/araba-rez.jpg" alt="" width="399" height="300" /></a></li>
   </ul>
   <ul class="rez-aciklama">
   <li><a href="arac-rez.php"><h4> Arac Kiralama</h4></a></li>
</ul></div>

<div class="footer">
        <?php
        require("footer.php");
        ?>
       </div>
  </div>
        </body>
    
</html>
     