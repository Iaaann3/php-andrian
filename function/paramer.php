<?php

function perkenalan($nama, $tempatlahir,$tanggallahir ,$jk ,$agama ,$alamat ,$hobi ){
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Saya Lahir Di ".$tempatlahir."<br/>";
  echo "Tanggal Lahir Saya ".$tanggallahir."<br/>";
  echo "Jenis Kelamin ".$jk."<br/>";
  echo "Agama Saya ".$agama."<br/>";
  echo "Alamat ".$alamat."<br/>";
  echo "Hobi ".$hobi."<br/><br>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Andrian", "Bandung", "10-10-2008", "Laki-Laki", "Islam", "Cibolerang", "Tidur");

function menghitung($angka1, $angka2){
    echo "Bilangan Ke 1 : $angka1<br>";
    echo "Bilangan Ke 2 : $angka2<br>";
    $hasil = $angka1 + $angka2;
    echo "Hasil : $hasil<br>";
}
menghitung(10,20);