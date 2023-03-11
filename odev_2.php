<?php 

$sayi1 = 21;
$sayi2 = 32;

echo "Girilen birinci sayı: ";
echo $sayi1;
echo "<br>Girilen ikinci sayi: " . $sayi2;
echo "<br><br> <hr>Matematiksel işlemler: <br><br>";

// Toplama işlemi
$toplama = $sayi1 + $sayi2; 
echo $sayi1 . " + " . $sayi2 . " = " . $toplama . "<br>";

// Çıkarma işlemi
echo $sayi1 . " - " . $sayi2 . " = " . ($sayi1-$sayi2) . "<br>";
echo $sayi2 . " - " . $sayi1 . " = " . ($sayi2-$sayi1) . "<br>";

// Çarpma işlemi
echo $sayi1 . " x " . $sayi2 . " = " . ($sayi1*$sayi2) . "<br>";

// Bölme işlemi
echo $sayi2 . " / " . $sayi1 . " = " . ($sayi2/$sayi1) . "<br>";

// Mod alma işlemi
echo "<br> Mod almak için % işareti kullanılır. mod alma kalanı verir.<br>";
$modSonuc = $sayi2 % $sayi1;
echo $sayi2 . " % " .  $sayi1 . " = ";
echo $modSonuc;

?>
