<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- FUNCTION -->

<?php 
function salam($nama1="",$nama2=""){
    return "Selamat Pagi, $nama1 dan $nama2";
}

?>

<h3><?= salam("admin","semua") ?></h3>
<p><?php echo salam() ?></p>
    
</body>
</html>