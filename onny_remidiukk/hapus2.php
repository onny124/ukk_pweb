<?php
include("koneksi.php");
$id = $_GET['id'];

$sql="DELETE FROM tb_master where id=$id";
$query=mysqli_query($db,$sql);

if($query){
    header("location:tampil2.php?status:sukses");
}else{
    die("akses dilarang");
}
?>