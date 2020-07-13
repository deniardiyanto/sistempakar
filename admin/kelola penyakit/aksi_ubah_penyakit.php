<?php 
include '../koneksi.php';

$kode_diagnosa =$_POST['kode_diagnosa'];
$nama_diagnosa =$_POST['nama_diagnosa'];




$query=("UPDATE tb_diagnosa SET nama_diagnosa='$nama_diagnosa' WHERE kode_diagnosa='$kode_diagnosa'");


$insert=mysqli_query($koneksi,$query);
if($insert){
	?>
		<script type="text/javascript">
			alert("Data Diperbarui");
			window.location='kelola_penyakit.php';
		</script>
	<?php
}else{
    ?>
		<script type="text/javascript">
			alert("Data Gagal Diperbarui");
			window.location='kelola_penyakit.php';
		</script>
	<?php   
}
?>