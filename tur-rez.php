<!DOCTYPE html>
<html>
    <head>
    <title>Walt Dizney</title>
        <meta charset="UTF-8" name="proje" content="Siyahat şirketi">
    <link rel="stylesheet" href="css_sayfasi.css">

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
            <div class="rez_kutusu">
    <h2> Tur Rezervasyon</h2>
    <form action="rezervasyon.php" method="post">
        <div class="musteri-bilgi">       <label for="adı">Adı:</label><input type="text" placeholder="Adınızı yazın" name="adi"><br></div>
        <div class="musteri-bilgi">       <label for="soyad">soyadı:</label><input type="text" placeholder="Soyadınızı yazın" name="soyadi"><br></div>
<div class="musteri-bilgi">       <label for="numara">Telefon Numarası</label><input type="text" placeholder="+90 ___ ___ __ __"  name="numara" ><br>
</div>
<div class="musteri-bilgi">       <label for="Uyuruk">Uyuruk:</label><input type="text"placeholder="Uyurugunuz"  name="uyuruk"><br></div>
<div class="musteri-bilgi">       <label for="secme">İstediğınız Turu Seçin</label><select name="hizmet"><option value="null"> </option>
<option value="Malezya">Malezya 5 yıldızlı Turu-Yurtdiş</option> <option value="tayland">Tayland 5 Yıldızlı Turu-Yurtdiş</option><option value="singapur">Singapur 5 Yıldızlı Turu-Yurtdiş
</option><option value="dubai">Dubai 5 Yıldızlı Turu-Yurtdiş</option><option value="maldivler">Maldivler 5 Yıldızlı Turu-Yurtdiş</option><option value="uludag">UluDağ Tur-Yurtiç</option><option value="fethiye">Fethiye Turu-Yurtiç</option><option value="ankara">Ankara Turu-Yurtiç</option><option value="Gap">Gap Turu-Yurtiç</option><option value="Bursa">Bursa Turu-Yurtiç</option><option value="kapadokya">Kapadokya Turu-Yurtiç</option></select>
</div>


<div class="cinsiyet-bilgi">
<span class="cinsiyet-baslik">Cinsiyet:</span>
<div class="cinsiyet-tur">
<input type="radio" name="cinsiyet" id="Erkek" value="1">
<label for="Erkek">Erkek</label>
<input type="radio" name="cinsiyet" id="Kadin" value="2">
<label for="Kadin">Kadın</label>


</div>
</div>

<div class="gonder">
<input type="submit" value="Gönder">
</div>
</div>


<div class="footer">
        <?php
        require("footer.php");
        ?>
       </div>
</div>       
  
        </body>
    
</html>


