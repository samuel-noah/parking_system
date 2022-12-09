<?php



function hitungBiayaParkir() {

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Pendaftaran Parkir</h1>
    <form method="POST" action="kirim.php">
   Mobil: <input type= "radio" name = "jenisKendaraan" value = "Mobil" /> 
    Motor: <input type="radio" name = "jenisKendaraan" value = "Motor" /> 
    <br>
    Nomor STNK: <input type="text" name = STNK > 
    <br>
    Nomor Kendaraan: <input type = "text" name="nomorKendaraan"> 
    <br>
    Waktu Masuk: <input type = "time" name ="waktuMasuk" value="<?php date("h:i:sa")?>"> 
    Waktu Keluar: <input type = "time" name ="waktuKeluar" value="<?php date("h:i:sa")?>"> 
    <br>
    <input type = "reset">
    <input type = "submit" name="submit">  
    </form>
    
</body>
</html>