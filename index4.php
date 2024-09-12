<?php
    // Loop pertama untuk baris, dari 1 sampai 9
    for ($i = 1; $i < 10; $i++) {
        // Loop kedua untuk kolom, bikin 8 bintang per baris
        for ($j = 0; $j < 8; $j++) {
            // Cek apakah baris ini kelipatan 5
            if ($i % 5 == 0) {
                // Kalau iya, jangan tampilkan apa-apa
                echo ""; // Baris kelipatan 5 kosong
            } else {
                // Kalau bukan kelipatan 5, tampilkan bintang
                echo "*";
            }
        }
        // Pindah ke baris baru setelah selesai satu baris
        echo "<br>";
    }
?>
