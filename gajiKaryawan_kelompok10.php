<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biaya Gaji Karyawan</title>
</head>
<style> 
form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-left: 30%;
    margin-right: 30%;
}
h1{
    display: flex;
    justify-content: center;
    color: rgb(189, 176, 0);
}

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
.echo2{
    display: flex;
  justify-content: center;   
}

</style>
<body>
    <h1>Jumlah Gaji Karyawan</h1>
    <form action ="gajiKaryawan_kelompok10.php" method="POST">
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

    echo "<h3 class='echo2'> Total Gaji adalah: "."Rp.". $gajiKaryawan .  "</h3>";
}
?>
<a href ="home_kelompok10.php" class="btn">Home</a>