<?php 

session_start();

if(!isset($_SESSION["login"])) {

    header("location: login.php");
    exit;
}

require 'function.php';

//ambil data
$id = $_GET["id"];

//query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

if(isset($_POST["submit"])) {
   
    //cek data berhasil untuk diubah
    if(ubah($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form method="post" enctype="multipart/form-data" action="">
        <input type="hidden" name="id" value="<?= $mhs["id"];?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"];?>">
        <ul>
            <li>
                <label for="nrp">Nrp :</label>
                <input type="text" name="nrp" id="nrp" require value="<?= $mhs["nrp"];?>">
            </li>

            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"];?>">
            </li>

            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"];?>">
            </li>

            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"];?>"> 
            </li>

            <li>
                <label for="gambar">Gambar :</label><br>
                <img src="img/<?= $mhs['gambar']; ?>" width="50"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    
    </form>
</body>
</html>