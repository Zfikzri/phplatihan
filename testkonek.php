<?php
include "koneksi.php";
include "function.php";

$data = query("SELECT * FROM data");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="stylekonek.css">
</head>
<body>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Foto</th>
        <th>Aksi</th> 
    </tr>
    <?php foreach ($data as $datafull) { ?>
        <tr>
            <td><?= $datafull->id; ?></td>
            <td><?= $datafull->nama; ?></tds>
            <td><?= $datafull->harga; ?></td>
            <td><?= $datafull->deskripsi; ?></td>
            <td><img src="<?= $datafull->foto; ?>" alt=""></td>
            <td>
                <a href="hapus.php?id=<?= $datafull->id; ?>"><button>Hapus</button></a>
            </td>
        </tr>
    <?php } ?>
</table>

<a href="tambah.php"><button>Tambah Data</button></a>

</body>
</html>
