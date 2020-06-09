<?php 
include '../koneksi.php';

$id_admin =$_POST['id_admin'];
$username =$_POST['username'];
$password =$_POST['password'];




$query="INSERT INTO tb_admin(id_admin,username,password) VALUES ('".$id_admin."','".$username."','".$password."')";


$insert=mysqli_query($koneksi,$query);
if($insert){
    ?>
		<script type="text/javascript">
			alert("Data Ditambahkan");
			window.location='kelola_admin.php';
		</script>
	<?php
}else{
   ?>
		<script type="text/javascript">
			alert("Data Gagal Ditambahkan");
			window.location='kelola_admin.php';
		</script>
	<?php
}
?>