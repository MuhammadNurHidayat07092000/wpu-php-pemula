<?php
// superglobals
// variabel global milik php
// merupakan array assosiatif
$mhs = [
    [
     "nama" => "Yyt",
     "nrp" => "081",
     "jurusan" => "rpl",
     "email" => "email@gmail.com",
     "gambar" => "foto.jpg"
    ],
    // 
    [
     "nama" => "Yt",
     "nrp" => "082",
     "jurusan" => "ti",
     "email" => "eme@gmail.com",
     "gambar" => "foto2.jpg"
    ]
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
    <ul>
        <?php foreach ($mhs as $mahasiswa) :?>
            <li>
                <a href="latihan2.php?nama=<?= $mahasiswa["nama"]; ?>
                    &nrp=<?= $mahasiswa["nrp"]; ?>
                    &jurusan=<?= $mahasiswa["jurusan"]; ?>
                    &email=<?= $mahasiswa["email"]; ?>
                    &gambar=<?= $mahasiswa["gambar"]; ?>"><?= $mahasiswa["nama"]?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>