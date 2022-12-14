
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style> 



body {
  margin: 0;
  width: 100vw;
  height: 100vh;
  background: #ecf0f3;
  display: flex;
  align-items: center;
  text-align: left;
  justify-content: center;
  place-items: center;
  overflow: hidden;
  font-family: poppins;
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
.input-container{
    position: relative;
  width: 350px;
  height: 500px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}
.input{
    background: #ecf0f3;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}
.button{

    color: white;
      margin-top: 20px;
      background:rgb(189, 176, 0);
      height: 40px;
      border-radius: 20px;
      cursor: pointer;
      font-weight: 900;
      box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
      transition: 0.5s;
}
.button:hover {
  box-shadow: none;
}
    </style>

</head>

<body>
    
    <div class="input-container">
        <h1 class="title">Pendaftaran Parkir</h1>
        <form method="POST" action="kirim_kelompok10.php">
            Mobil: <input type= "radio" name = "jenisKendaraan" value = "Mobil" />
 
             Motor: <input type="radio" name = "jenisKendaraan" value = "Motor" /> 
            <br>
             Nomor STNK: 
             <input class="input" type="text" name = STNK > 
             
             Nomor Kendaraan:  
             <input class='input' size='10'type = "text" name="nomorKendaraan"> 
        <br>
        Waktu Masuk: <input class="input" type = "time" name ="waktuMasuk" value="<?php date("h:i:sa")?>"> 
        <br>
        Waktu Keluar: <input class="input" type = "time" name ="waktuKeluar" value="<?php date("h:i:sa")?>"> 
        <br>
        <input class="button"type = "reset">
        <input  class ="button"type = "submit" name="submit">  
        
    </form>
</div>
        
        

</body>
</html>