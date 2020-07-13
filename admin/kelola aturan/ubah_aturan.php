<?php
	session_start();
	if (!isset($_SESSION['username'])) {
    	header('location:../login.php');
	}

	include '../koneksi.php';

	$ID  =$_GET['no'];
	$query = "SELECT * FROM tb_pengetahuan WHERE ID='".$ID."'";
	$hasil = mysqli_query($koneksi,$query);		
?>
<html>
<head>
	<title>ADMINISTRATOR</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../model.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
	<div class="headerlog1">
		<table align="right" class="akun">
			<tr>
				<td width="250px">
					Login Sebagai : 
						<?php 
							$akun = $_SESSION['username']; 
							echo $akun; 
						?>
				</td>
				<td width="130px" align="center"><a onclick="return(confirm('Keluar?'))" href="../aksi_logout.php" class="tombol">Logout</a></td>
			</tr>
		</table>
	</div>
	<div class="headerlog2">
		<a href="../index.php"><div class="divlogo">
		<img class="img-thumbnail rounded-circle" src="../../gambar/Logo-admin.jpg" class="logo">
		</div></a>
		<div class="divmenu">
			<table>
				<tr align="center">
					<td width="150px"><a href="../kelola admin/kelola_admin.php" class="menu2">ADMIN</a></td>
					<td width="150px"><a href="../kelola penyakit/kelola_gejala.php" class="menu2">GEJALA</a></td>
					<td width="150px"><a href="../kelola penyakit/kelola_penyakit.php" class="menu2">PENYAKIT</a></td>
					<td width="150px"><a href="" class="menu2">ATURAN</a></td>
				</tr>
			</table>
		</div>
	</div>
	<div>
		<div class="konten">
			<p class="hal"> DATA ATURAN</p>
			<hr>
			<p class="judulkonten"><b>UBAH DATA ATURAN</b></p>
			<div class="garispendek gold"></div>
			<br>
				
			</table>
			<hr>
			<div id="tambah">
			<form action="aksi_ubah_admin.php" method="post"> 
				<?php while($data=mysqli_fetch_assoc($hasil)){ ?>
				<table class="text">
					</tr>
					<tr>
						<td width="300px" height="30px">JIKA</td>
						<td width="300px" height="30px"><input type="text" name="jika" placeholder="GEJALA" required="" class="form-control" value="<?php echo $data['jika'] ?>"></td>
					</tr>
					<tr>
						<td width="300px" height="30px">YA TANYA</td>
						<td width="300px" height="30px"><input type="text" name="ya_tanya" placeholder="GEJALA" required="" readonly="" class="form-control" value="<?php echo $data['ya_tanya'] ?>"></td>
					</tr>
					<tr>
						<td width="300px" height="30px">YA DIAGNOSA</td>
						<td width="300px" height="30px"><input type="text" name="ya_diagnosa" placeholder="PENYAKIT" required="" readonly="" class="form-control" value="<?php echo $data['ya_diagnosa'] ?>"></td>
					</tr>
					<tr>
						<td width="300px" height="30px">TIDAK TANYA</td>
						<td width="300px" height="30px"><input type="text" name="tidak_tanya" placeholder="GEJALA" required="" readonly="" class="form-control" value="<?php echo $data['tidak_tanya'] ?>"></td>
					</tr>
					<tr>
						<td width="300px" height="30px">TIDAK DIAGNOSA</td>
						<td width="300px" height="30px"><input type="text" name="tidak_diagnosa" placeholder="PENYAKIT" required="" readonly="" class="form-control" value="<?php echo $data['tidak_diagnosa'] ?>"></td>
					</tr>
					
					<tr>
						<td></td>
						<td height="100px">
							<button type="submit" class="btn btn-success btn-md">Simpan</button>
							<a href="kelola_admin.php" class="btn btn-danger btn-md">Batal</a>
						</td>
					</tr>
				</table>
				<?php } ?>
			</form>
			</div>
		</div>
	</div>
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
</body>
</html>