<?php
$a = 5;
$b = 2;

echo "<b>a). Operator Aritmatika</b> <hr>";
//Penjumlahan
echo "Penjumlahan <br>";
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

//Pengurangan
echo "Pengurangan <br>";
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

//Perkalian
echo "Perkalian <br>";
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

//Pembagian 
echo "Pembagian <br>";
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

//Sisa Bagi
echo "Sisa Bagi <br>";
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

//Pangkat
echo "Pangkat <br>";
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";

echo "<b>b). Operator Penugasan</b> <hr>";
$speed = 83;

//Operator aritmatika
$speed = $speed + 10;

//maka nilai speed samadengan 83 + 10 = 93

//Operator penugasan
$speed += 10;

//maka nilai speed samadengan 93 + 10 = 103

echo "Hasil Operator Penugasan : $speed <hr>";

echo "<b>c). Operator Increment & Decrement</b> <hr>";

$tambah = 0;

$tambah++;
$tambah++;
$tambah++;

echo "Hasil Operator Increment : $tambah <br>";

$kurang = 3;

$kurang--;
$kurang--;
$kurang--;

echo "Hasil Operator Decrement : $kurang <hr>";

echo "<b>d). Operator Relasi</b> <hr>";
$a = 6;
$b = 2;

//menggunakan relasi lebih besar
echo "Operator relasi lebih besar <br>";
$c = $a > $b;
echo "$a > $b : $c";
echo "<hr>";

//menggunakan relasi lebih kecil
echo "Operator relasi lebih kecil <br>";
$c = $a < $b;
echo "$a < $b : $c";
echo "<hr>";

//menggunakan relasi sama dengan
echo "Operator relasi sama dengan <br>";
$c = $a == $b;
echo "$a == $b : $c";
echo "<hr>";

//menggunakan relasi tidak sama dengan
echo "Operator relasi tidak sama dengan <br>";
$c = $a != $b;
echo "$a != $b : $c";
echo "<hr>";

//menggunakan relasi lebih besar sama dengan
echo "Operator relasi lebih besar sama dengan<br>";
$c = $a >= $b;
echo "$a >= $b : $c";
echo "<hr>";

//menggunakan relasi lebih besar sama dengan
echo "Operator relasi lebih kecil sama dengan<br>";
$c = $a <= $b;
echo "$a <= $b : $c";
echo "<hr>";



