<?php

$students = [
  [
    "NRP" => "233040024",
    "Nama" => "Dhaffa Galang Fahriza",
    "Email" => "galangdhaffa8910@gmail.com",
    "Jurusan" => "Teknik Informatika",
    "gambar" => "1"
  ],
  [
    "NRP" => "233040999",
    "Nama" => "Rudol Prasetyo Sinurat",
    "Email" => "rudol@gmail.com",
    "Jurusan" => "Teknik Informatika",
    "gambar" => "2"
  ],
  [
    "NRP" => "233040888",
    "Nama" => "Alfi Mifta Nurhakim",
    "Email" => "alfi@gmail.com",
    "Jurusan" => "Teknik Informatika",
    "gambar" => "3"
  ],
  [
    "NRP" => "233040777",
    "Nama" => "Aufa Ramadhan",
    "Email" => "aufa@gmail.com",
    "Jurusan" => "Teknik Informatika",
    "gambar" => "4"
  ],
  [
    "NRP" => "233040666",
    "Nama" => "Candra Kirana",
    "Email" => "can@gmail.com",
    "Jurusan" => "Teknik Informatika",
    "gambar" => "5"
  ],
  [
    "NRP" => "233040555",
    "Nama" => "Arinal Haq",
    "Email" => "arinal@gmail.com",
    "Jurusan" => "Teknik Informatika",
    "gambar" => "6"
  ],
  [
    "NRP" => "233040444",
    "Nama" => "I Made Surya Kartika",
    "Email" => "made@gmail.com",
    "Jurusan" => "Teknik Informatika",
    "gambar" => "7"
  ], [
    "NRP" => "233040333",
    "Nama" => "Juntay Archile",
    "Email" => "jun@gmail.com",
    "Jurusan" => "Teknik Mesin",
    "gambar" => "8"
  ],
  [
    "NRP" => "233040222",
    "Nama" => "Ucup Brijon",
    "Email" => "ucup@gmail.com",
    "Jurusan" => "Teknik Mesin",
    "gambar" => "9"
  ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 5</title>
</head>



<body>
  <h1>Daftar Mahasiswa</h1>
  <ul style="list-style-type:none">
    <?php
    foreach ($students as $student) : ?>
      <li><img src="https://randomuser.me/api/portraits/lego/<?= $student['gambar'] ?>.jpg" width="150" height="150"></li>
      <li> Nama : <?= $student['Nama'] ?></li>
      <li> NRP : <?= $student['NRP'] ?></li>
      <li> Email : <?= $student['Email'] ?></li>
      <li> Jurusan : <?= $student['Jurusan'] ?></li>
      <br>
      <hr>
      <hr>
      <br>
    <?php endforeach ?>
  </ul>
</body>

</html>