<?php
require_once __DIR__ . '../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
ob_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Client Sistem Diagnosa Penyakit Anjing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../model.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style type="text/css">
    .table {
        margin: auto;
        width: 50% !important; 
        }
    img {
        height: 80px;
        width: 80px;
        }
    </style>
</head>
<body>
   <h4 align="center"><i>LAPORAN DATA CLIENT KLINIK PELIHARAAN ANJING dr.Fajar Cahyono</i></h4>
   <p align="center"><i>PERIODE: July-Agustus 2020</i></p><br>
   <div align="center"><img src="../gambar/Logo-admin.jpg"></div><br>
   <table align="center">
        <tr>
            <td>Nama Pemilik</td>
            <td>:</td>
            <td>dr.Fajar Cahyono</td>
        </tr>
        <tr>
            <td>Spesialis</td>
            <td>:</td>
            <td>Diagnosa penyakit anjing</td>
        </tr>
        <tr>
            <td>Lokasi praktek</td>
            <td>:</td>
            <td>Dukun, Magelang, Jawa Tengah</td>
        </tr>

        <!-- if (($dataAnjing['jn_kelamin']) == "j") {
                        echo "Jantan";
                    }else{
                        echo "Betina";
                    } -->
    </table><br><br><br>
	<div align="center">
		<table align="center" width="80%" border="1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nama Anjing</th>
					<th>Jenis Kelamin</th>
					<th>Umur</th>
                    <th>E-mail Pemilik</th>
				</tr>
			</thead>
			<tbody>
				<?php
                $koneksi = mysqli_connect("localhost", "root", "", "sp_fc") or die(mysqli_error()); 
                $sql="select * from pengguna";
                $query=mysqli_query($koneksi,$sql);
                while ($dataAnjing=mysqli_fetch_assoc($query)) {?>	
				<tr>
					<td><?=$dataAnjing['id_pengguna']?></td>
					<td><?=$dataAnjing['nama_pengguna']?></td>
					<td><?=$dataAnjing['jn_kelamin']?></td>
					<td><?=$dataAnjing['umur']?> Tahun</td>
					<td><?=$dataAnjing['email']?></td>
				</tr>
				<?php
                }
				?>
                
			</tbody>
		</table>
	</div><br>
    <br><br>
</body>
</html>
<?php 
	$html = ob_get_contents(); 
	ob_end_clean();
	$mpdf->WriteHTML(utf8_encode($html));
    $mpdf->Output("dataAnjingdanPemilik.pdf" ,'I');
    // Define a default Landscape page size/format by name
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);

    // Define a default page size/format by array - page will be 190mm wide x 236mm height
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'utf-8', [190, 236]]);

    // Define a default page using all default values except "L" for Landscape orientation
    $mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
?>