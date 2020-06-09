<?php 
include '../koneksi.php';

$kd_pengetahuan =$_POST['kd_pengetahuan'];
$urut =$_POST['urut'];
$jika =$_POST['jika'];
$ya_tanya =$_POST['ya_tanya'];
$ya_diagnosa =$_POST['tidak_diagnosa'];
$tidak_tanya =$_POST['tidak_tanya'];
$tidak_diagnosa =$_POST['tidak_diagnosa'];




$query="INSERT INTO tb_pengetahuan(kd_pengetahuan,urut,jika,ya_tanya,ya_diangnosa,tidak_tanya,tidak_diagnosa) VALUES ('".$kd_pengetahuan."','".$urut."''".$jika."''".$ya_tanya."''".$ya_diangnosa."''".$tidak_tanya."''".$tidak_diagnosa."')";


$insert=mysqli_query($koneksi,$query);
if($insert){
    ?>
		<script type="text/javascript">
			alert("Data Ditambahkan");
			window.location='kelola_pengetahuan.php';
		</script>
	<?php
}else{
   ?>
		<script type="text/javascript">
			alert("Data Gagal Ditambahkan");
			window.location='kelola_pengetahuan.php';
		</script>
	<?php
}
?>