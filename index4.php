<?php
$databuah = [
    [
        "nama" => "Semangka",
        "Harga" => 10000,
        "Rasa" => "Manis"
    ],
    [
        "nama" => "Lemon",
        "Harga" => 3000,
        "Rasa" => "Asam"
    ],
    [
        "nama" => "Cabai",
        "Harga" => 3000,
        "Rasa" => "Pedas"
    ]
];
?>

<h2>Data Buah</h2>
<ul>
    <?php foreach ($databuah as $buah) { ?>
        <li>
            Nama: <?php echo $buah["nama"]; ?><br>
            Harga: <?php echo $buah["Harga"]; ?><br>
            Rasa: <?php echo $buah["Rasa"]; ?>
        </li>
    <?php } ?>
</ul>