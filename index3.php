<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Nama Siswa</title>
</head>
<body>

<!-- ARRAY -->

<ul>
<?php
$siswa = ["Zidni","Seno","Arya","Ical","Alpareji"];

foreach ($siswa as $nama) {
    echo "<li>$nama</li>";
}
?>
</ul>

</body>
</html>
