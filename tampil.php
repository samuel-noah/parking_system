<?php
include "koneksi.php";

$sql = "SELECT * FROM daftar_parkir";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo $row['jenisKendaraan']. $row['nomorKendaraan'].$row['waktuMasuk'].$row['waktuKeluar'];
    }
  } else {
    echo "0 results";
  }
  
  mysqli_close($conn);

?>