<style>
    h1{
             

                text-align: center;
                color:green;
            
    }
</style>
<?php

header("location:mesajlar_gos.php");
require_once("function.php");
$baglanti= baglan();
$msg_id=$_GET["id"];
$sorgu = "DELETE FROM mesajlar WHERE id='$msg_id'";
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    echo "<h1>Kayıt silinmiştir.</h1>";
}else{
    echo "Kayıt silinmemiştir.";
}

?>