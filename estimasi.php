<?php include "connectdb.php"; ?>
<html>

<head>
    <title>Crochetbyvio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table border="1" align="center" class="tabel">
        <tr class="judul">
            <th colspan="3">
                <p>Crochetbyvio</p>
            </th>
        </tr>
        <tr class="menu">
            <td colspan="3">
                <a href="index.php">Beranda</a>
                <a href="pesan.php">Pesan</a>
                <a href="estimasi.php">Estimasi</a>
            </td>
        </tr>
        <tr class="isi">
            <td class="kanankiri"> <?php include "login.php" ?></td>
            <td class="tengah" style="text-align: left;">
                <h3 style="margin-left: 10px;">Estimasi pesanan selesai</h3>
                <table>
                    <form method="POST" action="">
                        <tr>
                            <td>Id pesanan</td>
                            <td><input type="text" name="id"></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input type="number" name="harga"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="button" value="Kirim" name="kirim1"></td>
                        </tr>
                    </form>
                    <?php if (isset($_POST['kirim1'])) {
                        $id = $_POST['id'];
                        $harga = $_POST['harga'];
                        echo "Id pesanan: $id <br>";
                        if ($harga >= 100000) {
                            echo "Estimasi : 1 minggu++";
                        } elseif ($harga >= 80000) {
                            echo "Estimasi : 6 hari++";
                        } elseif ($harga >= 60000) {
                            echo "Estimasi : 5 hari++";
                        } elseif ($harga >= 40000) {
                            echo "Estimasi : 4 hari++";
                        } elseif ($harga >= 1000) {
                            echo "Estimasi : 3 hari++";
                        } else {
                            echo "Harga tidak valid";
                        }
                    }
                    ?>


                </table>
                <hr>
                <h3 style="margin-left: 10px;">Nilai</h3>
                <table>
                    <form method="POST" action="">
                        <tr>
                            <td>Pilih jenis</td>
                            <td>  <input type="radio" name="gangen" value="Genap">Genap<br><input type="radio" name="gangen" value="Ganjil">Ganjil</td>
                        </tr>
                        <tr>
                            <td>Masukkan nilai awal</td>
                            <td><input type="number" name="awal"></td>
                        </tr>
                        <tr>
                            <td>Masukkan nilai akhir</td>
                            <td><input type="number" name="akhir"></td>
                        </tr>
                        <tr>
                            <td><input class="button" type="submit" value="Kirim" name="kirim2"></td>
                        </tr>
                    </form>
                    <?php
                    if (isset($_POST['kirim2'])) {
                        $gangen=$_POST['gangen'];
                        if ($_POST['awal'] > $_POST['akhir']) {
                            echo "Nilai tidak valid";
                        } else {
                            $awal = $_POST['awal'];
                            $akhir = $_POST['akhir'];
                            if($gangen=="Genap"){
                            for ($awal; $awal <= $akhir; $awal++) {
                                  if($awal%2==0){
                                        echo "$awal ";
                                    }  
                            }
                            }else{
                                for ($awal; $awal <= $akhir; $awal++) {
                                  if($awal%2!=0){
                                        echo "$awal ";
                                    }  
                            }
                            }
                            
                        }
                    }
                    ?>
                </table>
            </td>
            <td class="kanankiri">Pesanan teratas:
                <ol>
                    <li>Spiderman</li>
                    <li>Spongebob</li>
                    <li>Cinnamoroll</li>
                </ol>

                <br>Jenis produk:
                <ul>
                    <li>Boneka</li>
                    <li>Gantungan kunci</li>
                    <li>Tas</li>
                </ul>
            </td>
        </tr>
        <tr class="footer">
            <td colspan="3">Instagram: <a href="https://www.instagram.com/crochetbyvio/">@crochetbyvio</a> WhatsApp: <a href="https://wa.me/628125901267">0812-5690-1267</a></td>
        </tr>
    </table>

</body>

</html>