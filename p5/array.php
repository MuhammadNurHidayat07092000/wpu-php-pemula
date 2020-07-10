<?php
    // array
    // variabel yang dapat menampung banyak nilai
    // tipe data boleh beda
    // pasangan antara key dan value ==> key a/ index

    // membuat array
    // cara lama
    $hari = array("senin", "selasa", "rabu");

    //cara baru
    $bulan = ["januari", "februari"];
    $arr1  = [123, "tulisan", true]

    //tampil
    // var_dump() / print_r()
    // var_dump($hari);
    // echo "<br>";
    // print_r($hari);
    // echo "<br>";

    // manampilkan 1 elemen
    // echo $arr1[0];
    // echo "<br>";
    // echo $bulan[1];

    // menambahkan elemen baru
    var_dump($hari);
    $hari[] = "kamis";
    $hari[] = "jum'at";
    echo "<br>";
    var_dump($hari);    

?>