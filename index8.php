<?php 
// Array awal dengan beberapa string, termasuk duplikat
$array1 = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl", "kln", "pmn"];

// Menggabungkan array, dalam kasus ini hanya satu array jadi hasilnya sama
$combined_array = array_merge($array1);

// Menghapus duplikat dari array, jadi hanya nilai unik yang tersisa
$unique_array = array_unique($combined_array);

// Mengurutkan array dari nilai terbesar ke terkecil berdasarkan nilai string
arsort($unique_array);

// Menampilkan setiap nilai di array unik
foreach ($unique_array as $value) {
    echo $value . "\n";
}
?>
