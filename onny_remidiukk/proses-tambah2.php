<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $kode=$_POST['kode_barang'];
    $nama_barang=$_POST['nama_barang'];
    $harga_jual=$_POST['harga_jual'];
    $harga_beli=$_POST['harga_beli'];
    $satuan=$_POST['satuan'];
    $kategori=$_POST['kategori'];
    $sql="INSERT INTO tb_master(kode_barang,nama_barang,harga_jual,harga_beli,satuan,kategori) 
    Values ('$kode','$nama_barang','$harga_jual', '$harga_beli', '$satuan','$kategori')";
    $query=mysqli_query($db,$sql);

    if($query){
        header("location:tampil2.php?status:sukses");
    }else{
        header("location:tampil2.php?status:gagal");
    }
}
?>