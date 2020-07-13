<?php
	session_start();
	if (!isset($_SESSION['username'])) {
    	header('location:../login.php');
	}
	include'../../functions.php';
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
		<img class="img-thumbnail rounded-circle" src="../../gambar/Logo-admin.jpg" class="logo">
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
					<form action="kelola_aturan.php" method="get">
							<table>
								<tr>
									<td width="10px"></td>
									<td>
										<input type="text" name="cari" placeholder="Cari Basis Aturan" class="form-control">
									</td>
									<td width="70px" align="center"><button type="submit" class="btn btn-success btn-md">Cari</button></td>
									<td><a class="btn btn-primary btn-md" href="kelola_aturan.php">Refresh</a></td>
								</tr>
							</table>	
						</form>	
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
                            	$jika = mysqli_query($koneksi,"SELECT * FROM tb_diagnosa");
                            	while ($datajika=mysqli_fetch_array($jika)) {
                            		echo'<option value="'.$datajika['nama_diagnosa'].'">'.$datajika['nama_diagnosa'].'</option>';
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
                            	$jika = mysqli_query($koneksi,"SELECT * FROM tb_diagnosa");
                            	while ($datajika=mysqli_fetch_array($jika)) {
                            		echo'<option value="'.$datajika['nama_diagnosa'].'">'.$datajika['nama_diagnosa'].'</option>';
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
					$query2 = "SELECT * FROM tb_diagnosa WHERE nama_diagnosa LIKE '%".$cari."%'";
				}else{
					$query2 = "SELECT * FROM tb_diagnosa WHERE nama_diagnosa LIKE '%".$cari."%' AND nama_diagnosa='".$cari2."'";
				}
				$hasil = mysqli_query($koneksi,$query2);
				?>
					<h7>Pencarian untuk nama '<?php echo $cari; ?>',</h7>
				<?php				
			}
			else if(isset($_GET['urut'])) {
				$urut = $_GET['urut'];
				$pola = $_GET['pola'];
				 
				$query3 = "SELECT * FROM tb_diagnosa ORDER BY ".$urut."".$pola."";
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
			   
			        <th><a class="sort" href="kelola_penyakit.php?urut=kode_diagnosa & pola=<?php $polabaru;?>"><div>Id Aturan</div></a></th>
			        <th><a class="sort" href="kelola_admin.php?urut=nama_diagnosa & pola=<?php $polabaru;?>"><div>Aturan</div></a></th>
			       
			        <th width="100px">Aksi</th>
			    </tr> -->
			   
			    <?php //while($data=mysqli_fetch_assoc($hasil)){ ?>
			    <!-- <tr>
			        <td>
			            <?php //echo $data['kode_diagnosa'] ?>
			        </td>
			        <td>
			            <?php //echo $data['nama_diagnosa'] ?>
			        </td>
			        
			        

			        <td>
			            <a class="fa fa-pencil" title="Ubah Data" style="font-size:18px;" href="aksi_ubah_penyakit.php?no=<?php echo $data['kode_diagnosa']?>"></a>
			            &ensp;
			            <a class="fa fa-trash" title="Hapus" style="font-size:18px;" onclick="return(confirm('Hapus Data?'))" href="aksi_hapus_penyakit.php?no=<?php echo $data['kode_diagnosa']?>"></a>
			        </td>
			    </tr>

			    <?php //} ?> -->

				<!-- pengetahuan ambil dari sp_kucingpersia -->
				<?php
            $rows = $db->get_results("SELECT * FROM tb_gejala ORDER BY kode_gejala");
            foreach($rows as $row) {
                $GEJALA[$row->kode_gejala] = $row->nama_gejala; 
            }
            
            $rows = $db->get_results("SELECT * FROM tb_diagnosa ORDER BY kode_diagnosa");
            foreach($rows as $row) {
                $DIAGNOSA[$row->kode_diagnosa] = $row->nama_diagnosa; 
            }
            
            $q = esc_field($_GET['q']);
            $rows = $db->get_results("SELECT * FROM tb_pengetahuan");
            $no=0;
            
            foreach($rows as $row):?>
            <tr>
                <td><?=++$no ?></td>
                <td>
                    <strong>JIKA</strong> <?=$GEJALA[$row->jika]?><br />
                    <?php if($row->ya_tanya):?>
                        <strong>MAKA </strong> Tanya : Apakah <?=strtolower($GEJALA[$row->ya_tanya])?>?<br />
                    <?php endif;?>
                    <?php if($row->ya_diagnosa):?>
                        <strong>MAKA </strong> Diagnosa : <?=$DIAGNOSA[$row->ya_diagnosa]?>?<br />
                    <?php endif;?>
                    <?php if($row->tidak_tanya):?>
                        <strong>JIKA TIDAK MAKA </strong> Tanya : Apakah <?=strtolower($GEJALA[$row->tidak_tanya])?>?<br />
                    <?php endif;?>
                    <?php if($row->tidak_diagnosa):?>
                        <strong>JIKA TIDAK MAKA </strong> Diagnosa :  <?=$DIAGNOSA[$row->tidak_diagnosa]?>?<br />
                    <?php endif;?>
                </td>
                <!-- <td class="nw">
                    <a class="fa fa-pencil" title="Ubah Data" style="font-size:18px;" href="?m=ubah_aturan&ID=<?=$row->ID?>"></a>&ensp;
                    <a class="fa fa-trash" title="Hapus" style="font-size:18px;" href="aksi.php?act=pengetahuan_hapus&ID=<?=$row->ID?>" onclick="return confirm('Hapus data?')"></span></a>
                </td> -->
				<td>
					<a class="fa fa-pencil" title="Ubah Data" style="font-size:18px;" href="ubah_aturan.php?no=<?php echo $data['kode_diagnosa']?>"></a>
					&ensp;
					<a class="fa fa-trash" title="Hapus" style="font-size:18px;" onclick="return(confirm('Hapus Data?'))" href="aksi_hapus_penyakit.php?no=<?php echo $data['kode_diagnosa']?>"></a>
			    </td>
            </tr>
            <?php endforeach;?>
				<!-- end copy -->
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