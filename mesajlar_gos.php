<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="adminstil.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sayfasi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<html>
<body>
   
<div class="bas">
       
       <a href="admin_sayfasi.php" class="baslik">Admin Sayfası</a>
         <div class="logout"><a href="index.php">Çıkış</a></div>
          </div>

    <div class="menu">
        <h3>Admin işlemler</h3>
        <ul>
        <li class="active"><a href="mesajlar_gos.php">Mesajlar</a></li>
                <li><a href="rez_gos.php">Rezervasyonlar</a></li>
        </ul>
    </div>
    <div class="sql_table">
    <?php
    require_once"function.php";
$baglanti=baglan();
$sorgu = "SELECT * FROM mesajlar";
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    echo '
    <table border="1">
    <tr><th>ID</th><th>Adı</th><th>Eposta</th><th>Mesaj</th ><th>duzenleme</th ><th>Selme</th >
    
    </tr>';
    while($satir=mysqli_fetch_assoc($sonuc)){
     
        echo '
        <tr>
            <td>'.$satir["id"]."</td>
            <td>".$satir["msg_adi"]."</td>
            <td>".$satir["eposta"]."</td>
            <td>".$satir["mesaj"].'</td>
            <td><a href="mesaji_duzenle.php?id='.$satir["id"].'">Düzenle</a></td>
            <td><a href="mesaji_sil.php?id='.$satir["id"].'">Sil</a></td>
            </tr> 

        </tr>';
    }
    echo "</table>";

}


?>
</div>
</body>
</html>