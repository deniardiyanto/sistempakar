<?php 
include '../koneksi.php';

$kd_penyakit =$_POST['kd_penyakit'];
$nama_penyakit =$_POST['nama_penyakit'];




$query=("UPDATE tb_penyakit SET nama_penyakit='$nama_penyakit' WHERE kd_penyakit='$kd_penyakit'");


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