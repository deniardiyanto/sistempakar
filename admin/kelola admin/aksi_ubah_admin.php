<?php 
include '../koneksi.php';

$id_admin =$_POST['id_admin'];
$username =$_POST['username'];
$password =$_POST['password'];



$query=("UPDATE tb_admin SET username='$username',password='$password' WHERE id_admin='$id_admin'");


$insert=mysqli_query($koneksi,$query);
if($insert){
	?>
		<script type="text/javascript">
			alert("Data Diperbarui");
			window.location='kelola_admin.php';
		</script>
	<?php
}else{
    ?>
		<script type="text/javascript">
			alert("Data Gagal Diperbarui");
			window.location='kelola_admin.php';
		</script>
	<?php   
}
?>