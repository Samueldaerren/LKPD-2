<?php

// Array yang berisi daftar barang belanjaan
$barang = [
    [
        'nama_barang' => 'Pasta GIgi',
        'harga_barang' => 180000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ]
];

// Variabel untuk menyimpan total harga
$price = 0;

// Tampilkan judul daftar belanjaan
echo "Daftar belanjaan :  <br>";
echo "<ol>"; // Mulai daftar terurut

// Looping melalui setiap item di array $barang
foreach ($barang as $item) {
    // Hitung subtotal untuk setiap item (harga x jumlah beli)
    $subPrice = $item['harga_barang'] * $item['jumlah_beli'];

    // Tampilkan nama barang, jumlah beli, dan subtotal dengan format mata uang
    echo "<li>" . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") " . number_format($subPrice, 0, ".", ".") . "</li>";

    // Tambahkan subtotal ke total harga
    $price += $subPrice;
}

// Tutup daftar terurut
echo "</ol>";
echo "</br>"; // Tambahkan baris kosong

// Tampilkan total harga yang harus dibayar dengan format mata uang
echo 'Total harga yang harus di bayar adalah <b> Rp. ' . number_format($price, 0, '.', '.') . '</b>';

?>
