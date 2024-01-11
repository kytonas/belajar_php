<?php
$kelas = 0;
$maksKelas = 5;
$tambah = 1;
echo "Hasil ke-$kelas";
echo "<br/>";
echo "Hasil ke-$tambah <br/>";

for ($i = 0 ; $i <= $maksKelas; $i++){ 
    $result = $kelas + $tambah;
    $kelas = $tambah;
    $tambah = $result;
    echo "Hasil ke-$result <br/>"; 
}