<?php 
include '../koneksi.php';

$kode_gejala  =$_GET['no'];

$query="DELETE FROM tb_gejala WHERE kode_gejala='".$kode_gejala."'";

$delete=mysqli_query($koneksi,$query);
if($delete){
    // header('location:kelola_gejala.php');
    ?>
    <script type="text/javascript">
			alert("Data Berhasil dihapus!");
			window.location='kelola_gejala.php';
	</script>
    <?php
}else{
    echo "Data Gagal Dihapus!";    
}
?>