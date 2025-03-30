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
    <h2> Otel Rezervasyon</h2>
    <form action="rezervasyon.php" method="post">
        <div class="musteri-bilgi">       <label for="adı">Adı:</label><input type="text" placeholder="Adınızı yazın" name="adi"><br>
</div>
<div class="musteri-bilgi"> <label for="soyadı">Soyadı:</label><input type="text" placeholder="Soyadınızı yazın" name="soyadi"><br></div>
<div class="musteri-bilgi">       <label for="numara">Telefon Numarası</label><input type="text" placeholder="+90 ___ ___ __ __"name="numara"><br>
</div>
<div class="musteri-bilgi">       <label for="Uyuruk">Uyuruk:</label><input type="text"placeholder="Uruyugunuz"name="uyuruk"><br>
<div class="musteri-bilgi">       <label for="eposta">İstediğınız Otel Adını Seçin:</label><select name="hizmet"><option value="null"> </option>
<option value="fourseasons">Four Seasons Hotel Istanbul</option> <option value="bebek">Bebek Hotel
</option><option value="bosphor">Hilton Istanbul Bosphorus</option><option value="clarion">Clarion Hotel Golden Horn</option><option value="akra">Akra V</option><option value="orange">Orange Owl Hotel</option><option value="delux">Gündüzler Deluxe Hote</option><option value="doubletree">DoubleTree by Hilton Trabzon</option><option value="Barbaros">Air Barbaros Hotel</option></select>
</div>

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


