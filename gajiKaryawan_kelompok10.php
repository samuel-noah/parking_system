<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biaya Gaji Karyawan</title>
</head>
<style> 
body {
  margin-left: 35% ;
  margin-right: 35%;
  /* width: 100vw;
  height: 100vh; */
  background: #ecf0f3;
  align-items: center;
  text-align: center;
  justify-content: center;
  place-items: center;
  overflow: hidden;
  font-family: poppins;
}
input {
  margin-top: 20px;
    background: #ecf0f3;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;

}
h1{
    display: flex;
    justify-content: center;
    color: rgb(189, 176, 0);
}

.btn{
    display: flex;
    justify-content: center;
    margin-top: 30px;
    border-radius: 5rem;
    background:#333;
    color:#fff;
    padding:.9rem 3.5rem;
    cursor: pointer;

    text-decoration: none;
    /* margin-left: 40%;
    margin-right: 40%; */
}

.btn:hover{
    background:rgb(189, 176, 0);
}
.echo2{
display: flex;
justify-content: left;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
font-size: medium;
}
.container{
    position: relative;
  width: 350px;
  height: 500px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
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
<body>
    <div class="container">
        <h1>Jumlah Gaji Karyawan</h1>
        <form action ="gajiKaryawan_kelompok10.php" method="POST">
            Jumlah Karyawan: <input type="number" name = "jumlahKaryawan">
            <br>
            <input class="button" type ="reset">
            <input class="button" type = "submit" name ="kirim">
            
            <a href ="home_kelompok10.php" class="btn">Home</a>
        </form>
        
    </div>
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