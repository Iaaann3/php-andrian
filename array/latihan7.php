<?php
$mak = [
    [
        "nama" => "Safitri",
        "namabuah" =>   [
                        [
                            "namabuah" => "Anggur",
                            "jenis" => ["jenis1" => "Anggur Merah",
                                        "jenis2" => "Anggur Unggu"]
                        ]
                        ]
    ],
    [
        "nama" => "Safitri",
        "namabuah" =>   [
                        [
                            "namabuah" => "Anggur",
                            "jenis" => ["jenis1" => "Anggur Merah",
                                        "jenis2" => "Anggur Unggu"]
                        ],
                        [
                            "namabuah" => "Anggur",
                            "jenis" => ["jenis1" => "Anggur Merah",
                                        "jenis2" => "Anggur Unggu"]
                        ]
                        ]
                        
    ],
];

foreach ($mak as $buah){
    echo "<p> Nama Pemilik : ". $buah ['nama']. "</p>";

    echo "<p>Daftar Buah Kesukaan : <ul></p>";
    foreach ($buah ['namabuah'] as $buah2) { 
        echo "<li>" .$buah2 ['namabuah']. "</li>";
        foreach ($buah2 ['jenis'] as $buah3){
            echo "<ol>". $buah3. "</ol>" ;
        }
    }
    echo "</ul><br><hr>";
}
?>