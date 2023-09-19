<?php 
require "function.php";

// cek apakah tombol tambah sudah di klik
if(isset($_POST['submit'])){
    // mengambil data dari setiap kolom
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];

    // Panggil fungsi tambahData
    $result = tambahData($nama, $harga, $deskripsi, $foto);

    if ($result) {
        echo "
          <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'testkonek.php';
          </script>
        ";
    } else {
        echo "
          <script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'testkonek.php';
          </script>
        ";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="styletambah.css">
</head>
<body>

<h1>Tambah Data</h1>

<form  method="POST">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required><br>

    <label for="harga">Harga:</label>
    <input type="text" id="harga   " name="harga" required><br>

    <label for="deskripsi">Deskripsi:</label>
    <textarea id="deskripsi" name="deskripsi" required></textarea><br>

    <label for="foto">Foto:</label>
    <input type="text" id="foto" name="foto" accept="image/*" required><br>

    <button type="submit" name="submit"\1>Tambah Data</button>
</form>

<a href="testkonek.php">Kembali ke Halaman Utama</a>

</body>
</html>
