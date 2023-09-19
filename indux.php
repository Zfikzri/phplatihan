<?php

//SOAL

// $a=16;
// $b=2007;
// $c=2023; 

// if($c-$b==$a){
//     echo "Benar,Umur Saya ".$c-$b;
// }else{
//     echo "Salah,Umur saya $a,Ultah saya masih bulan depan";
// }

$siswa = 37;
$absen = 37;

for ($i = 1; $i <= $siswa; $i++) {
    if ($i == $absen) {
        echo "$i=absen saya";
    } elseif ($i % 2 == 0) {
        echo "$i=genap<br>" ;  
    } else {
        echo "$i=ganjil<br>";
    }
}

?>