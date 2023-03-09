<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
</head>
<body>
    <center>
    <h1>APLIKASI PENJUALAN "NINE MART"</h1>
    <br>
    <h2>DAFTAR BARANG DI GUDANG</h2>
    <br>
    <a href="tambah2.php"><input type="button" value="Tambah"></a>
    <p></p>
    <table border="1">
        <tr>
            <td>No.</td>
            <td>Kode Barang</td>
            <td>Nama Barang</td>
            <td>Harga Jual</td>
            <td>Harga Beli</td>
            <td>Satuan</td>
            <td>Kategori</td>
            <td>Aksi Anda</td>
        </tr>
        <?php
        include("koneksi.php");
        $query=mysqli_query($db, "SELECT * FROM tb_master");
        $no = 1;
        while($jual=mysqli_fetch_array($query)){
            echo"<tr>";
            echo"<td>".$no++."</td>";
            echo"<td>".$jual['kode_barang']."</td>";
            echo"<td>".$jual['nama_barang']."</td>";
            echo"<td>".$jual['harga_jual']."</td>";
            echo"<td>".$jual['harga_beli']."</td>";
            echo"<td>".$jual['satuan']."</td>";
            echo"<td>".$jual['kategori']."</td>";
            echo"<td>";
            echo"<a href='edit2.php?id=".$jual['id']."'>Edit |</a>";
            echo"<a href='hapus2.php?id=".$jual['id']."'>Hapus</a>";
            "</td>";
            "</tr>";
        }
        ?>
    </table>
        <p>
        <a href="index.php"><input type="button" value="Back"></a>
    </center>
</body>
</html>