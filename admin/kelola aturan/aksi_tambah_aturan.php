<?php 
include '../koneksi.php';
include '../../functions.php';

// $ID =$_POST['ID'];
// $urut =$_POST['urut'];
$jika =$_POST['jika'];
$ya_tanya =$_POST['ya_tanya'];
$ya_diagnosa =$_POST['ya_diagnosa'];
$tidak_tanya =$_POST['tidak_tanya'];
$tidak_diagnosa =$_POST['tidak_diagnosa'];

// $jika = $_POST[jika];
// $ya_tanya = $_POST[ya_tanya];
// $ya_diagnosa = $_POST[ya_diagnosa];
// $tidak_tanya = $_POST[tidak_tanya];
// $tidak_diagnosa = $_POST[tidak_diagnosa];

$ada = $db->get_row("SELECT * FROM tb_pengetahuan WHERE jika='$jika' AND ID<>'$_GET[ID]'");
if($jika=='' || ($ya_tanya=='' && $ya_diagnosa=='') || ($tidak_tanya=='' && $tidak_diagnosa=='')){
			?>
			<script type="text/javascript">
				alert("Pilih <strong>JIKA</strong>, salah satu <strong>YA MAKA</strong>, salah satu <strong>TIDAK MAKA</strong>!");
				window.location='kelola_aturan.php';
			</script>
			<?php
            // print_msg("Pilih <strong>JIKA</strong>, salah satu <strong>YA MAKA</strong>, salah satu <strong>TIDAK MAKA</strong>!");
        }elseif($jika == $ya_tanya || $jika==$tidak_tanya){
			?>
			<script type="text/javascript">
				alert("Field (JIKA) tidak boleh sama dengan (YA MAKA TANYA) atau (TIDAK MAKA TANYA)!");
				window.location='kelola_aturan.php';
			</script>
			<?php
		}elseif($ada){            
		?>
		<script type="text/javascript">
			alert("Aturan sudah ada");
			window.location='kelola_aturan.php';
		</script>
		<?php
        }else{
            if( $ya_tanya != '' )
                $ya_diagnosa = '';
            if( $tidak_tanya != '' )
				$tidak_diagnosa = '';
				$db->query("INSERT INTO tb_pengetahuan (jika, ya_tanya, ya_diagnosa, tidak_tanya, tidak_diagnosa) 
                VALUES ('$jika', '$ya_tanya', '$ya_diagnosa', '$tidak_tanya', '$tidak_diagnosa')");
			?>
				<script type="text/javascript">
					alert("Data Ditambahkan");
					window.location='kelola_aturan.php';
				</script>
			<?php
		}
		
	 
// $query="INSERT INTO tb_pengetahuan(ID,urut,jika,ya_tanya,ya_diangnosa,tidak_tanya,tidak_diagnosa) VALUES ('".$ID."','".$urut."''".$jika."''".$ya_tanya."''".$ya_diangnosa."''".$tidak_tanya."''".$tidak_diagnosa."')";


// $insert=mysqli_query($koneksi,$query);
// if($insert){
//     ?>
 		<script type="text/javascript">
// 			alert("Data Ditambahkan");
// 			window.location='kelola_aturan.php';
// 		</script>
 	<?php
// }else{
//    ?>
 		<script type="text/javascript">
// 			alert("Data Gagal Ditambahkan");
// 			window.location='kelola_aturan.php';
// 		</script>
 	<?php
// }
// ?>