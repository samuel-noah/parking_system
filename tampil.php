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

<?php
include "koneksi.php";
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
      echo "Jumlah Pemasukan". " ". implode(" ",$row);
    }
  } else {
    echo "0 results";
  }
  mysqli_close($conn);
?>