<?php

// Dua array dengan angka-angka yang berbeda
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// Gabungkan kedua array menjadi satu
$bilangan = array_merge($bil1, $bil2);

// Hapus angka-angka duplikat, jadi hanya angka unik yang tersisa
$bilanganUnique = array_unique($bilangan);

// Urutkan angka-angka unik dari yang terbesar ke yang terkecil
rsort($bilanganUnique);

// Tampilkan hasilnya
echo "Hasil: ";

// Gabungkan semua angka yang unik menjadi satu string dengan koma sebagai pemisah
echo implode(', ', $bilanganUnique);

?>
