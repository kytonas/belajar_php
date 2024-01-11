<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "Belajar PHP" ?></title>
    </head>
    <body>
        <?php
            $nama = "Ksatria Faikar Nasywaan <br>";
            $umur = "16 Tahun <br>";
            $jk = "Laki - laki <br>";
            $sekolah = "SMK Assalaam Bandung <br>";
            $nilai = 90 ;
            $telepon = "085724568172 <hr>";
            $lulus = "Anda lulus masuk universitas Institut Teknologi Bandung Fakultas STEI (Sekolah Teknik Elektro dan Informatika)<hr>";
            $maaf = "Maaf, anda tidak lulus masuk universitas Institut Teknologi Bandung Fakultas STEI (Sekolah Teknik Elektro dan Informatika)<hr>";


            echo "<b>Biodata</b> <hr>";
            echo "Nama : $nama";
            echo "Umur : $umur";
            echo "Jenis Kelamin : $jk";
            echo "Asal Sekolah : $sekolah";
            echo "Nomor Telepon : $telepon";    
            echo "Nilai Rata-rata : $nilai";
            

            if ($nilai > 89.88) {
                echo "<br> Status : $lulus";
            }
            else {
                echo "<br>Status : $maaf";
            }
         ?>
    </body>
</html>