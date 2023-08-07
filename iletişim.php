<?php
echo "Adınız:".$_POST["ad"]."<br>";
echo "Soyadınız:".$_POST["soyad"]."<br>";
echo"Doğum Tarihiniz:".$_POST["dgm"]."<br>";
echo"Şifreniz:".$_POST["sifre"]."<br>";
echo"Email Adresiniz:".$_POST["email"]."<br>";
hobiYazdir();
echo "<br>";
takimYazdir();
echo "<br>";
echo "İşletim Sisteminiz:".$_POST["sistem"]."<br>";
echo"Tarayıcınız:".$_POST["tarayici"]."<br>";
echo"Açıklama:".$_POST["acıklama"];

 function hobiYazdir()
 {   
  echo "Hobileriniz:";
  if(isset($_POST["hobi"])){
    foreach ($_POST["hobi"] as $hobi) {
     echo "$hobi " ;
  }
  }
   else     
   echo "Herhangi bir hobi seçmediniz.";
 }
 function takimYazdir()
 {   
  echo "Takımınız:";
  if(isset($_POST["takım"])){
    echo "$takım " ;
  }
   else     
   echo "Herhangi bir takım seçmediniz.";
 }
?>