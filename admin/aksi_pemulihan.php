<?php
	include '../koneksi.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];


	$query = "SELECT * FROM admin WHERE username='".$user."'";
	$select = mysqli_query($koneksi,$query);

	if ($akun = mysqli_fetch_assoc($select)){
		$password_db = $akun['password'];


		if ($pass==$password_db){
			session_start();
			$_SESSION['username'] = $akun['username'];

			header('location:index.php');
		} else {
			?>
				<script type="text/javascript">
					alert("Password/Username Anda Salah");
					window.location='login.php';
				</script>
			<?php
		}
	} else {
		?>
			<script type="text/javascript">
				alert("Maaf, Username Belum Terdaftar");
				window.location='login.php';
			</script>
		<?php
	}
