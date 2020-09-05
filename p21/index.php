<?php 

session_start();

if(!isset($_SESSION["login"])) {

    header("location: login.php");
    exit;
}

require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol cari diklik
if(isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["pencarian"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <style>
        .load{
            width: 100px;
            position: absolute;
            left: 285px;
            z-index: -1;
            display: none;
        }

        @media print {
            
            .out {
                display: none;
            }

        }

    </style>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>
    
    <form method="post" action="">

        <input type="text" name="pencarian" size="40" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off" id="keyword"> 
        <button type="submit" name="cari" id="tombol-cari">Cari!!</button>

        <img src="img/load2.gif" class="load">
    </form>
    <br>

    <div id="container">
    
        <table border="1" cellpadding="10" cellspacing="0">
        
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $no=1; ?>
            <?php foreach( $mahasiswa as $row) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> | 
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin!');">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50"></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php endforeach; ?>
        
        </table>
    </div>
    <br>

    <a href="logout.php" class="out">Logout</a> |
    <a href="cetak.php" target="blank">Cetak</a>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/scrip.js"></script>
</body>
</html>