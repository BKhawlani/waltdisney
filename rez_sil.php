<style>
    h1{
             

                text-align: center;
                color:green;
            
    }
</style>
<?php

header("location:rez_gos.php");
require_once("function.php");
$baglanti= baglan();
$mus_id=$_GET["id"];
$sorgu = "DELETE FROM musteri_hizmet WHERE mus_id='$mus_id'";
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    echo "<h1>Kayıt silinmiştir.</h1>";
}else{
    echo "Kayıt silinmemiştir.";
}

?>