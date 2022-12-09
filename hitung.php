<html><head><title> Cari  </title></head>
<body>
<form action="hitung.php" method="post">
<b>HPilih Jenis</b><br><br>
Mobil: <input type= "radio" name = "Mobil" value = "Mobil" /> 
Motor: <input type="radio" name = "Motor" value = "Motor" /> 
<br>
<input type = "reset">
<input type= "submit" name ="submit"> 

</form>
</body></html>

<?php 

include 'koneksi.php';
echo "<br>";

if(isset($_POST["submit"])){


    function hitungMobil(){
        
    }
    if(isset($_POST['Mobil'])){
        // $jenisKendaraan = 'Mobil';
        $sql = "SELECT COUNT(id) FROM daftar_parkir WHERE jenisKendaraan = 'Mobil'";
    }
    elseif(isset($_POST['Motor'])) {
        // $jenisKendaran = 'Motor';
        $sql = "SELECT COUNT(id) FROM daftar_parkir WHERE jenisKendaraan = 'Motor'";
    }
    $result = mysqli_query($conn, $sql);

    
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo implode(" ",$row);
        }
      } else {
        echo "0 results";
      }
    
    
    
      
}

  mysqli_close($conn);

?>
