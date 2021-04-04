<!DOCTYPE html>
<html>
<head>
    <title>Anggota Keluarga</title>
</head>
<body>

<?php foreach ($anggota_keluarga = ["Santo Suling", "Santara", "Stella Suling", "Steven Suling"] as $ak){ ?>  
<br>Nama: <?= $ak; ?>
<br>Jumlah kata: <?= str_word_count($ak) ?>
<br>Jumlah huruf: <?= strlen($ak) ?>
<br>Kebalikan nama: <?= strrev($ak) ?> <br>

<?php
$teks_awal = trim($ak); 
$teks_modif = strtolower($teks_awal); 
$teks=str_replace(' ','',$teks_modif); 
$jumlah = strlen($teks); 

//substr_count adalah fungsi menghitung jumlah huruf/kalimat
$a = substr_count($teks, "a"); //hitung jumlah huruf “a”
$i = substr_count($teks, "i"); //hitung jumlah huruf “i”
$u = substr_count($teks, "u"); //hitung jumlah huruf “u”
$e = substr_count($teks, "e"); //hitung jumlah huruf “e”
$o = substr_count($teks, "o"); //hitung jumlah huruf “o”

$vocal = $a+$i+$u+$e+$o; //hitung total jumlah huruf vocal
$konsonan = $jumlah - $vocal;

echo "Kalimat \"".$teks_awal."\" memiliki :" ."<br>";

echo "Jumlah karakter = $jumlah "."<br>";

echo "jumlah huruf vocal = $vocal "."<br>";

echo "Jumlah huruf kosonan = $konsonan"."<br>";

?>

<br>
<?php } 

?>


</body>
</html>