<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $id=$_POST['id'];
    $no_faktur=$_POST['no_faktur'];
    $nama_konsumen=$_POST['nama_konsumen'];
    $jumlah=$_POST['jumlah'];
    $harga_satuan=$_POST['harga_satuan'];
    $harga_total=$_POST['harga_total'];
    
    $sql = "UPDATE tb_penjualan SET no_faktur='$no_faktur',nama_konsumen='$nama_konsumen',jumlah='$jumlah',harga_satuan='$harga_satuan',harga_total='$harga_total' WHERE id='$id'";
    $query= mysqli_query($db,$sql);
    if($query){
        header('location:tampil.php?status=berhasil');
    }    
    }
    ?>