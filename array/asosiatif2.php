<?php

$siswa = [
    [
        "nama" => "Muhammad Mulki Sukmana",
        "jeniskelamin" => "Laki-laki",
        "kelas" => "XI RPL 1"
    ],
    [
        "nama" => "Iyann",
        "jeniskelamin" => "Laki-laki",
        "kelas" => "XI RPL 2"
    ],
];

foreach ($siswa as $murid){
    echo "<p> Nama :". $murid ["nama"]. "</p>";
    echo "<p>Jenis Kelamin : ".$murid ["jeniskelamin"]."</p>";
    echo "<p>Kelas : ".$murid ["kelas"]."</p><br><hr>";
}