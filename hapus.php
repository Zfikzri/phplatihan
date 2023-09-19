<?php
include "koneksi.php";
include "function.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    // Panggil fungsi hapusData
    $result = hapusData($id);

    if ($result>0) {
      echo "
        <script>
        var confirmation = confirm('Apakah Anda yakin ingin menghapus data?');
        if (confirmation) {
          alert('Data berhasil dihapus!');
          document.location.href = 'testkonek.php';
        } else {
    
        } 
        </script>
      ";
  } else {
      echo "
        <script>
          alert('Data gagal dihapus!');
          document.location.href = 'testkonek.php';
        </script>
      ";
  }
}
?>
