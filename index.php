<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
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
                                      <li class="active" ><a href="index.php">Turlar</a></li>
                                 <li><a href="otel.php" >Otel</a></li>
                                 <li><a href="Arac.php" >Arac</a></li>
                                <li><a href="rez.php" >Rezervasyon</a></li>
                                <li><a href="ulasmak.php" >Bize Ulaşin</a></li>
                            </ul>
            </div>  
            </header>
            <div class="mesafe"> </div>
            <ul class="turlar">
                <li><a href="yurtdisi.php"><img src="turlar/yurtdis.jpg" alt="" width="399" height="300" /></a></li>
               <li><a href="yurtici.php"><img src="turlar/yurtici.jpg" alt="" width="399" height="300" /></a></li>
                    
            </ul>
            <ul class="aciklama">
               <li><a href="yurtdisi.php"> <h4 >
                    Yurtdisi Turlar
                </h4></a></li>
                <li><a href="yurtici.php"><h4> Yurtici Turlar</h4></a></li>
            </ul>
           
           
       <div class="footer">
        <?php
        require("footer.php");
        ?>
       </div> </div>
        </body>
    
</html>