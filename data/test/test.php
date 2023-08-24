<?php

// $conn = mysqli_connect("localhost","root","");

// if (!$conn) {
//     die("Koneksi Gagal : " . mysqli_connect_error());
// }else{
//     echo "Koneksi Berhasil";
// }

// membuat database
// if ($db = mysqli_query($conn, "CREATE DATABASE db_portofolio")) {
//     echo "Database berhasil dibuat";
// }else{
//     echo "Database gagal dibuat".mysqli_error($conn);
// }

// membaca file SQL
// $sql = file_get_contents("../db/db_portofolio.sql");

// // mengeksekusi file SQL
// if ($mysqli->multi_query($sql)) {
//   do {
//     // menyimpan hasil query
//     if ($result = $mysqli->store_result()) {
//       $result->free();
//     }
//   } while ($mysqli->more_results() && $mysqli->next_result());
// }


// mysqli_close($conn);

// membaca file dengan fopen
// $filename = "../db/db_portofolio.sql";
// $file = fopen($filename,"r");

// // echo $file;

// if ($file) {
//     $sql = fread($file, filesize($filename));

//     echo $sql;

//     fclose($file);
// }

// membaca file dengan file_get_contents
// $file = file_get_contents("../db/db_portofolio.sql");
// $pisah_file = explode(";","$file");
// masih dalam bentuk array
// echo $pisah_sql;

// unset($pisah_file[count($pisah_file) - 1]);

// menampilkan file
// foreach ($pisah_file as $data) {
//     echo '<p>' . $data . '</p>';
// }
?>