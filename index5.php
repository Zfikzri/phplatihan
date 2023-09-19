<?php
$dataArray = [
    [
       
        'foto' => 'mobil.jpg',
        'nama' => 'Stargazer',
        'desc' => 'Rp247.2 - 316.2 Juta'
    ],
    [
        
        'foto' => 'mobil2.jpg',
        'nama' => 'Ioniq 5',
        'desc' => 'Rp748 - 859 Juta'
    ],
    [
     
        'foto' => 'mobil3.jpg',
        'nama' => 'Wuling Alvez',
        'desc' => 'Rp209 - 295 Juta'
    ],
    [
       
        'foto' => 'mobil4.jpg',
        'nama' => 'Almaz Hybrid',
        'desc' => 'Rp472 Juta'
    ],
    [
       
        'foto' => 'mobil5.jpg',
        'nama' => 'Tiggo 7 Pro',
        'desc' => 'Rp369.5 - 435.5 Juta'
    ]
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h2 style="text-align:center;">Tabel Mobil</h2>
<table class="table">
    <tr>
        <th>No</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Harga</th>
    </tr>
    <?php
        $nomor=1;
        foreach ($dataArray as $data) {
        $data ["no"] = $nomor++;
    ?>
    <tr>
        <td><?= $data['no']; ?></td>
        <td><img src="img/<?php echo $data['foto']; ?>" width="100"></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['desc']; ?></td>
    <?php  } ?>
</table>

</body>
</html>
