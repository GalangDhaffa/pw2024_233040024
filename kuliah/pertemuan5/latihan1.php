<?php
// '1. membuat array
$hari = array("senin", "selasa", "rabu");
$bulan = ["januari", "febuari", "maret"];
$mahasiswa = ["Galang",2005, 3.37, false];


//  2. mencetak isi array
// mencetak 1 nilai pada array, menggunakan index
// index dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[0];
echo "<hr>";

// cetak semua isi array
// var_dump() atau print_r()
// digunakan saat debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";



//  3. memanipulasi isi array
// menambah isi array
// di akhir : [] atau array_push()
$hari[] = "kamis";
$hari[] = "jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "april","mei");
print_r($bulan);
echo "<br>";

// di awal : array_unshift()
array_unshift($mahasiswa, "233040024");
print_r($mahasiswa);
echo "<hr>";


// menghapus isi array
// di belakang : array_pop()
// di depan : array_shift()
array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);