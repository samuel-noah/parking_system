<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biaya Gaji Karyawan</title>
</head>
<body>
    <h1>Jumlah Gaji Karyawan</h1>
    <form action ="gajiKaryawan.php" method="POST">
        Jumlah Karyawan: <input type="number" name = "jumlahKaryawan">
        <br>
        <input type ="reset">
        <input type = "submit" name ="kirim">
    </form>
    
</body>
</html>

<?php
if(isset($_POST['kirim'])){
    $jumlahKaryawan = $_POST['jumlahKaryawan'];
    $gajiPokok = 3500000;
    $uangTransport = 15000;
    $uangMakan = 25000;
    $gajiKaryawan = $jumlahKaryawan * ($gajiPokok + $uangTransport + $uangMakan);

    echo "Total Gaji adalah: " . $gajiKaryawan;
}
?>