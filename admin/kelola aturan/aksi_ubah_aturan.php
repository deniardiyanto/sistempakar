<?php 
include '../koneksi.php';

$kd_pengetahuan =$_POST['kd_pengetahuan'];
$urut =$_POST['urut'];
$jika =$_POST['jika'];
$ya_tanya =$_POST['ya_tanya'];
$ya_diagnosa =$_POST['ya_diagnosa'];
$tidak_tanya =$_POST['tidak_tanya'];
$tidak_diagnosa =$_POST['tidak_diagnosa'];




$query=("UPDATE tb_pengetahuan SET urut='$urut',jika='$jika',ya_tanya='$ya_tanya',ya_diagnosa='$ya_diagnosa',tidak_tanya='$tidak_tanya',tidak_diagnosa='$tidak_diagnosa',");


$insert=mysqli_query($koneksi,$query);
if($insert){
	?>
		<script type="text/javascript">
			alert("Data Diperbarui");
			window.location='kelola_pengetahuan.php';
		</script>
	<?php
}else{
    ?>
		<script type="text/javascript">
			alert("Data Gagal Diperbarui");
			window.location='ubah_pengetahuan.php';
		</script>
	<?php   
}
?>