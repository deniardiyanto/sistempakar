<?php 
include '../koneksi.php';
include '../../functions.php';

// $kd_pengetahuan =$_POST['kd_pengetahuan'];
// $urut =$_POST['urut'];
$jika =$_POST['jika'];
$ya_tanya =$_POST['ya_tanya'];
$ya_diagnosa =$_POST['ya_diagnosa'];
$tidak_tanya =$_POST['tidak_tanya'];
$tidak_diagnosa =$_POST['tidak_diagnosa'];


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
			alert("Aturan sudah ada!");
			window.location='kelola_aturan.php';
		</script>
		<?php
        }else{
            if( $ya_tanya != '' )
                $ya_diagnosa = '';
            if( $tidak_tanya != '' )
				$tidak_diagnosa = '';
				$db->query("UPDATE tb_pengetahuan SET jika='$jika', ya_tanya='$ya_tanya', ya_diagnosa='$ya_diagnosa', tidak_tanya='$tidak_tanya', tidak_diagnosa='$tidak_diagnosa' WHERE ID='$_GET[ID]'");
			?>
				<script type="text/javascript">
					alert("Data berhasil diubah!");
					window.location='kelola_aturan.php';
				</script>
			<?php
		}

// $query=("UPDATE tb_pengetahuan SET urut='$urut',jika='$jika',ya_tanya='$ya_tanya',ya_diagnosa='$ya_diagnosa',tidak_tanya='$tidak_tanya',tidak_diagnosa='$tidak_diagnosa',");


// $insert=mysqli_query($koneksi,$query);
// if($insert){
// 	?>
		<script type="text/javascript">
// 			alert("Data Diperbarui");
// 			window.location='kelola_pengetahuan.php';
// 		</script>
 	<?php
// }else{
//     ?>
 		<script type="text/javascript">
// 			alert("Data Gagal Diperbarui");
// 			window.location='ubah_pengetahuan.php';
// 		</script>
 	<?php   
// }
// ?>