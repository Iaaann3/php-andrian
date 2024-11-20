<?php
$siswa = [
    [
        "nis" => "1001",
        "nama" => "Andrian Ramdani",
        "kelas" => "XI RPL 1",
        "ekskul" => ["Voli", "Basket", "Futsal"]
    ],
    [
        "nis" => "1002",
        "nama" => "Dudii",
        "kelas" => "XI RPL 1",
        "ekskul" => [ "Basket", "Futsal"]
    ],
];

foreach ($siswa as $murid){
    echo "<p> NIS : ". $murid ["nis"]. "</p>";
    echo "<p>Nama : ".$murid ["nama"]."</p>";
    echo "<p>Kelas : ".$murid ["kelas"]."</p>";

    echo "<p>Ekskul : <ul></p>";
    foreach ($murid ["ekskul"] as $ekskul) {
        echo "<li>" .$ekskul."</li>" ;
    }
    echo "</ul><br><hr>";
}
?>