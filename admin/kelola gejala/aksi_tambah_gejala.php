<?php 
include '../koneksi.php';

$kd_gejala =$_POST['kd_gejala'];
$nama_gejala =$_POST['nama_gejala'];





$query="INSERT INTO tb_gejala(kd_gejala,nama_gejala) VALUES ('".$kd_gejala."','".$nama_gejala."')";


$insert=mysqli_query($koneksi,$query);
if($insert){
    ?>
		<script type="text/javascript">
			alert("Data Ditambahkan");
			window.location='kelola_gejala.php';
		</script>
	<?php
}else{
   ?>
		<script type="text/javascript">
			alert("Data Gagal Ditambahkan");
			window.location='kelola_gejala.php';
		</script>
	<?php
}
?>