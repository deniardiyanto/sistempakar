<?php
	session_start();
	if (!isset($_SESSION['username'])) {
    	header('location:../login.php');
	}
?>
<html>
<head>
	<title>ADMINISTRATOR</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../model.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script>
		function hide()
		{
			var x = document.getElementById('tambah');
			x.style.display = 'none';
		}

		function myFunction() {
		    var x = document.getElementById('tambah');
		    if (x.style.display === 'none') {
		        x.style.display = 'block';
		    } else {
		        x.style.display = 'none';
		    }
		}
	</script>
</head>
<body onload="hide()">
	<div class="headerlog1">
		<table align="right" class="akun">
			<tr>
				<td width="250px">
					LOGIN | 
						<?php 
							$akun = $_SESSION['username']; 
							echo  $akun; 
						?>
				</td>
				<td width="130px" align="center"><a href="../aksi_logout.php" onclick="return(confirm('Keluar?'))" class="tombol">Logout</a></td>
			</tr>
		</table>
	</div>
	<div class="headerlog2">
		<a href="../index.php"><div class="divlogo">
			
		</div></a>
		<div class="divmenu">
			<table>
				<tr align="center">
					<td width="150px"><a href="../kelola admin/kelola_admin.php" class="menu2">ADMIN</a></td>
					<td width="150px"><a href="../kelola gejala/kelola_gejala.php" class="menu2">GEJALA</a></td>
					<td width="150px"><a href="../kelola penyakit/kelola_penyakit.php" class="menu2">PENYAKIT</a></td>
					<td width="150px"><a href="" class="menu2">ATURAN</a></td>
				</tr>
			</table>
		</div>
	</div>
	<div>
		<div class="konten">
			<p class="hal">INPUT > ATURAN</p>
			<hr>
			<p class="judulkonten"><b>ATURAN</b></p>
			<div class="garispendek gold"></div>
			<br>
			<table>
				<tr>
					<td>
						
					</td>
					<td width="110px" align="right"><form><a class="btn btn-primary btn-md" onclick="myFunction()">Data Baru +</a></form></td>
				</tr>
			</table>	

			<div id="tambah">
			<form action="aksi_tambah_aturan.php" method="post"> 
				<table class="text">
					<tr>
						<td width="300px" height="30px">JIKA</td>
						<td width="300px" height="30px">
							<select class="form-control" name="ya_tanya">
                            	<option></option>
                            	<?php
                            	include '../koneksi.php';
                            	$jika = mysqli_query($koneksi,"SELECT * FROM tb_gejala");
                            	while ($datajika=mysqli_fetch_array($jika)) {
                            		echo'<option value="'.$datajika['nama_gejala'].'">'.$datajika['nama_gejala'].'</option>';
                            	}
                            	?>
                        	</select><br>
						</td>
					</tr>


					<tr>
						<td width="300px" height="30px">YA MAKA TANYA</td>
						<td width="300px" height="30px">
							
								<select class="form-control" name="ya_tanya">
                            	<option></option>
                            	<?php
                            	include '../koneksi.php';
                            	$jika = mysqli_query($koneksi,"SELECT * FROM tb_gejala");
                            	while ($datajika=mysqli_fetch_array($jika)) {
                            		echo'<option value="'.$datajika['nama_gejala'].'">'.$datajika['nama_gejala'].'</option>';
                            	}
                            	?>
                        	</select><br>
						</td>
					</tr>
					<tr>
						<td width="300px" height="30px">YA MAKA PENYAKIT</td>
						<td width="300px" height="30px">
						<select class="form-control" name="ya_tanya">
                            	<option></option>
                            	<?php
                            	include '../koneksi.php';
                            	$jika = mysqli_query($koneksi,"SELECT * FROM tb_penyakit");
                            	while ($datajika=mysqli_fetch_array($jika)) {
                            		echo'<option value="'.$datajika['nama_penyakit'].'">'.$datajika['nama_penyakit'].'</option>';
                            	}
                            	?>
                        	</select><br>	

						</td>
					</tr>
					<tr>
						<td width="300px" height="30px">TIDAK MAKA TANYA</td>
						<td width="300px" height="30px">
						<select class="form-control" name="ya_tanya">
                            	<option></option>
                            	<?php
                            	include '../koneksi.php';
                            	$jika = mysqli_query($koneksi,"SELECT * FROM tb_gejala");
                            	while ($datajika=mysqli_fetch_array($jika)) {
                            		echo'<option value="'.$datajika['nama_gejala'].'">'.$datajika['nama_gejala'].'</option>';
                            	}
                            	?>
                        	</select><br>	

						</td>
					</tr>
					<tr>
						<td width="300px" height="30px">TIDAK MAKA PENYAKIT</td>
						<td width="300px" height="30px">
							
							<select class="form-control" name="ya_tanya">
                            	<option></option>
                            	<?php
                            	include '../koneksi.php';
                            	$jika = mysqli_query($koneksi,"SELECT * FROM tb_penyakit");
                            	while ($datajika=mysqli_fetch_array($jika)) {
                            		echo'<option value="'.$datajika['nama_penyakit'].'">'.$datajika['nama_penyakit'].'</option>';
                            	}
                            	?>
                        	</select><br>
						</td>
					</tr>
					
					<tr>
						<td></td>
						<td height="100px">
							<button type="submit" class="btn btn-success btn-md">Tambahkan</button>
						</td>
					</tr>
				</table>
			</form>
			</div>
			<br>
			<?php 
			include '../koneksi.php';			

			$query = "SELECT * FROM tb_pengetahuan";

			$pola = 'ASC';
			$polabaru = 'ASC';
			if(isset($_GET['cari']) OR isset($_GET['cari2'])){
				$cari = $_GET['cari'];
				$cari2 = $_GET['cari2'];
				if ($cari2=='') {
					$query2 = "SELECT * FROM tb_penyakit WHERE nama_penyakit LIKE '%".$cari."%'";
				}else{
					$query2 = "SELECT * FROM tb_penyakit WHERE nama_penyakit LIKE '%".$cari."%' AND nama_penyakit='".$cari2."'";
				}
				$hasil = mysqli_query($koneksi,$query2);
				?>
					<h7>Pencarian untuk nama '<?php echo $cari; ?>',</h7>
				<?php				
			}
			else if(isset($_GET['urut'])) {
				$urut = $_GET['urut'];
				$pola = $_GET['pola'];
				 
				$query3 = "SELECT * FROM tb_penyakit ORDER BY ".$urut."".$pola."";
				$hasil = mysqli_query($koneksi,$query3);
				if($pola=='ASC'){
					$polabaru='DESC';
					
				}else {
					$polabaru='ASC';
				}
			}
			else{
				$hasil = mysqli_query($koneksi,$query);		
			}

			?>

			<table align="center" class="table table-bordered table-striped table-hover tabelscroll">
				<tr class="nw">
                    <th>No</th>
                    <th>Basis Aturan</th>
                    <th>Aksi</th>
                </tr>
				<!-- <tr>
			   
			        <th><a class="sort" href="kelola_penyakit.php?urut=kd_penyakit & pola=<?php $polabaru;?>"><div>Id Aturan</div></a></th>
			        <th><a class="sort" href="kelola_admin.php?urut=nama_penyakit & pola=<?php $polabaru;?>"><div>Aturan</div></a></th>
			       
			        <th width="100px">Aksi</th>
			    </tr>			     -->
			   
			    <?php while($data=mysqli_fetch_assoc($hasil)){ ?>
			    <tr>
			        <td>
			            <?php echo $data['kd_penyakit'] ?>
			        </td>
			        <td>
			            <?php echo $data['nama_penyakit'] ?>
			        </td>
			        
			        

			        <td>
			            <a class="fa fa-pencil" title="Ubah Data" style="font-size:18px;" href="aksi_ubah_penyakit.php?no=<?php echo $data['kd_penyakit']?>"></a>
			            &ensp;
			            <a class="fa fa-trash" title="Hapus" style="font-size:18px;" onclick="return(confirm('Hapus Data?'))" href="aksi_hapus_penyakit.php?no=<?php echo $data['kd_penyakit']?>"></a>
			        </td>
			    </tr>

			    <?php } ?>
			</table>
			<hr>
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