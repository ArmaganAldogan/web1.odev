<html>

<head>
<!-- Açıklama satırı : Shift + Alt + A -->
<!-- Web sitesi head bloğu -->
<title> Web programlama dersi </title>
<meta charset="UTF-8">
<meta name ="keywords" content= "Web,Php,Mvc,Programlama">
<meta name ="description" content= "Abc firması ... Alanda ... yılından beri hizmet vermektedir">
<meta name ="author" content ="... Yazılım">
</head>

<body>

<h4>Php Programalama</h4>

<!-- HTML açıklama satırıdır -->
<?php

/* Php açıklama satırları */
// Tek satır açıklama

echo "<h3>Php Dersi</h3>";
echo "<h3> ADÜ - AYMES </h3> <hr> " . "Bilgisayar Programcılığı";
//echo "<h3> ADÜ - Aymes </h3> <hr> "Bilgisayar Programcılığı";

echo "<h3>Değişken tanılamada dikkat edilecek hususlar</h3>";

echo
"<ol>
        <li> Php'de değişken isimleri $ işareti ile başlar. </li>
        <li> Php'de değişken isimleri sayısal ifadelerle başlayamaz </li>
        <li> Php'de değişken isimleri iki kelimeden oluşuyorsa - veya _ kullanılır</li>
        <li> Php'de değişken isimlerinde Türkçe karakte kullanılmamalıdır</li>
        <li> Php'de değişken isimleride büyük-küçük harf duyarlılığı vardır.</li>
        <li> Php'de değişken içeriğinde eğer metinsel ifade varsa \" veya ' kullanılır. </li>
        <li> Php'de değişken içeriğinde eğer sayısal ifade varsa tırnak kullanmadan direk yazılır.</li>

</ol>";

echo "<h3> Değişeken Tanımlama Örnekleri </h3>";

$isim="Armağan";
$soyisim ="Aldoğan";

  echo "$isim $soyisim"; // echo $isim ." ". $soyisim;
  

?>


</body>

</html>