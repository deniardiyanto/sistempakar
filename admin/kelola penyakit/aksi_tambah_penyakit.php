<?php 
include '../koneksi.php';

$kode_diagnosa =$_POST['kode_diagnosa'];
$nama_diagnosa =$_POST['nama_diagnosa'];





$query="INSERT INTO tb_diagnosa(kode_diagnosa,nama_diagnosa) VALUES ('".$kode_diagnosa."','".$nama_diagnosa."')";


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