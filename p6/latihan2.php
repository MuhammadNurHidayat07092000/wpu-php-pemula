<?php
    // $mhs = [
    //     ["yyt", "081", "rpl", "email@gmail.com"],
    //     ["ta", "082", "ti", "emel@gmail.com"],,
    // ];

    // array assosiatif
    // key-nya a/ string yang kita bwt sendiri
    $mhs = [
        [
         "nama" => "Yyt",
         "nrp" => "081",
         "jurusan" => "rpl",
         "email" => "email@gmail.com",
         "gambar" => "foto.jpg"
        ],
        
        [
         "nama" => "Yt",
         "nrp" => "082",
         "jurusan" => "ti",
         "email" => "eme@gmail.com",
         "gambar" => "foto2.jpg"
        ]
    ];

    echo $mhs[1]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahsiswa</h1>
    <ul>
        <?php foreach ( $mhs as $mahsiswa ) :?>
            <ul>
                <li>
                    <img src="img/<?= $mahsiswa["gambar"]; ?>" alt="">
                </li>
                <li><?= $mahsiswa["nama"]?></li>
                <li><?= $mahsiswa["nrp"]?></li>
                <li><?= $mahsiswa["jurusan"]?></li>
                <li><?= $mahsiswa["email"]?></li>
            </ul>
        <?php endforeach; ?>
    </ul>
</body>
</html>

