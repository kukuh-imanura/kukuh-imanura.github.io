<?php

// FILE
$csv = "../db/comment.csv";

// BACA FILE
$csv_read = fopen($csv, "r");

// 1000 : max panjang baris
// "," : parameter pemisah

// TAMPILKAN
while (($csv_data = fgetcsv($csv_read, 1000, ",")) != False) {
    echo "Nama : " . $csv_data[1] . "<br>";
    echo "Komentar : " . $csv_data[2] . "<br>";
}

// if ($csv_read !== FALSE) {
//     echo "<table border='1'>";

//     // Baca baris demi baris
//     while (($data = fgetcsv($csv_read, 1000, ",")) !== FALSE) {
//         echo "<tr>";
//         // Tampilkan data dalam setiap kolom
//         foreach ($data as $value) {
//             echo "<td>" . $value . "</td>";
//         }

//         echo "</tr>";
//     }

//     echo "</table>";
// }

fclose($csv_read);

?>