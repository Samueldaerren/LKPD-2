<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemeriksaan Karakter</title>
</head>
<body>
    <form method="POST" action="">
    <label for="teks">Masukan teks :</label>
    <input type="text" id="nama" name="nama" required>
    <input type="submit" value="submit">
    </form>

    <?php
    // Cek form udah di sumbit atau belum
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $teks = $_POST['nama']; // Ambil teks yang diinput 

        // Cari karakter bukan huruf dan bukan-spasi
        preg_match_all('/[^a-zA-Z\s]/', $teks, $matches);

        // Cek apakah ada simbol yang ditemukan
        if (count($matches[0]) > 0) { 
            $uniqueSymbols = array_unique($matches[0]); // mengabil simbol unik kalau ada yang duplikat akan di hilangkan
            echo "<p>Karakter yang terdapat pada kalimat: " . implode(', ', $uniqueSymbols) . "</p>"; // menampilkan hasil ke browser
        } else {
            echo "<p>Tidak terdapat simbol pada kalimat.</p>"; // jika tidak ada simbol maka akan mengeluarkan echo
        }
    }
    ?>
</body>
</html>
