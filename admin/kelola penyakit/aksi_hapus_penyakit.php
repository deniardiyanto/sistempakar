<?php 
include '../koneksi.php';

$kode_diagnosa =$_GET['no'];

$query="DELETE FROM tb_diagnosa WHERE kode_diagnosa='".$kode_diagnosa."'";

$delete=mysqli_query($koneksi,$query);
if($delete){
    ?>
		<script type="text/javascript">
			alert("Data Berhasil dihapus");
			window.location='kelola_penyakit.php';
		</script>
	<?php
}else{
    ?>
		<script type="text/javascript">
			alert("Data Gagal Dihapus");
			window.location='kelola_penyakit.php';
		</script>
	<?php    
}
?>