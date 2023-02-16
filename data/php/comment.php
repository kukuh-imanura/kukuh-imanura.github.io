<?php

$conn = mysqli_connect("localhost","root","");

if (!$conn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}else{
    echo "Koneksi Berhasil";
}

?>