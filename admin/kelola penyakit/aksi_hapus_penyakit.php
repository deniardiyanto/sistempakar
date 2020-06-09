<?php 
include '../koneksi.php';

$kd_penyakit =$_GET['no'];

$query="DELETE FROM tb_penyakit WHERE kd_penyakit='".$kd_penyakit."'";

$delete=mysqli_query($koneksi,$query);
if($delete){
    header('location:kelola_penyakit.php');
}else{
    echo "Data Gagal Dihapus";    
}
?>