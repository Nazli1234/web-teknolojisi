<?php
//header("Location: login.php");
$kullaniciadi=$_POST["kullaniciadi"];
$sifre=$_POST["sifre"];

if($kullaniciadi=="")
{
    echo "Kullanıcı adı boş olamaz...</br>";
}

if($sifre=="")
{
    echo "Şifre boş olamaz...</br>";
}

if ($kullaniciadi!="" && $sifre!="" && filter_var($kullaniciadi,FILTER_VALIDATE_EMAIL)==false)
{ 
    echo "Kullanıcı adı mail adresi olmalıdır...";
}

if($kullaniciadi!="" && $sifre!="" && filter_var($kullaniciadi,FILTER_VALIDATE_EMAIL)==true && $sifre!=364964)
{
	echo "Giriş başarısız...";	
}

if($kullaniciadi=="b191210074@sakarya.edu.tr" && $sifre==364964)
{
	echo "Başarılı bir şekilde giriş yapılmıştır...HOŞGELDİN b191210074...";	
}

?>