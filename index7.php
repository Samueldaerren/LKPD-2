<?php

// Fungsi untuk membungkus teks jika lebih dari 50 karakter
function wrapText($text) {
    // Pisahkan teks menjadi array karakter
    $count = str_split($text);

    // Cek apakah jumlah karakter lebih dari 50
    if (count($count) > 50) {
        // Potong teks sampai 50 karakter dan tambahkan elipsis
        $text = substr($text, 0, 50);
        $text .= "...";
    }

    // Tampilkan teks yang sudah diproses
    echo $text;
}

$kata = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel auctor turpis. Donec vel erat sollicitudin, accumsan lectus eget, blandit orci. Integer ut erat ipsum. Sed porta at erat vitae ornare. Aenean auctor, lacus ac condimentum ultricies, mi enim lobortis nibh, sit amet laoreet arcu felis nec quam. Cras euismod ex magna, in scelerisque urna laoreet quis. Aliquam tincidunt lacus sed tempor dapibus. Morbi sit amet dolor hendrerit, sollicitudin purus non, blandit sem.";

// Tampilkan kalimat awal
echo "<b>Kalimat awal : </b> " . $kata . "</br>";

// Panggil fungsi untuk membungkus teks
wrapText($kata);

?>
