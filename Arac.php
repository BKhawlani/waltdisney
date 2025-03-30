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
                                 <li class="active"><a href="Arac.php" >Arac</a></li>
                                <li><a href="rez.php" >Rezervasyon</a></li>
                                <li><a href="ulasmak.php" >Bize Ulaşin</a></li>
                            </ul>
            </div>  
            </header>
            <div class="mesafe"> </div>
            <div>
                <ul class="arac">     
                     <li class="araba"><img src="arabalar/e-bmw-5-serisi.png" alt="araba" width="400" height="180"><div><p>BMW 5 Serisi</p> <p>Günlük Fiyati: 4100 TL</p></div></li>
                     <li class="araba"><img src="arabalar/c-bmw-3-serisi.png" alt="araba" width="400" height="180"><div><p>BMW 3 Serisi</p> <p>Günlük Fiyati: 2900 TL</p></div></li>
                     <li class="araba"><img src="arabalar/l-peugeot-5008.png" alt="araba" width="400" height="180"><div><p>Peugeot 2008</p> <p>Günlük Fiyati: 1500 TL</p></div></li>
                     <li class="araba"><img src="arabalar/k-volvo-xc90.png" alt="araba" width="400" height="180"><div><p>Volvo XC90</p> <p>Günlük Fiyati: 7500 TL</p></div></li>
                     <li class="araba"><img src="arabalar/h-audi-a3.png" alt="araba" width="400" height="180"><div><p>Audi A3</p> <p>Günlük Fiyati: 2000 TL</p></div></li>
                     <li class="araba"><img src="arabalar/b-renault-clio.png" alt="araba" width="400" height="180"><div><p>Rentu Clio</p> <p>Günlük Fiyati: 900 TL</p></div></li>

                </ul>
           
                <div class="footer">
        <?php
        require("footer.php");
        ?>
       </div> </div>
        </body>
    
</html>