<?php
include'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>sistem pakar</title>
	<link rel="stylesheet" type="text/css" href="model.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="canonical" href="http://<?=$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>" />
</head>
<body>
	<div class="header">
		<div class="menu">
			<table align="center">
				<tr align="center">
					<td width="350px"><a href="index.php" class="menu">B E R A N D A</a></td>
					<td width="350px"><a href="?m=pasien_add" class="menu"> K O N S U L T A S I</a></td>
					<td width="350px"><a href="admin/login.php" class="menu">L O G I N</a></td>
				</tr>
			</table>
		</div>
		
	</div>
	
	<div class="tentang">
		<p>
				<p class="judulkonten"><b>SISTEM PAKAR</b></p>
			Sistem pakar adalah sistem yang didesain dan diimplementasikan  dengan  bantuan  bahasa pemrograman  tertentu  untuk  dapat menyelesaikan masalah seperti yang dilakukan oleh para ahli atau pakar, sistem pakar sendiri merupakan paket perangkat lunak atau paket program computer yang ditujukan sebagai penyedia nasihat dan sarana bantu dalam memecahkan masalah di bidang-bidang spesialisasi tertentu seperti sains, perekayasaan, matematika, kedokteran, pendidikan dan sebagainya.  
			Salah  satu  metode yang  yang  paling  umum untuk  merepresentasikan dan menyelesaikan masalah  untuk sistem pakar adalah dengan metode forward chaining. Strategi dengan pelacakan ke depan yang dimulai sekumpulan  fakta-fakta  pengetahuan,  memperoleh  fakta-fakta baru  menggunakan  aturan-aturan  dimana premis-premis  sesuai  dengan  fakta-fakta pengetahuan,  dan  meneruskan  prosesnya sampai  sebuah  tujuan  yang  ditetapkan  telah tercapai. Kadang disebut juga data driven karena interface engine mengunakan informasi yang ditentukan oleh user untuk memindah keseluruh jaringan dari logika ‘AND’ dan ‘OR’ sampai sebuah terminal ditentukan sebagai objek. 
		</p>
	</div>
	<br><br><br>
	<div class="konten2">
		<table width="100%">
			<tr>
				<td width="80%" height="150px" align="center">
					
					<h1>S I S T E M  P A K A R</h1>
					<p>DIAGNOSA PENYAKIT PADA ANJING</p>
				</td>
					
				</td>
				
			</tr>
		</table>
	</div>
	<div class="container">
    <?php
        // if(in_array($mod, array('diagnosa', 'gejala', 'pengetahuan', 'password')) && !$_SESSION[login])
        //     redirect_js('?m=login');
        if(file_exists($mod.'.php'))
            include $mod.'.php';
        else
            include 'index.php';
    ?>
    </div>
	<div class="footer2" align="center">

		
	</div>
</body>
</html>