<?php 
include '../koneksi.php';
include '../../functions.php';


$db->query("DELETE FROM tb_pengetahuan WHERE ID='$_GET[ID]'");
//header("location:index.php?m=gejala");
if($db){
    header('location:kelola_aturan.php');
}else{
    echo "Data Gagal Dihapus";    
}

// $id_admin  =$_GET['no'];

// $query="DELETE FROM tb_pengetahuan WHERE ID='".$ID."'";

// $delete=mysqli_query($koneksi,$query);
// if($delete){
//     header('location:kelola_pengetahuan.php');
// }else{
//     echo "Data Gagal Dihapus";    
// }
?>