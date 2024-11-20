<?php
$nama = "Ian";
$jk = "Laki-Laki";
$jenis = "Minuman";
$menu = "jus";
$jumlah = "9";



echo "~~~~~~~RESTORAN SELALU RAME~~~~~~~<br><hr><br>
Nama : $nama <br>
Jenis Kelamin : $jk <br>
";

if ($jenis == "Makanan"){
    echo "Jenis : Makanan <br>";
    if($menu == "nasgor"){
        $harga = 10000;
        $total = $harga * $jumlah;
        echo " 
        Menu : Nasi Goreng <br> 
        Harga : 10.000 <br>
        Jumlah : $jumlah <br><hr>
        Total : $total <br>";
        if ($total >= 50000) {
            $dis = $total / 100 * 20;
            $bayar = $total - $dis;
            echo "
            Diskon 20% : $dis <br><hr>
            Total Bayar : $bayar";
        }
    }elseif($menu == "migor"){
        $harga = 15000;
        $total = $harga * $jumlah;
        echo "
        Menu : Mie Goreng <br> 
        Harga : 15.000 <br>
        Jumlah : $jumlah <br><hr>
        Total : $total <br>";
        if ($total >= 50000) {
            $dis = $total / 100 * 20;
            $bayar = $total - $dis;
            echo "
            Diskon 20% : $dis <br><hr>
            Total Bayar : $bayar";
        }
    }elseif($menu == "ayam"){
        $harga = 20000;
        $total = $harga * $jumlah;
        echo "
        Menu : Ayam Goreng <br> 
        Harga : 20.000 <br>
        Jumlah : $jumlah <br><hr>
        Total : $total <br>";
        if ($total >= 50000) {
            $dis = $total / 100 * 20;
            $bayar = $total - $dis;
            echo "
            Diskon 20% : $dis <br><hr>
            Total Bayar : $bayar";
        }
    }else{
        echo "Menu yang anda cari tidak tersedia";
    }

} if ($jenis == "Minuman"){
    echo "Jenis : Minuman <br>";
    if($menu == "mineral"){
        $harga = 5000;
        $total = $harga * $jumlah;
        echo "
        Menu : Air Mineral <br> 
        Harga : 5.000 <br>
        Jumlah : $jumlah <br><hr>
        Total : $total <br>";
        if ($total >= 50000) {
            $dis = $total / 100 * 20;
            $bayar = $total - $dis;
            echo "
            Diskon 20% : $dis <br><hr>
            Total Bayar : $bayar";
        }
    }elseif($menu == "freshtea"){
        $harga = 7000;
        $total = $harga * $jumlah;
        echo "
        Menu : Fresh Tea <br> 
        Harga : 7.000 <br>
        Jumlah : $jumlah <br><hr>
        Total : $total <br>";
        if ($total >= 50000) {
            $dis = $total / 100 * 20;
            $bayar = $total - $dis;
            echo "
            Diskon 20% : $dis <br><hr>
            Total Bayar : $bayar";
        }
    }elseif($menu == "jus"){
        $harga = 12000;
        $total = $harga * $jumlah;
        echo "
        Menu : Jus <br> 
        Harga : 12.000 <br>
        Jumlah : $jumlah <br><hr>
        Total : $total <br>";
        if ($total >= 50000) {
            $dis = $total / 100 * 20;
            $bayar = $total - $dis;
            echo "
            Diskon 20% : $dis <br><hr>
            Total Bayar : $bayar";
        }
    }else{
        echo "Menu yang anda cari tidak tersedia";
    }

}
?>
