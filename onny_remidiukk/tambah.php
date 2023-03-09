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
    <form action="proses-tambah.php" method="POST">
            <table border="3">
                <h2>Form Transaksi</h2>
                <tr>
                    <td><label for="no_faktur">No Faktor: </label></td>
                    <td><input type="text" name="no_faktur"></td>
                </tr>
                <tr>
                    <td><label for="nama_konsumen">Nama Konsumen: </label></td>
                    <td><input type="text" name="nama_konsumen"></td>
                </tr>
                <tr>
                    <td><label for="jumlah">Jumlah: </label></td>
                    <td><input type="text" name="jumlah"></td>
                </tr>
                <tr>
                    <td><label for="harga_satuan">Harga Satuan: </label></td>
                    <td><input type="text" name="harga_satuan"></td>
                </tr>
                <tr>
                    <td><label for="harga_total">Harga Total: </label></td>
                    <td><input type="text" name="harga_total"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="daftar" value="daftar"></td>
                </tr>
            </table>
       
    </form> 
</center>
</body>
</html>