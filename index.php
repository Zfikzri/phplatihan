<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Belajar</title>
</head>
<body>

    <?php
    
        $kelas = "10 PPLG 1";

    ?>

    <h1>HELLO <?php echo $kelas. " Dhiyandr sekarang naik kelas " . $kelas;?></h1>

    <?php 
//CONCAT
//PENGGABUNGAN STRING PAKAI TITIK .
$namadepan="Aziz ";
$namabelakang="Ibrahim ";

echo $namadepan . $namabelakang;

//PENUGASAN ASSIGNMENT

$x=20;
$x -=9;

echo $x;

//PERBANDINGAN ASSIGNMENT
$a=5;
$b=5;

var_dump($a==$b);

//IDENTITAS
$c=10;
$d="10";

var_dump($c!==$d);

$e=7+4;
$f="15";

var_dump($e<$f);

$ab=18*6;
$cd="60";
$ef=70;

var_dump($cd >= $ab && $ab < 10 || $ef == 70);

//LOOP PERULANGAN

for($i=0;$i<=10;$i++){
    echo $i;
}

$o=1;
while ($o<=10){
    echo "Selamat Pagi";
    $o++;
}

$p=0;
do{
    echo "Selamat Datang";
    $p++;
}while($p<=10)





?>
</body>
</html