<?php 
usleep(1000000);
require '../function.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM mahasiswa WHERE 
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%'  OR
            jurusan LIKE '%$keyword%'        
            ";

$mahasiswa = query($query);

?>

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