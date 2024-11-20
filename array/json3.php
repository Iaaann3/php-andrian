<?php
// data json
$dataJSON = '[
    {
        "nama" : "Nurul Huda",
        "alamat": "Bandung"
    },
    {
        "nama" : "Renza",
        "alamat": "Bandung"
    }
]';
// dikonversikan ke JSON
$list = json_decode($dataJSON);

// tampilkan Datanya
foreach($list as $mahasiswa){
    echo "Nama : {$mahasiswa->nama} <br>";
    echo "Alamat : {$mahasiswa->alamat} <br><hr>";

}
?>