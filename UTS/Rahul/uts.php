<!DOCTYPE html>
<html>
<head>
    <title>Input Data Piala Asia U-23 Qatar Group B</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            font-weight: bold;
        }
        input[type="number"], input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Input Data Piala Asia U-23 Qatar Group B</h2>

<form method="post" action="">
    <label for="negara">Nama Negara:</label>
    <select name="negara" id="negara">
        <option value="Korea Selatan U-23">Korea Selatan U-23</option>
        <option value="Jepang U-23">Jepang U-23</option>
        <option value="Tiongkok U-23">Tiongkok U-23</option>
        <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
    </select><br>
    <label for="pertandingan">Jumlah Pertandingan (P):</label>
    <input type="number" name="pertandingan" id="pertandingan" required><br>
    <label for="menang">Jumlah Menang (M):</label>
    <input type="number" name="menang" id="menang" required><br>
    <label for="seri">Jumlah Seri (S):</label>
    <input type="number" name="seri" id="seri" required><br>
    <label for="kalah">Jumlah Kalah (K):</label>
    <input type="number" name="kalah" id="kalah" required><br>
    <label for="poin">Jumlah Poin:</label>
    <input type="number" name="poin" id="poin" required><br>
    <label for="operator">Nama Operator:</label>
    <input type="text" name="operator" id="operator" required><br>
    <label for="nim">NIM Mahasiswa:</label>
    <input type="text" name="nim" id="nim" required><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $negara = $_POST['negara'];
    $pertandingan = $_POST['pertandingan'];
    $menang = $_POST['menang'];
    $seri = $_POST['seri'];
    $kalah = $_POST['kalah'];
    $poin = $_POST['poin'];
    $operator = $_POST['operator'];
    $nim = $_POST['nim'];

    // Membaca isi dari db.html
    $data = file_get_contents('db.html');

    // Mendapatkan waktu dan jam sekarang
    $waktu = date("d M Y H:i:s");

    // Mengganti placeholder dengan data yang baru
    $data_baru = str_replace("Data Group B Piala Asia Qatar U-23", "Data Group B Piala Asia Qatar U-23<br>Per $waktu (Waktu dan Jam Sekarang)<br>Nama Operator/NIM: $operator/$nim", $data);
    $data_baru .= "<br><br>$negara\t$pertandingan\t$menang\t$seri\t$kalah\t$poin";

    // Menuliskan data baru ke db.html
    file_put_contents('db.html', $data_baru);
}
?>

</body>
</html>
