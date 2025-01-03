<?php
function carp($deger1,$deger2)
{
    echo"<b>Return ile sonuç döndürme</b>"."<br>";
    $sonuc=$deger1*$deger2;
    return $sonuc;
}
$hesapla=carp(5,6);
echo"Çarpma İşleminin sonucu: ".$hesapla;
?>
