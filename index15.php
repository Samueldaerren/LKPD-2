<?php
echo strlen("Hello world");
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemeriksaan jumlah string</title>
</head>
<body>
    <form method="POST" action="">
    <label for="teks">Masukan teks :</label>
    <input type="text" id="teks" name="teks" required>
    <input type="submit" value="submit">
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teks = $_POST['teks'];


    if (strlen($teks) > 0) {
        $totalAbjad = strlen($teks);
        echo "Total abjad : $totalAbjad";
    } else {
        echo "<p>Tidak terdapat simbol pada kalimat.</p>";
    }
}
?>
</body>
</html>

