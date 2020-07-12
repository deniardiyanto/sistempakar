<?php
	session_start();
	if (!isset($_SESSION['username'])) {
    	header('location:aksi_login.php');
	}
?>

<?php
include'../functions.php';
?>
<html>
<head>
	<title>ADMINISTRATOR</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../model.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
	<div class="headerlog1">
		<table align="right" class="akun">
			<tr>
				<td width="250px">
					L O G I N | 
						<?php 
							$akun = $_SESSION['username']; 
							echo $akun; 
						?>
				</td>
				<td width="130px" align="center"><a onclick="return(confirm('Keluar?'))" href="aksi_logout.php" class="tombol">Logout</a></td>
			</tr>
		</table>
	</div>
	<div class="headerlog2">
	<a href="index.php"><div class="divlogo">
			<img class="img-thumbnail rounded-circle" src="../gambar/Logo-admin.jpg" class="logo">
		</div></a>
	<div class="divlogo">
	<!-- <img class="img-thumbnail"
        src="logo-admin.jpg"/> -->
	</div>
		<div class="divmenu">
			<table>
				
			</table>
		</div>
	</div>
	<div>
		<br><br><br>
		<div class="konten">
			<table>
				<tr>
					<td width="250px" height="250px">
						<a href="kelola admin/kelola_admin.php"><div class="menuadmin"><img class="img-thumbnail"
        				src="admin.jpg"/><p class="mn">ADMIN</p></div></a>
					</td>
					<td width="250px" height="250px">
						<a href="kelola gejala/kelola_gejala.php"><div class="menuadmin"><img class="img-thumbnail"
        				src="gejala.jpg"/><p class="mn">GEJALA</p></div></a>
					</td>
					<td width="250px" height="250px">
						<a href="kelola penyakit/kelola_penyakit.php"><div class="menuadmin"><img class="img-thumbnail"
        				src="penyakit.jpg"/><p class="mn">PENYAKIT</p></div></a>
					</td>
					<td width="250px" height="250px">
						<a href="../?m=admin/kelola aturan/kelola_aturan"><div class="menuadmin"><img class="img-thumbnail"
        				src="aturan.jpg"/><p class="mn">ATURAN</p></div></a>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="footer">
	<div class="footer">
		<br><br><br>
	<div class="konten2">
		<table width="100%">
			<tr>
				<td width="80%" height="150px" align="center">
					<h1>S I S T E M  P A K A R</h1>
					<p>DIAGNOSA PENYAKIT PADA ANJING</p>
				</td>
				
			</tr>
		</table>
	</div>
	</div>
	</div>
	</div>
</body>
</html>