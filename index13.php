<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
 body {
    color: black;
 }

.form {
	width: 335px;
	background: #2F495A;
	margin: 100px auto;
	padding: 10px 20px 50px 20px;
	border-radius: 5px;
	box-shadow: 0px 10px 20px 0px #D1D1D1;
}
 
.bil{
	width: 300px;
	margin: 5px;
	border: none;
	font-size: 16pt;
	border-radius: 5px;
	padding: 10px;	
}
 
.opt{
	font-size: 16pt;
	border: none;
	width: 215px;
	margin: 5px;
	border-radius: 5px;
	padding: 10px;
}
 
.tombol{
	background: grey;
	border-radius: 100px;
	padding: 10px 20px;
	color: #eee;
	font-size: 15pt;
	border-bottom:4px solid grey;
}

 

    </style>
</head>
<body>
<div class="form">
<form action="" method="post">
    Angka 1: <input class="bil" type="text" name="angka1" required><br>
    Angka 2: <input class="bil" type="text" name="angka2" required><br>
    Operator: 
    <select name="operator" class="opt">
        <option value="pertambahan">+</option>
        <option value="perkurangan">-</option>
        <option value="perkalian">*</option>
        <option value="pembagian">/</option>
    </select>
    <br>
    <input class="tombol" type="submit" name="hitung" value="Hitung">
</form>

<?php
if(isset($_POST['hitung'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case 'pertambahan':
            $hasil = $angka1 + $angka2;
            break;
        case 'perkurangan':
            $hasil = $angka1 - $angka2;
            break;
        case 'perkalian':
            $hasil = $angka1 * $angka2;
            break;
        case 'pembagian':
            $hasil = $angka1 / $angka2;
            break;            
        default:
            break;
    }
    echo "<br>Hasil: " . $hasil;
}
?>
</div>
</body>
</html>

