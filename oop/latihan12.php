<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa SMK Assalaam</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        fieldset {
            max-width: 800px;
            width: 100%;
            padding: 20px;
            margin: 20px auto;
            border: 1px solid #ccc;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        legend {
            font-weight: bold;
            font-size: 18px;
            color: #0056b3;
        }
        table {
            width: 100%;
            border-spacing: 0 10px;
        }
        td {
            padding: 8px;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        input[type="submit"] {
            background-color: #0056b3;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #003d80;
        }
        select {
            background-color: #fff;
        }
        .center {
            text-align: center;
        }
    </style>
    <script>
        const kotadariprov = {
            "Aceh": ["Banda Aceh", "Langsa", "Lhokseumawe", "Sabang", "Aceh Besar"],
            "Bali": ["Denpasar", "Badung", "Gianyar", "Buleleng", "Karangasem"],
            "Banten": ["Serang", "Tangerang", "Cilegon", "Pandeglang", "Lebak"],
            "Bengkulu": ["Bengkulu", "Rejang Lebong", "Kepahiang", "Seluma", "Bengkulu Utara"],
            "DI Yogyakarta": ["Yogyakarta", "Sleman", "Bantul", "Gunung Kidul", "Kulon Progo"],
            "DKI Jakarta": ["Jakarta", "Bekasi", "Depok", "Tangerang", "Jakarta Utara"],
            "Gorontalo": ["Gorontalo", "Bone Bolango", "Pohuwato", "Gorontalo Utara", "Jakarta"],
            "Jambi": ["Jambi", "Sungai Penuh", "Muaro Jambi", "Tanjung Jabung Timur", "Tanjung Jabung Barat"],
            "Jawa Barat": ["Bandung", "Bogor", "Depok", "Bekasi", "Cirebon"],
            "Jawa Tengah": ["Semarang", "Solo", "Magelang", "Salatiga", "Karanganyar"],
            "Jawa Timur": ["Surabaya", "Malang", "Banyuwangi", "Kediri", "Mojokerto"],
            "Kalimantan Barat": ["Pontianak", "Singkawang", "Sambas", "Kubu Raya", "Bengkayang"],
            "Kalimantan Tengah": ["Palangkaraya", "Kotawaringin Timur", "Barito Selatan", "Murung Raya", "Kapuas"],
            "Kalimantan Selatan": ["Banjarmasin", "Banjarbaru", "Tapin", "Hulu Sungai Selatan", "Kotabaru"],
            "Kalimantan Timur": ["Samarinda", "Balikpapan", "Bontang", "Kutai Kartanegara", "Paser"],
            "Kepulauan Bangka Belitung": ["Pangkalpinang", "Bangka", "Belitung", "Bangka Selatan", "Bangka Tengah"],
            "Kepulauan Riau": ["Tanjung Pinang", "Batam", "Bintan", "Karimun", "Anambas"],
            "Lampung": ["Bandar Lampung", "Metro", "Tanggamus", "Lampung Selatan", "Pesawaran"],
            "Maluku": ["Ambon", "Maluku Tengah", "Maluku Tenggara", "Seram Bagian Timur", "Buru"],
            "Maluku Utara": ["Ternate", "Tidore", "Halmahera", "Sofifi", "Kepulauan Sula"],
            "Nusa Tenggara Barat": ["Mataram", "Sumbawa", "Lombok Barat", "Lombok Tengah", "Sumbawa Barat"],
            "Nusa Tenggara Timur": ["Kupang", "Flores", "Sumba", "Timor Tengah Utara", "Belu"],
            "Papua": ["Jayapura", "Merauke", "Timika", "Manokwari", "Biak Numfor"],
            "Papua Barat": ["Manokwari", "Sorong", "Raja Ampat", "Kaimana", "Tambrauw"],
            "Riau": ["Pekanbaru", "Dumai", "Bengkalis", "Rokan Hilir", "Siak"],
            "Sulawesi Barat": ["Mamuju", "Majene", "Polewali Mandar", "Mamuju Tengah", "Mamasa"],
            "Sulawesi Selatan": ["Makassar", "Parepare", "Palopo", "Gowa", "Takalar"],
            "Sulawesi Tengah": ["Palu", "Donggala", "Sigi", "Tolitoli", "Buol"],
            "Sulawesi Utara": ["Manado", "Bitung", "Tomohon", "Minahasa", "Sangihe"],
            "Sumatera Barat": ["Padang", "Bukittinggi", "Payakumbuh", "Solok", "Sawahlunto"],
            "Sumatera Selatan": ["Palembang", "Prabumulih", "Lubuklinggau", "Ogan Ilir", "Muara Enim"],
            "Sumatera Utara": ["Medan", "Binjai", "Tebing Tinggi", "Pematangsiantar", "Langkat"]
        };

        function updateCities() {
    const prov = document.querySelector('select[name="provinsi"]');
    const pilihkota = document.querySelector('select[name="kota"]');
    const pilihprovinsi = prov.value;

    // Kosongkan kota yang ada sebelumnya
    pilihkota.innerHTML = '';

    // Ambil kota berdasarkan provinsi yang dipilih
    const kota = kotadariprov[pilihprovinsi] || [];
    
    // Buat opsi untuk kota
    pilihkota.innerHTML = kota.map(kotaa => `<option value="${kotaa}">${kotaa}</option>`).join('');
}

    </script>
</head>
<body>
<center>
    <h2>Formulir Pendaftaran Siswa SMK Assalaam</h2>
    <form action="hasil12.php" method="post">
        <fieldset>
            <legend>Data Diri Calon Pendaftar</legend>
            <table>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jrsn" required>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak (RPL)</option>
                            <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif (TKRO)</option>
                            <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor (TBSM)</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="namalengkap" required></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki" required>Laki-laki
                        <input type="radio" name="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tpl" required></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tgl" required></td>
                </tr>
                <tr>
                    <td>Nomor Telepon Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="nosis" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Alamat Calon Pendaftar</legend>
            <table>
                <tr>
                    <td>Provinsi</td>
                    <td>:</td>
                    <td>
                        <select name="provinsi" onchange="updateCities()" required>
                            <option value="">Pilih Provinsi</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Bali">Bali</option>
                            <option value="Banten">Banten</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="DI Yogyakarta">DI Yogyakarta</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Papua">Papua</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Sumatera Barat">Sumatera Barat</option>
                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kab/Kota</td>
                    <td>:</td>
                    <td>
                        <select name="kota" required>
                            <option value="">Pilih Kota</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>:</td>
                    <td><input type="text" name="kec" required></td>
                </tr>
                <tr>
                    <td>Desa/Kelurahan</td>
                    <td>:</td>
                    <td><input type="text" name="desa" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="almat" required></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td><input type="number" name="pos" required></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Data Asal Sekolah</legend>
            <table>
                <tr>
                    <td>Nama Asal Sekolah</td>
                    <td>:</td>
                    <td><input type="text" name="asalsekolah" required></td>
                </tr>
                <tr>
                    <td>Alamat Sekolah</td>
                    <td>:</td>
                    <td><input type="text" name="almatsekolah" required></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Data Orang Tua</legend>
            <table>
                <tr>
                    <td>Nama Lengkap Ayah/Ibu/Wali</td>
                    <td>:</td>
                    <td>
                        <select name="wali" required>
                            <option value="Ayah">Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Wali">Wali</option>
                        </select>
                        <input type="text" name="namawali" required>
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><input type="text" name="pekerjaan" required></td>
                </tr>
                <tr>
                    <td>Nomor Telepon Wali</td>
                    <td>:</td>
                    <td><input type="text" name="nomorhp" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="almatwali" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="kirim" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</center>
</body>
</html>
