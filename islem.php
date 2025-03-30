<?php
$adi=$_POST["adi"];
$soyadi=$_POST["soyadi"];
$telefon_numarasi=$_POST["numara"];
$uyuruk=$_POST["uyuruk"];
$hizmet=$_POST["hizmet"];
$cinsiyet=$_POST["cinsiyet"];

$baglanti=mysqli_connect("localhost","root","","proje");
if($baglanti){
echo "baglanti kuruldu";}
else {
echo "kurulmadi";
}
$sorgu = "INSERT INTO musteri_hizmet (	mus_adi,mus_soyadi,mus_numarasi,mus_uyuruk,mus_hizmet,mus_cinsiyet)
VALUES ('$adi','$soyadi','$telefon_numarasi','$uyuruk','$hizmet','$cinsiye')";
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    echo "Kayıt başarıyla eklendi";
}else{
    echo "Kayıt eklenemedi";
}

echo $sorgu;

?>
