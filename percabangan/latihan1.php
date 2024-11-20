<?php
$nama = "Andrian Ramdani";
$kelas = "XI RPL 1";
$indo = 92;
$inggris = 93;
$mtk = 89;
$rpl = 97;

$rata = $indo + $inggris + $mtk + $rpl ;
$rata /= 4;

echo " Nama : $nama <br>
Kelas : $kelas <br>
B.Indonesia : $indo <br>
B.Inggris : $inggris <br>
Matematika : $mtk <br>
Produktif : $rpl <br>
Rata-rata : $rata <br><hr>";

if ($rata = 75){
    echo "Status : *Anda Lulus*";
} else {
    echo "Status : *Anda Tidak Lulus*";
}

?>