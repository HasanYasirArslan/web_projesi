<?php
echo "Adınız:".$_POST["ad"]."<br>";
echo "Soyadınız:".$_POST["soyad"]."<br>";
echo"Doğum Tarihiniz:".$_POST["dgm"]."<br>";
echo"Şifreniz:".$_POST["sifre"]."<br>";
echo"Email Adresiniz:".$_POST["email"]."<br>";
hobiYazdir();
echo"<br>"."Takım:".$_POST["takım"]."<br>";
echo "İşletim Sisteminiz:".$_POST["sistem"]."<br>";
echo"Tarayıcınız:".$_POST["tarayici"]."<br>";
echo"Açıklama:".$_POST["acıklama"];

function hobiYazdir()
{
    echo "Hobileriniz:";
    foreach ($_POST["hobi"] as $hobi) {
        echo "$hobi ";
      }
}
?>