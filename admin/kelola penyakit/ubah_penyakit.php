<?php
	session_start();
	if (!isset($_SESSION['username'])) {
    	header('location:../login.php');
	}

	include '../koneksi.php';

	$kd_penyakit  =$_GET['no'];
	$query = "SELECT * FROM tb_penyakit WHERE kd_penyakit='".$kd_penyakit."'";
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
			<img src="../../gambar/Logo Inayatullah.png" class="logo">
		</div></a>
		<div class="divmenu">
			<table>
				<tr align="center">
					<td width="150px"><a href="../kelola admin/kelola_admin.php" class="menu2">ADMIN</a></td>
					<td width="150px"><a href="" class="menu2">GEJALA</a></td>
					<td width="150px"><a href="../kelola penyakit/kelola_penyakit.php" class="menu2">PENYAKIT</a></td>
					<td width="150px"><a href="../kelola relasi/kelola_relasi.php" class="menu2">RELASI</a></td>
				</tr>
			</table>
		</div>
	</div>
	<div>
		<div class="konten">
			<p class="hal"> DATA PENYAKIT</p>
			<hr>
			<p class="judulkonten"><b>UBAH DATA PENYAKIT</b></p>
			<div class="garispendek gold"></div>
			<br>
			</table>

		<hr>
			<div id="tambah">
			<form action="aksi_ubah_penyakit.php" method="post"> 
				<?php while($data=mysqli_fetch_assoc($hasil)){ ?>
				<table class="text">
					</tr>
					<tr>
						<td width="300px" height="30px">KODE PENYAKIT</td>
						<td width="300px" height="30px"><input type="text" name="kd_penyakit" placeholder="kode penyakit" required="" readonly="" class="form-control" value="<?php echo $data['kd_penyakit'] ?>"></td>
					</tr>

					<tr>
						<td width="300px" height="30px">NAMA PENYAKIT</td>
						<td width="300px" height="30px"><input type="text" name="nama_penyakit" placeholder="kode penyakit" required="" class="form-control" value="<?php echo $data['nama_penyakit'] ?>"></td>
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
	<div class="footer1">
		<p class="fot1">S I S T E M  P A K A R</p>
		<p class="fot2"></i>DIAGNOSA PENYAKIT PADA ANJING</p>
		<table class="fot2">
			
		</table>
	</div>
	<div class="footer2">
		<p class="textfooter2"></p>
	</div>
</body>
</html>