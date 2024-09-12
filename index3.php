<?php
    // Looping dari angka 1 sampai 29
    for ($i = 1; $i < 30; $i++) {  
        // Cek 120 habis dibagi $i
        if (120 % $i == 0) {  
            // Jika ya hasil bagi dari 120 dengan $i
            echo "120 : $i = " . 120 / $i . "<br>";  
        }
    }
?>
