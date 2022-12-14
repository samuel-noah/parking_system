
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style> 


form {
    display: flex;
    flex-direction: column;
    justify-content: center;
}
body {
    margin-left: 20%;
    margin-right: 20%;
}
input {
    margin-top: 20px;
}
h1 {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    display: flex;
    justify-content: center;
    color: rgb(189, 176, 0);
}


    </style>

</head>

<body>
    <h1 class="title">Pendaftaran Parkir</h1>
 
        <form method="POST" action="kirim_kelompok10.php">
        <div class="input-container">
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