<?php 
include '../koneksi.php';

$id_admin  =$_GET['no'];

$query="DELETE FROM tb_pengetahuan WHERE kd_pengetahuan='".$kd_pengetahuan."'";

$delete=mysqli_query($koneksi,$query);
if($delete){
    header('location:kelola_pengetahuan.php');
}else{
    echo "Data Gagal Dihapus";    
}
?>