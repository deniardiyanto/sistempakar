<?php 
include '../koneksi.php';

$kd_penyakit =$_POST['kd_penyakit'];
$nama_penyakit =$_POST['nama_penyakit'];





$query="INSERT INTO tb_penyakit(kd_penyakit,nama_penyakit) VALUES ('".$kd_penyakit."','".$nama_penyakit."')";


$insert=mysqli_query($koneksi,$query);
if($insert){
    ?>
		<script type="text/javascript">
			alert("Data Ditambahkan");
			window.location='kelola_penyakit.php';
		</script>
	<?php
}else{
   ?>
		<script type="text/javascript">
			alert("Data Gagal Ditambahkan");
			window.location='kelola_penyakit.php';
		</script>
	<?php
}
?>