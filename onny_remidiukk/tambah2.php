<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambah</title>
</head>
<body> 
     <center>
    <form action="proses-tambah2.php" method="POST">
            <table border="3">
                <h2>Form Stok Barang</h2>
                <tr>
                    <td><label for="kode_barang">Kode Barang:</label></td>
                    <td><input type="text" name="kode_barang"></td>
                </tr>
                <tr>
                    <td><label for="nama_barang">Nama Barang: </label></td>
                    <td><input type="text" name="nama_barang"></td>
                </tr>
                <tr>
                    <td><label for="harga_jual">Harga Jual: </label></td>
                    <td><input type="text" name="harga_jual"></td>
                </tr>
                <tr>
                    <td><label for="harga_beli">Harga Beli: </label></td>
                    <td><input type="text" name="harga_beli"></td>
                </tr>
                <tr>
                    <td><label for="satuan">Satuan: </label></td>
                    <td><input type="text" name="satuan"></td>
                </tr>
                <tr>
                    <td><label for="kategori">Kategori: </label></td>
                    <td><input type="text" name="kategori"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="daftar" value="daftar"></td>
                </tr>
            </table>
       
    </form> 
</center>
</body>
</html>