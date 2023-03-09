<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $id=$_POST['id'];
    $kode=$_POST['kode_barang'];
    $nama_barang=$_POST['nama_barang'];
    $harga_jual=$_POST['harga_jual'];
    $harga_beli=$_POST['harga_beli'];
    $satuan=$_POST['satuan'];
    $kategori=$_POST['kategori'];
    
    $sql = "UPDATE tb_master SET 
    kode_barang='$kode',nama_barang='$nama_barang',
    harga_jual='$harga_jual',harga_beli='$harga_beli',satuan='$satuan',kategori='$kategori' WHERE id='$id'";
    $query= mysqli_query($db,$sql);
    if($query){
        header('location:tampil2.php?status=berhasil');
    }    
    }
    ?>