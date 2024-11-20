<?php
$jurusan = "RPL";
$kelas = "11 rpl";

if ($jurusan == "RPL"){

    if($kelas == " 10 rpl"){
        echo "Ini Kelas 10 RPL";
    }elseif($kelas == "11 rpl"){
        echo "Ini Kelas 11 RPL";
    }elseif($kelas == "12 rpl"){
        echo "Ini Kelas 12 RPL";
    }else{
        echo "Kelas Tidak Ditemukan";
    }


}elseif ($jurusan == "TKRO"){

    if($kelas == "10 tkro"){
        echo "Ini Kelas 10 TKRO";
    }elseif($kelas == "11 tkro "){
        echo "Ini Kelas 11 TKRO";
    }elseif($kelas == "12 tkro"){
        echo "Ini Kelas 12 TKRO";
    }else{
        echo "Kelas Tidak Ditemukan";
    }   


}elseif ($jurusan == "tbsm"){

    if($kelas == " 10 tbsm"){
        echo "Ini Kelas 10 TBSM";
    }elseif($kelas == "11 tbsm"){
        echo "Ini Kelas 11 TBSM";
    }elseif($kelas == "12 tbsm"){
        echo "Ini Kelas 12 TBSM";
    }else{
        echo "Kelas Tidak Ditemukan";
    }   
}   
?>