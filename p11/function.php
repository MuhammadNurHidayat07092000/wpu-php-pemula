<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "root", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $row = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {
    
    global $conn;

    //ambil data 
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    //query 
    $query = "INSERT INTO mahasiswa VALUES
                ('','$nrp', '$nama', '$email', '$jurusan', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;

    $query = "DELETE FROM mahasiswa where id=$id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    
    global $conn;

    //ambil data 
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    //query 
    $query = "UPDATE mahasiswa SET 
    
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'

                WHERE id=$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>