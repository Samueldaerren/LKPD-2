<?php

// Fungsi untuk menghitung pecahan uang
function pecahanUang($uang) {
    // Daftar pecahan uang yang tersedia
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000];
    $arr = []; // Array untuk menyimpan hasil pecahan

    // Loop melalui setiap pecahan uang
    foreach ($pecahan as $nilai) {
        // Jika jumlah uang lebih besar atau sama dengan pecahan
        if ($uang >= $nilai) {
            // Hitung berapa banyak pecahan yang dibutuhkan
            $jumlah = floor($uang / $nilai);
            // Kurangi jumlah uang dengan total pecahan yang dipilih
            $uang -= $jumlah * $nilai;
            // Simpan hasil pecahan ke dalam array
            array_push($arr, "Rp. " . number_format($nilai, 0, "", "") . " x $jumlah");
        }
    }

    // Tampilkan hasil pecahan
    foreach ($arr as $value) {
        echo "<br>$value";
    }  
}

// Panggil fungsi dengan jumlah uang yang ingin dipecah
pecahanUang(325500);

?>
