<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi</title>
</head>
<body>
    <style>
        .echo1{
            display: flex;
            justify-content: center;
        }

    </style>
</body>
</html>

<?php
$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn, 'db_kelompok10');
if (!$conn){
    die("Connection failed" . mysqli_connect_error());
}
echo "<p class='echo1'>Connection Success</p>";

?>