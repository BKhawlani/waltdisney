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
        <li ><a href="mesajlar_gos.php">Mesajlar</a></li>
                <li  class="active"><a href="rez_gos.php">Rezervasyonlar</a></li>
        </ul>
    </div>
    <div class="sql_table">
    <?php
    require_once"function.php";
$baglanti=baglan();
$sorgu = "SELECT * FROM musteri_hizmet";
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    echo '
    <table border="1">
    <tr><th>ID</th><th>Adı</th><th>Soyadi</th><th>Telefon Numarası</th ><th>Uyuruk</th ><th> Müştrinin İstediği Hizmet</th ><th>Cinsiyet</th > ><th>Selme</th >
    
    </tr>';
    while($satir=mysqli_fetch_assoc($sonuc)){
        $cinsiyet="";
        if($satir["mus_cinsiyet"]==1){
            $cinsiyet="Erkek";
        }else{
            $cinsiyet="Kadın";
        }
        echo '
        <tr>
            <td>'.$satir["mus_id"]."</td>
            <td>".$satir["mus_adi"]."</td>
            <td>".$satir["mus_soyadi"]."</td>
            <td>".$satir["mus_numarasi"]."</td>
            <td>".$satir["mus_uyuruk"]."</td>
            <td>".$satir["mus_hizmet"]."</td>
            <td>".$cinsiyet.'</td>
   
            <td><a href="rez_sil.php?id='.$satir["mus_id"].'">Sil</a></td>
            </tr> 
            </tr> 

        </tr>';
    }
    echo "</table>";

}


?>
</div>
</body>
</html>