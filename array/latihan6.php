<?php

$novel = [
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi baik",
        "tngglrls" => "10 November",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi baik",
        "tngglrls" => "10 November",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi baik",
        "tngglrls" => "10 November",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi baik",
        "tngglrls" => "10 November",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi baik",
        "tngglrls" => "10 November",
        "penerbit" => "Airlangga"
    ],
];

foreach ($novel as $nov){
    echo "<p> Judul Novel :". $nov ["judul"]. "</p>";
    echo "<p>Penulis : ".$nov ["penulis"]."</p>";
    echo "<p>Tanggal Rilis : ".$nov ["tngglrls"]."</p>";
    echo "<p>Penerbit : ".$nov ["penerbit"]."</p><br><hr>";
}