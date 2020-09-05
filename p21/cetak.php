<?php

//memanggil labrabri di vendor
require_once __DIR__ . '/vendor/autoload.php';

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/cetak.css">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">  
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>';

    $i = 1;
    foreach ($mahasiswa as $row) {
        $html .= '<tr>

            <td>'. $i++ .'</td>
            <td><img src="img/'. $row["gambar"] .'" width="50"></td>
            <td>'. $row["nrp"] .'</td>
            <td>'. $row["nama"] .'</td>
            <td>'. $row["email"] .'</td>
            <td>'. $row["jurusan"] .'</td>           

        </tr>';
    }

$html .=  '</table>
</body>
</html>';

$mpdf = new \Mpdf\Mpdf(); //inisiasi
$mpdf->WriteHTML($html); //mencetak html ke pdf
$mpdf->Output('daftar-mahasiswa.pdf', 'D');

