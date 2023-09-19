<?php
require "koneksi.php";
global $koneksi;

function tambahData($nama, $harga, $deskripsi, $foto){
    global $koneksi;
    $query = "INSERT INTO data (nama, harga, deskripsi, foto)
              VALUES ('$nama','$harga','$deskripsi','$foto')";
    
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi); 
}

function hapusData($id){
    global $koneksi;
    $query = "DELETE FROM data WHERE id = $id";
    
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi); 
}

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];

    while ($row = mysqli_fetch_object($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>
