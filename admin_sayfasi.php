<?php
session_start();

if (isset($_SESSION["username"])){

  echo'<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="adminstil.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sayfasi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="bas">
       
<a href="admin_sayfasi.php" class="baslik">Admin Sayfası</a>
  <div class="logout"><a href="logout.php">Çıkış</a></div>
   </div>
   

    <div class="menu">
        <h3>Admin işlemler</h3>
        <ul>
        <li><a href="mesajlar_gos.php">Mesajlar</a></li>
                <li><a href="rez_gos.php">Rezervasyonlar</a></li>
        </ul>
    </div>
    <div class="main-icerik">
    Admin Sayfısınna Hoş Geldiniz
    </div>

  </div>
</body>
</html>'
;
}
else {
  header("Location: admin_login.php");
}
?>

