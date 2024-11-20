<?php
$provinsi = "barat";
$kota = "bandung";

if ($provinsi == "barat"){
    echo "Selamat Datang Di Provinsi Jawa Barat <br>";
    if($kota == "bandung"){
        echo "Kota Yang Anda Pilih Bandung";
    }elseif($kota == "cimahi"){
        echo "Kota Yang Anda Pilih Cimahi";
    }elseif($kota == "bogor"){
        echo "Kota Yang Anda Pilih Bogor";
    }elseif($kota == "Bekasi"){
        echo "Kota Yang Anda Pilih Bekasi";
    }elseif($kota == "depok"){
        echo "Kota Yang Anda Pilih Depok";
    }
    else{
        echo "Kota Yang Anda Cari Tidak Di Temukan";
    }

} if ($provinsi == "timur"){

    if($kota == "lamongan"){
        echo "Selamat Datang Di Kota Lamongan";
    }elseif($kota == "nganjuk"){
        echo "Selamat Datang Di Kota Nganjuk";
    }elseif($kota == "gresik"){
        echo "Selamat Datang Di Kota Gresik";
    }elseif($kota == "sidoarjo"){
        echo "Selamat Datang Di Kota Sidoarjo";
    }elseif($kota == "banyuwangi"){
        echo "Selamat Datang Di Kota Banyuwangi";
    }
    else{
        echo "Kota Yang Anda Cari Tidak Di Temukan";
    }
} if ($provinsi == "tengah"){

    if($kota == "brebes"){
        echo "Selamat Datang Di Kota Brebes";
    }elseif($kota == "cilacap"){
        echo "Selamat Datang Di Kota Cilacap";
    }elseif($kota == "klaten"){
        echo "Selamat Datang Di Kota Klaten";
    }elseif($kota == "sragen"){
        echo "Selamat Datang Di Kota Sragen";
    }elseif($kota == "wonogiri"){
        echo "Selamat Datang Di Kota Wonogiri";
    }
    else{
        echo "Kota Yang Anda Cari Tidak Di Temukan";
    }
}    
?>