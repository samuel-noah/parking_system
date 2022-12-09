<?php
$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn, 'parkir');
if (!$conn){
    die("Connection failed" . mysqli_connect_error());
}
echo "Success";

?>