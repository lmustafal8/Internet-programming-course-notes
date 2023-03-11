<?php

// 4 adet sayı değişkeni
$s1 = 10;
$s2 = 20;
$s3 = 30;
$s4 = 40;

echo "<br>Sayı 1 : " . $s1;
echo "<br>Sayı 2 : " . $s2;
echo "<br>Sayı 3 : " . $s3;
echo "<br>Sayı 4 : " . $s4;

// İki sayının toplamını ve ortalamasını bulalım
$ikili_toplam = $s1 + $s2;
$ikili_ortalamasi = $ikili_toplam / 2;

echo "<p> İki sayının toplamı: " . $ikili_toplam . "<br>";
echo "İki sayının ortalaması: " . $ikili_ortalamasi . "<br><br>";

// Üç sayının toplamını ve ortalamasını bulalım
$uclu_toplam = $s1 + $s2 + $s3;
$uclu_ortalamasi = $uclu_toplam / 3;

echo "Üç sayının toplamı: " . $uclu_toplam . "<br>";
echo "Üç sayının ortalaması: " . $uclu_ortalamasi . "<br><br>";

// Dört sayının toplamını ve ortalamasını bulalım
$dortlu_toplam = $s1 + $s2 + $s3 + $s4;
$dortlu_ortalamasi = $dortlu_toplam / 4;

echo "Dört sayının toplamı: " . $dortlu_toplam . "<br>";
echo "Dört sayının ortalaması: " . $dortlu_ortalamasi . "<br><br>";

// s2'nin s3'e göre modunu hesaplayalım
$s2_mod_s3 = $s2 % $s3;
echo "s2 mod s3: " . $s2_mod_s3 . "<br>";

// s4'ün s1'e göre modunu hesaplayalım
$s4_mod_s1 = $s4 % $s1;
echo "s4 mod s1: " . $s4_mod_s1 . "<br>";

?>
