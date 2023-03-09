<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $no_faktur=$_POST['no_faktur'];
    $nama_konsumen=$_POST['nama_konsumen'];
    $jumlah=$_POST['jumlah'];
    $harga_satuan=$_POST['harga_satuan'];
    $harga_total=$_POST['harga_total'];
    $sql="INSERT INTO tb_penjualan(no_faktur,nama_konsumen,jumlah,harga_satuan,harga_total) 
    Values ('$no_faktur','$nama_konsumen','$jumlah', '$harga_satuan', '$harga_total')";
    $query=mysqli_query($db,$sql);

    if($query){
        header("location:tampil.php?status:sukses");
    }else{
        header("location:tampil.php?status:gagal");
    }
}
?>