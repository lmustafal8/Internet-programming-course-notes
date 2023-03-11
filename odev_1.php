<?php

    $kitapAdi = "Tutunamayanlar";
    $aciklama = "Oğuz Atay'ın en önemli eserlerinden biri olan Tutunamayanlar, modern Türk edebiyatının en önemli yapıtları arasında yer alır.";
    $tür = "Roman";
    $sayfaSayisi = 472;
    $yazarAdi = "Oğuz Atay";
    $basimTarihi = 1972;
    $konusu = "Selim Işık'ın intihar ettiğini öğrenen Turgut Özben, ihmal ettiğini düşündüğü arkadaşının geçmişinin izini sürmeye ve Selim'in tanıdığı insanlar aracılığıyla onu tanımaya çalışır. Her insana farklı bir yönünü gösteren Selim'in görüntüsü, Turgut'un bu insanlarla konuşması sonucu okuyucunun ve Turgut'un gözünde netlik kazanacaktır. Romanda birçok kişi vardır ama her biri aslında Selim'in hayatındaki kişilerdir ve tüm anlatılanlar Selim Işık'ı aydınlatır. Selim Işık, düşünen ve sorgulayan insanın simgesidir ve bu yüzden hayata tutunamamış ve bir tutunamayan olmuştur.

    Yıldız Ecevit'in yazdığı -Ben Buradayım...- başlıklı Oğuz Atay biyografisinin ardından, romanın pek çok otobiyografik öğe taşıdığı anlaşılmıştır. Berna Moran'a göre küçük burjuva dünyasını zekice alaya alan Atay, saldırısını, tutunanların anlamayacağı, red edeceği türden bir romanla yapar.";

    echo "<h1>Kitap Adı: " . $kitapAdi . "</h1>";
   echo "Yazar Adı: " . $yazarAdi . "<br>"; 
   echo "Sayfa Sayısı: " . $sayfaSayisi . "<br>";
    
    echo "Basım Tarihi: " . $basimTarihi . "<br>";

    echo "<p>$kitapAdi, $aciklama</p>";
    
 
    echo "Kitap Konusu : ". $konusu. "<br>";

   
    $url = "https://tr.wikipedia.org/wiki/Tutunamayanlar";
    echo "<a href='$url'>Daha fazla bilgi için buraya tıklayın</a><br>";

    $urlpdf ="https://www.academia.edu/23714877/Oguz_Atay_Tutunamayanlar";

    echo "<a href='$urlpdf'>Kitabı okumak için tıklayın.</a>;<br>";
?>
