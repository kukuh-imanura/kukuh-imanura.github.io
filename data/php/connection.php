<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";

$conn = mysqli_connect($host, $user, $pass);

if ($conn) {
    echo "Berhasil";
}else{
    echo "Gagal";
}

?>