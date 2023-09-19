<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Volume Kerucut</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Kalkulator Volume Kerucut</h2>
        <form method="post" >
            <input type="number" placeholder="Jari Jari Alas" name="jari_jari" ><br><br>
            <input type="number" placeholder="Tinggi Kerucut" name="tinggi" ><br><br>
            <input type="submit" name="hitung" value="Hitung">
        </form>

        <?php
        // Menghitung volume kerucut: V = 1/3 * π * r^2 * t
        
        function hitungVolumeKerucut($jariJari, $tinggi) {
            $volume = (1/3) * pi() * pow($jariJari, 2) * $tinggi;
            return $volume;
        }

        if(isset($_POST['hitung'])) {
            $jari_jari = $_POST['jari_jari'];
            $tinggi = $_POST['tinggi'];

            $volume = hitungVolumeKerucut($jari_jari, $tinggi);
            $formatvolume = number_format($volume, 2);

            echo "<div class='hasil'>";
            echo "<h3>Hasil:</h3>";
            echo "Jari-Jari Alas: $jari_jari cm<br>";
            echo "Tinggi Kerucut: $tinggi cm<br>";
            echo "Volume Kerucut: $formatvolume cm<sup>3</sup>";
            

            echo "</div>";

        }
        ?>
    </div>
</body>
</html>
