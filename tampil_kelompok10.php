<h1>Rekap Data</h1>
<table border="1">
<tr>
  <th>Jenis Kendaraan</th>
  <th>Nomor Kendaraan</th>
  <th>STNK</th>
  <th>Waktu Masuk</th>
  <th>Waktu Keluar</th>
  <th>Biaya</th>
</tr>
<br>
<a  class='btn' href ="gajiKaryawan_kelompok10.php">Hitung Gaji Karyawan</a>
<style>
  table {
    display: flex;
    justify-content: center;
    margin-left: 30%;
    margin-right: 30%;
  }
  h1 {
    display: flex;
    justify-content: center;
    color: rgb(189, 176, 0);
  }
  th {
    background-color: rgb(189, 176, 0)
  }

/* CSS */
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

</style>

<?php
include "koneksi_kelompok10.php";
echo "<br>";

$sql = "SELECT * FROM daftar_parkir";
$result = mysqli_query($conn, $sql);

$query = "SELECT SUM(price) FROM daftar_parkir";
$hasil = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>".$row['jenisKendaraan']."</td><td>".$row['nomorKendaraan'].
      "</td>
      <td>".$row['STNK']."</td><td>".$row['waktuMasuk']."</td>
      <td>".$row['waktuKeluar']."</td><td>".$row['price']."</td></tr>"
      ;
    }
  } else {
    echo "0 results";
  }
  
  if (mysqli_num_rows($hasil) > 0) {
    while($row = mysqli_fetch_assoc($hasil)) {
      echo "<h3 class='echo1'>Jumlah Pemasukan ". "Rp."." ". implode(" ",$row)." </h3>";
    }
  } else {
    echo "0 results";
  }
  mysqli_close($conn);
?>