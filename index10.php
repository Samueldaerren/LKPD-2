<?php

// Fungsi untuk memeriksa jawaban dan memberikan hasil
function checkJawaban($nama, ...$arrJawaban) {
    // Kunci jawaban yang benar
    $jawaban = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];

    // Array untuk menyimpan hasil benar atau salah
    $arrBenar = [];

    // Loop untuk mengecek setiap jawaban
    foreach ($jawaban as $key => $value) {
        // Cek jika jawaban pengguna sesuai dengan kunci jawaban
        if (isset($arrJawaban[$key]) && $arrJawaban[$key] == $value) {
            // Jawaban benar, tambahkan 1
            $arrBenar[$key] = 1;
        } else {
            // Jawaban salah, tambahkan 0
            $arrBenar[$key] = 0;
        }
    }

    // Tampilkan hasil
    echo "Nama : $nama <br>";
    // Hitung jumlah jawaban benar
    echo "Jumlah jawaban benar : <b>" . count(array_keys($arrBenar, 1)) . "</b><br>";
    // Hitung jumlah jawaban salah
    echo "Jumlah jawaban salah : <b>" . count(array_keys($arrBenar, 0)) . "</b><br>";
}

// Contoh penggunaan fungsi dengan nama dan jawaban
checkJawaban("Daerren", 'A', 'D', 'C', 'B', 'B', 'A', 'E', 'B', 'A', 'E');

?>
