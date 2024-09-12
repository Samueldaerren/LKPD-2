<?php
 
function hitungTotalBayar($totalPembelian)
{
    // Ambil hari saat ini dalam format 'l'
    $hariIni = date('l');  

    // diskon awal
    $diskon = 0;
 
    // jika hari selasa atu tuesday maka diskon 5%
    if ($hariIni == "Tuesday") {
        $diskon = 0.05;  
    }
 
    // Kalau beli lebih dari 100000 diskon 7%
    if ($totalPembelian > 100000) {
        $diskon = 0.07;  
    }

    // Hitung diskon
    $totalDiskon = $totalPembelian * $diskon;

    // Hitung total setelah diskon
    $totalBayar = $totalPembelian - $totalDiskon;

    // Kembalikan nilai total bayar
    return $totalBayar;
}

$totalPembelian = 130000;  // Total belanja pengguna
$hariIni = date('l');  // Ambil hari saat ini
$totalBayar = hitungTotalBayar($totalPembelian); // Hitung total bayar setelah diskon
 
// Tampilkan informasi pembelian dan hasil perhitungan
echo "Hari pembelian: <strong>$hariIni</strong><br>";
echo "Total pembelanjaan: <strong>Rp" . number_format($totalPembelian, 0, ',', '.') . "</strong><br>";
echo "Total yang harus dibayar: <strong>Rp" . number_format($totalBayar, 0, ',', '.') . "</strong>";
?>
