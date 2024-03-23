<?php 
// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
    $mahasiswa = [
        [
            "nama" => "Nadhil Ikhwan Ashshiba Waluya",
            "nrp" => "233040039",
            "jurusan" => "Teknik Informatika",
            "email" => "nahdil@gmail.com",
            "gambar" => "nadhil.png"
        ],
        [
            "nama" => "Muhammad Hilmy Yasirurrizqy",
            "nrp" => "233040047",
            "jurusan" => "Teknik Informatika",
            "email" => "hilmy@gmail.com",
            "gambar" => "hilmy.png"
        ],
        [
            "nama" => "Ghani Aliyandi",
            "nrp" => "233040049",
            "jurusan" => "Teknik Informatika",
            "email" => "ghani@gmail.com",
            "gambar" => "ghani.png"
        ],
        [
            "nama" => "Zaki Ramadhan Wijaya",
            "nrp" => "233040053",
            "jurusan" => "Teknik Informatika",
            "email" => "zaki@gmail.com",
            "gambar" => "zaki.png"
        ],
        [
            "nama" => "Ikhwan Azhary",
            "nrp" => "233040067",
            "jurusan" => "Teknik Informatika",
            "email" => "ikhwanazhary9@gmail.com",
            "gambar" => "ikhwan.png"
        ],
        [
            "nama" => "Najran",
            "nrp" => "233040120",
            "jurusan" => "Teknik Informatika",
            "email" => "najran@gmail.com",
            "gambar" => "najran.png"
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>

    <?php endforeach; ?>
</body>
</html>