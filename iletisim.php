<?php
$adsoyad=$_POST["adsoyad"];        
$e_mail=$_POST["e_mail"];
$mesaj=$_POST["mesaj"];

if($adsoyad!=""&& $e_mail!=""&& $mesaj!="")
{
   echo "Ad Soyad:".$adsoyad."</br>";
   echo "E-Mail: ".$e_mail."</br>";
   echo "Mesajınız: ".$mesaj;
}

?>