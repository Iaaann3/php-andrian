<?php
class ppdb{
    public function data_diri($nama ,$jrsn ,$jk ,$tpl , $tgl, $telp, $email){
        echo "Nama Lengkap : $nama <br>
        Jurusan : $jrsn <br>
        Jenis Kelamin : $jk <br>
        Tempat Lahir : $tpl <br>
        Tanggal Lahir : $tgl <br>
        Nomor Telepon : $telp <br>
        Email : $email <hr>";
    }
    public function alamat($prov ,$kota ,$kecamatan ,$kelurahan , $alamat, $pos){
        echo "Provinsi : $prov <br>
        Kab/Kota : $kota <br>
        Kecamatan : $kecamatan <br>
        Desa/Kelurahan : $kelurahan <br>
        Alamat : $alamat <br>
        Kode Pos : $pos <hr>";
    }
    public function asalsekola($asal, $almat){
        echo "Nama Asal Sekolah : $asal <br>
        Alamat Sekolah : $almat <hr>";
    }
}
// object
$cetak = new ppdb();
echo $cetak->data_diri("Andrian", "RPL", "Laki Laki", "Bandung", "10 Oktober 2008", 8815873744, "andrian@gmail.com");
echo $cetak->alamat("Jawa Barat", "Kota Bandung", "Babakan Ciparay", "Margahayu Utara", "Jl.Cibolerang Gg.Bagja", 40024);
echo $cetak->asalsekola("SMPN 75 Bandung", "Jl.Caringin");
