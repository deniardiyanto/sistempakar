<?php 
include '../koneksi.php';

$kd_gejala  =$_GET['no'];

$query="DELETE FROM tb_gejala WHERE kd_gejala='".$kd_gejala."'";

$delete=mysqli_query($koneksi,$query);
if($delete){
    header('location:kelola_gejala.php');
}else{
    echo "Data Gagal Dihapus";    
}
?>