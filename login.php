<?php
$ad="b221210096@sakarya.edu.tr";
$Ad="B221210096@sakarya.edu.tr";
$sifre="b221210096";
if($_POST["Kullanici"]==$ad||$_POST["Kullanici"]==$Ad){
    if($_POST["Sifre"]==$sifre)
    echo "Hoşgeldiniz B221210096.";
    else{
        $x = $_SERVER["HTTP_REFERER"];
        header("Location: $x");
    }
}
else{
    $x = $_SERVER["HTTP_REFERER"];
    header("Location: $x");
}
?>