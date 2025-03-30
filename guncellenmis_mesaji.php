<?php
    $baglanti = mysqli_connect("localhost","root","","proje");
    if($baglanti){
        //echo "Bağlandık ";
    }else{
        echo "Problem var ";
    }
   
$msg_id = $_GET["id"];
$msg_adi=$_POST["adi"];
$eposta = $_POST["eposta"]; 
$mesaj = $_POST["mesaj"]; 
$sorgu ="UPDATE mesajlar SET  msg_adi='$msg_adi',eposta='$eposta',mesaj='$mesaj' WHERE id=$msg_id";
$sonuc=mysqli_query($baglanti,$sorgu);
if($sonuc){
    header("location:mesajlar_gos.php");
}else{
    echo "Problem var";
}

?>