<?php 
include '../koneksi.php';

$id_admin  =$_GET['no'];

$query="DELETE FROM tb_admin WHERE id_admin='".$id_admin."'";

$delete=mysqli_query($koneksi,$query);
if($delete){
    header('location:kelola_admin.php');
}else{
    echo "Data Gagal Dihapus";    
}
?>