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
            <td class="kanankiri">
                <?php include "login.php" ?>
            </td>
            <td class="tengah">
                <a href="https://www.instagram.com/crochetbyvio/"><img src="foto/logo.png" height="100px"></a>
                <h3>Selamat datang di Crochetbyvio!</h3>
                <p>Rajutan buatan tangan, dibuat khusus untukmu</p>
                <p style="text-align:justify;">Crochetbyvio adalah usaha kerajinan tangan yang berfokus pada pembuatan berbagai produk crochet (rajutan) secara <b>handmade</b>. Setiap produk dibuat dengan benang dan dirajut satu per satu dengan memperhatikan bentuk, warna, serta detailnya. Crochetbyvio menghadirkan berbagai macam produk mulai dari boneka kecil, keychain, aksesori, hingga berbagai desain unik lainnya yang cocok untuk digunakan sendiri maupun diberikan sebagai hadiah.
                    <br><br>Selain menyediakan produk yang sudah tersedia, Crochetbyvio juga menerima pesanan custom sesuai dengan keinginan pelanggan. Pelanggan dapat memilih jenis produk, warna, ukuran, maupun desain tertentu untuk mendapatkan hasil yang lebih personal. Dengan konsep handmade dan <i>made-to-order</i>, Crochetbyvio ingin menghadirkan produk crochet yang tidak hanya lucu dan unik, tetapi juga memiliki sentuhan personal pada setiap pembuatannya.
                </p>
                <p><br><u>Produk-produk kami</u></p>
                <table align="center" style="text-align: center;">
                    <tr>
                        <td><img src="foto/bear.png" width="100px"></td>
                        <td><img src="foto/glove.png" width="100px"></td>
                        <td><img src="foto/hamburger.png" width="100px"></td>
                        <td><img src="foto/turtle.png" width="100px"></td>
                    </tr>
                    <tr>
                        <td>Polar Bear</td>
                        <td>Glove</td>
                        <td>Hamburger</td>
                        <td>Turtle</td>
                    </tr>
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