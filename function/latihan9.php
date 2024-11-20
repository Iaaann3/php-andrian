<?php
function menghitungLuasPersegiPanjang($panjang, $lebar) {
    echo "<h2>Persegi Panjang</h2>";
    echo "Panjang: $panjang<br>";
    echo "Lebar: $lebar<br>";
    $luas = $panjang * $lebar;
    echo "Luas Persegi Panjang: $luas<br><hr>";
}
menghitungLuasPersegiPanjang(10, 20);

function menghitungLuasSegitiga($alas, $tinggi) {
    echo "<h2>Segitiga</h2>";
    echo "Alas: $alas<br>";
    echo "Tinggi: $tinggi<br>";
    $luas =  ($alas * $tinggi) / 2;
    echo "Luas Segitiga: $luas<br><hr>";
}
menghitungLuasSegitiga(10, 30);

function menghitungLuasPersegi($sisi) {
    echo "<h2>Persegi</h2>";
    echo "Panjang Sisi: $sisi<br>";
    $luas = $sisi * $sisi;
    echo "Luas Persegi: $luas<br><hr>";
}
menghitungLuasPersegi(4);

function menghitungLuasLingkaran($jariJari) {
    echo "<h2>Lingkaran</h2>";
    echo "Jari-jari: $jariJari<br>";
    $luas = 3.14 * ($jariJari * $jariJari);
    echo "Luas Lingkaran: $luas<br>";
}

menghitungLuasLingkaran(9);


?>