<?php
    //array numerik a/ array yang indexnya angka
    //array assosiatif indexnya string
    $mhs = [
        ["yyt", "090", "Rpl", "email@gmail.com"],
        ["uye", "091", "ti", "emeil@gmail.com"],
        ["yeh", "092", "si", "emyil@gmail.com"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mhs as $mahasiswa) :?>
    <ul>
        <li>Nama    :<?= $mahasiswa[0]; ?></li>
        <li>NRP     :<?= $mahasiswa[1]; ?></li>
        <li>Jurusan :<?= $mahasiswa[2]; ?></li>
        <li>Email   :<?= $mahasiswa[3]; ?></li>      
    </ul>
    <?php endforeach; ?>

</body>
</html>