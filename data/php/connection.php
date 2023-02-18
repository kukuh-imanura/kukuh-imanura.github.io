<?php

$server = "127.0.0.1";
$user = "root";
$pass = "";

$conn = mysqli_connect($server, $user, $pass);

if ($conn) {
    echo "Berhasil";
}else{
    echo "Gagal";
}

?>