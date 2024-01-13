<?php
echo "Evaluasi Karyawan <br>";

for($id = 1; $id <= 20; $id++){
    if ($id % 3 == 0 && $id % 2 == 1) {
        echo "$id. Istimewa<br>";
    } else if ($id % 2 == 1) {
        echo "$id. Memuaskan<br>";
    } else if ($id % 2 == 0) {
        echo "$id. Cemerlang<br>";
    }
} 