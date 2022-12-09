<?php 
include "koneksi.php";

$jenisKendaraan = $_POST['jenisKendaraan'];
$STNK =  $_POST['STNK'];
$nomorKendaraan = $_POST['nomorKendaraan'];
$waktuMasuk = $_POST['waktuMasuk'];
$waktuKeluar = $_POST['waktuKeluar'];

$t1 = strtotime($waktuMasuk);
$t2 = strtotime($waktuKeluar);
$hours =abs(($t2 - $t1)/3600) ;

echo "Lama Parkir: ". $hours . " " . gettype($hours);




function hitungBiaya(){
    global $jenisKendaraan;
    global $hour;
    $price = 0;
    $hourRelapse = 0;

    if( $jenisKendaraan == 'Mobil'){
        if($hour == 2){
            return $price == 3000;
        }
        if ($hour>2 && $hour<8){
            $hourRelapse == $hour - 2 ;
            $price = 3000 + ($hourRelapse * 1000);
        }if ($hour >= 9){
            $price == 10000;
        }
}


    if($jenisKendaraan == 'Motor'){
        if($hour == 2){
            $price == 1500;
        }
        if ($hour>2 && $hour<8){
            $hourRelapse == $hour - 2 ;
            $price = 3000 + ($hourRelapse * 500);
        }if ($hour >=9){
            $price == 5000;
        }

    }

}

$query = "INSERT INTO daftar_parkir (jenisKendaraan, STNK, nomorKendaraan, waktuMasuk, waktuKeluar) VALUES 
('$jenisKendaraan', '$STNK', '$nomorKendaraan', '$waktuMasuk','$waktuKeluar')";

$hasilQuery = mysqli_query($conn, $query);
if ($hasilQuery) echo "Data sudah tersimpan ke database"; else
echo "Penyimpanan data gagal". mysqli_error($conn);
?>