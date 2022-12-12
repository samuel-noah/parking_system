<?php 
include "koneksi.php";
echo "<br>";

$jenisKendaraan = $_POST['jenisKendaraan'];
$STNK =  $_POST['STNK'];
$nomorKendaraan = $_POST['nomorKendaraan'];
$waktuMasuk = $_POST['waktuMasuk'];
$waktuKeluar = $_POST['waktuKeluar'];

$t1 = strtotime($waktuMasuk);
$t2 = strtotime($waktuKeluar);
$hours =abs(($t2 - $t1)/3600) ;
$hours = round($hours,0,PHP_ROUND_HALF_DOWN);

echo "Lama Parkir: ". $hours . " " . "jam ";
echo "<br>";



function hitungBiaya() {
    global $jenisKendaraan;
    global $hours;
    $price = 0;
    $hourRelapse = 0;

    if ($jenisKendaraan == 'Mobil') {
        if ($hours <= 2) {
            $price += 3000;
        } else if ($hours > 2 && $hours < 8) {
            $hourRelapse = $hours - 2;
            $price += (3000 + ($hourRelapse * 1000));
        } else {
            $price += 10000;
        }
    } else {
        if ($hours <= 2) {
            $price += 1500;
        } else if ($hours > 2 && $hours < 8) {
            $hourRelapse = $hours - 2;
            $price += (3000 + ($hourRelapse * 500));
        } else {
            $price += 5000;
        }
    }

    return $price;
}

 $price = hitungBiaya();

echo "<p>Total Harga: </p>". $price;  
echo "<br>";

$query = "INSERT INTO daftar_parkir (jenisKendaraan, STNK, nomorKendaraan, waktuMasuk, waktuKeluar, price) VALUES 
('$jenisKendaraan', '$STNK', '$nomorKendaraan', '$waktuMasuk','$waktuKeluar','$price')";

$hasilQuery = mysqli_query($conn, $query);
if ($hasilQuery) echo "Data sudah tersimpan ke database"; else
echo "Penyimpanan data gagal". mysqli_error($conn);
?>
<br>
<button ><a href ="tampil.php">Rekap Data</a></button>