<?php 
include '../koneksi.php';

$kode_gejala =$_POST['kode_gejala'];
$nama_gejala =$_POST['nama_gejala'];




$query=("UPDATE tb_gejala SET nama_gejala='$nama_gejala' WHERE kode_gejala='$kode_gejala'");


$insert=mysqli_query($koneksi,$query);
if($insert){
	?>
		<script type="text/javascript">
			alert("Data Diperbarui");
			window.location='kelola_gejala.php';
		</script>
	<?php
}else{
    ?>
		<script type="text/javascript">
			alert("Data Gagal Diperbarui");
			window.location='kelola_gejala.php';
		</script>
	<?php   
}
?>