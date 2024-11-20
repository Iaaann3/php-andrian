<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Ujian Nasional</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Efek gradient animasi berputar di fieldset */
        @keyframes animate-background {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        fieldset {
            width: 400px;
            padding: 20px;
            margin: 40px auto;
            border-radius: 10px;
            border: 3px solid transparent;
            background: linear-gradient(270deg, #ff007f, #ff00ff, #007bff, #00d1ff);
            background-size: 400% 400%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            animation: animate-background 5s ease infinite;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        h3 {
            margin-top: 20px;
            color: #444;
        }

        table {
            width: 100%;
            margin-top: 10px;
        }

        td {
            padding: 10px;
        }

        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Efek gradient berputar pada tombol */
        @keyframes rotate-glow {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: linear-gradient(270deg, #ff007f, #ff00ff, #007bff, #00d1ff);
            background-size: 400% 400%;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            animation: rotate-glow 3s ease infinite;
        }

        input[type="submit"]:hover {
            background-color: #007bff;
        }

        .status {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }

        table th {
            text-align: left;
            font-size: 20px;
            color: #555;
        }

        table td {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <center>
        <fieldset>
            <form action="" method="post">
                <h2>Nilai Ujian Nasional</h2>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="namas" value="" required></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><input type="text" name="kls" value="" required></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td><select name="jrsn">
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                                <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Nilai Ujian</h3></td>
                    </tr>
                    <tr>
                        <td>Bahasa Indonesia</td>
                        <td>:</td>
                        <td><input type="number" name="indo" value="" required></td>
                    </tr>
                    <tr>
                        <td>Bahasa Inggris</td>
                        <td>:</td>
                        <td><input type="number" name="inggris" value="" required></td>
                    </tr>
                    <tr>
                        <td>Matematika</td>
                        <td>:</td>
                        <td><input type="number" name="mtk" value="" required></td>
                    </tr>
                    <tr>
                        <td>Produktif</td>
                        <td>:</td>
                        <td><input type="number" name="prdktf" value="" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="proses" value="Simpan"></td>
                    </tr>
                </table>
            </form> 
        </fieldset>
    </center>

    <fieldset>
        <?php
        if (isset($_POST['proses'])) {
            $nama = $_POST['namas'];
            $kelas = $_POST['kls'];
            $jrsn = $_POST['jrsn'];
            $indo = $_POST['indo'];
            $inggris = $_POST['inggris'];
            $matematika = $_POST['mtk'];
            $produktif = $_POST['prdktf'];

            $rata = ($indo + $inggris + $matematika + $produktif) / 4;

            echo "<table>
                    <tr>
                        <th colspan='3'>Data Siswa</th>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>$nama</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td>$kelas</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>$jrsn</td>
                    </tr>
                    <tr>
                        <td>Bahasa Indonesia</td>
                        <td>:</td>
                        <td>$indo</td>
                    </tr>
                    <tr>
                        <td>Bahasa Inggris</td>
                        <td>:</td>
                        <td>$inggris</td>
                    </tr>
                    <tr>
                        <td>Matematika</td>
                        <td>:</td>
                        <td>$matematika</td>
                    </tr>
                    <tr>
                        <td>Produktif</td>
                        <td>:</td>
                        <td>$produktif</td>
                    </tr>
                    <tr>
                        <td>Rata-Rata</td>
                        <td>:</td>
                        <td>$rata</td>
                    </tr>
                </table>";

            // Menentukan status kelulusan
            $status = ($rata > 75) ? "Tuntas" : "Belum Tuntas";

            // Output status
            echo "<div class='status'><b>Status:</b> $status</div>";
        }
        ?>
    </fieldset>
</body>
</html>
