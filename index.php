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
	
	<div class="container">
    <?php
        // if(in_array($mod, array('diagnosa', 'gejala', 'pengetahuan', 'password')) && !$_SESSION[login])
        //     redirect_js('?m=login');
        if(file_exists($mod.'.php'))
            include $mod.'.php';
        else
            include 'home.php';
    ?>
    </div>
	<div class="footer2" align="center">

		
	</div>
</body>
</html>