<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
</head>
<body>
    <h1>Tiket Parkir Anda </h1>

    <style>

        
    .btn{
    display: flex;
    justify-content: center;
    margin-top: 5px;
    border-radius: 5rem;
    background:#333;
    color:#fff;
    padding:.9rem 3.5rem;
    cursor: pointer;

    text-decoration: none;
    margin-left: 40%;
    margin-right: 40%;
}

.btn:hover{
    background:rgb(189, 176, 0);
}
.echo1{
  display: flex;
  justify-content: center;
}

h1{
    display: flex;
  justify-content: center;
  color: rgb(189, 176, 0);
}



    </style>
</body>
</html>
<?php 
include "koneksi_kelompok10.php";


$jenisKendaraan = $_POST['jenisKendaraan'];
$STNK =  $_POST['STNK'];
$nomorKendaraan = $_POST['nomorKendaraan'];
$waktuMasuk = $_POST['waktuMasuk'];
$waktuKeluar = $_POST['waktuKeluar'];

$t1 = strtotime($waktuMasuk);
$t2 = strtotime($waktuKeluar);
$hours =abs(($t2 - $t1)/3600) ;
$hours = round($hours,0,PHP_ROUND_HALF_DOWN);

echo "<h4 class='echo1'Lama Parkir: >". $hours . " " . "jam". "</h4>";




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

echo "<h4 class='echo1'>Total Harga: ". $price . "</h4>";  


$query = "INSERT INTO daftar_parkir (jenisKendaraan, STNK, nomorKendaraan, waktuMasuk, waktuKeluar, price) VALUES 
('$jenisKendaraan', '$STNK', '$nomorKendaraan', '$waktuMasuk','$waktuKeluar','$price')";

$hasilQuery = mysqli_query($conn, $query);
if ($hasilQuery) echo "<p class='echo1'> Data sudah tersimpan ke database </p>"; else
echo "Penyimpanan data gagal". mysqli_error($conn);
?>
<br>
<a href ="tampil_kelompok10.php" class="btn">Rekap Data</a>