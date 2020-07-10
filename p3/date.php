<?php
// date
// menampilkan waktu dengan format tertentu
// echo date("l, d-M-Y");

//time
// unix timestamp
// detik yang sudah berlalu sejak 1 januari 1970

// echo date("d M Y", time()+60*60*24*100);//- kebelakang

// mktime
// membuat sendiri datik
//mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
//  echo date("l", mktime(0,0,0,9,7,2000));

// strtotime
echo date("l", strtotime("7 sept 2000"));

?>