<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header('location:tampil.php');
}
$id=$_GET['id'];
$sql = "SELECT * FROM tb_penjualan WHERE tb_penjualan.id='$id'";
$query=mysqli_query($db,$sql);
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT TRANSAKSI</title>
</head>
<body>
<center>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']?>">
            <table border="3">
                <h2>Edit Transaksi</h2>
                <tr>
                    <td><label for="no_faktur">No Faktor: </label></td>
                    <td><input type="text" name="no_faktur"value="<?php echo $data['no_faktur']?>"></td>
                </tr>
                <tr>
                    <td><label for="nama_konsumen">Nama Konsumen: </label></td>
                    <td><input type="text" name="nama_konsumen"value="<?php echo $data['nama_konsumen']?>"></td>
                </tr>
                <tr>
                    <td><label for="jumlah">Jumlah: </label></td>
                    <td><input type="text" name="jumlah"value="<?php echo $data['jumlah']?>"></td>
                </tr>
                <tr>
                    <td><label for="harga_satuan">Harga Satuan: </label></td>
                    <td><input type="text" name="harga_satuan"value="<?php echo $data['harga_satuan']?>"></td>
                </tr>
                <tr>
                    <td><label for="harga_total">Harga Total: </label></td>
                    <td><input type="text" name="harga_total"value="<?php echo $data['harga_total']?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="daftar" value="EDIT"></td>
                </tr>
            </table>
       
    </form> 
</center>
</body>
</html>