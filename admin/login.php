<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../model.css">
	<link rel="stylesheet" type="text/css" href="modellogin.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
	<div class="headerlog1">
	</div>
	<div class="headerlog2">
		<a href=""><div class="divlogo">
			
		</div></a>
	</div>
	<table>
		<tr>
			<td>
				<div class="kanan">
					<p class="texttengah">Login Administrator</p>
					<p class="texttengah2">Form Login Untuk Administrator</p>
				</div>
			</td>
			<td>
				<div class="divlogin">
					<form action="aksi_login.php" method="post"> 
						<table align="center">
							<tr>
								<td height="100px">
									<p class="judullogin"><b>Login</b></p>
									<div class="garispendek gold"></div>
								</td>
							</tr>
							<tr>
								<td width="300px" height="30px">
									Username <br>
									<input type="text" name="username" class="form-control" autofocus="">
								</td>
							</tr>
							<tr>
								<td width="300px" height="30px">
									Password <br>
									<input type="Password" name="password" class="form-control">
								</td>
							</tr>
							<tr>
								<td height="60px" align="left">
									<button type="submit" class="btn btn-success btn-md">Login</button>
									<a href="../index.php" class="btn btn-danger btn-md"">Kembali</a>
								</td>
							</tr>
						</table>
					</form>
					
				</div>
			</td>
		</tr>
	</table>
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