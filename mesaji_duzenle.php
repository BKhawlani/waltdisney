<?php
require_once "function.php";
    $baglanti=baglan();
    $msg_id = $_GET["id"];
    $sorgu = "SELECT * FROM mesajlar WHERE id=$msg_id";
    $sonuc = mysqli_query($baglanti,$sorgu);
    $satir = mysqli_fetch_assoc($sonuc);
   
 
    echo'
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
                                <li><a href="rez.php" >Rezervasyon</a></li>
                                <li  class="active" ><a href="ulasmak.php" >Bize Ulaşin</a></li>
                            </ul>
            </div>  
            </header>
            <div class="mesafe"> </div>

            <div class="kutu">

            <h2>Bize Ulaş</h2>
            
            <form action="guncellenmis_mesaji.php?id='.$msg_id.'" method="post">
                <label for="Adi">Adi:</label>
                 <input type="text"  name="adi" value="'.$satir["msg_adi"].'">
                <label for="eposta">E-posta:</label>
                <input type="text"  name="eposta" value="'.$satir["eposta"].'">
                <label for="mesaj">Mesaj:</label>
                <input type="text"  name="mesaj"value="'.$satir["mesaj"].'">
                <div class="gonder"> <input type="submit" value="Gönder"></div>
            </form>
            </div>

           
       </div> </div>
        </body>
    
</html>
 '
          

?>
 


