<?php
// for ($i = 1; $i <= $; $I++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "$j";
//     }
//     echo "<br>";
// }

function cetak_angka($n){
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$j";
        }
        echo "<br>";
    }
}

cetak_angka(5);
echo "<hr>";
cetak_angka(10);