<?php
    $success = false;
    $row = $db->get_row("SELECT * FROM tb_konsultasi ORDER BY ID DESC LIMIT 1");
    
    if($row) {
        $jawaban = $row->jawaban;
        $row = $db->get_row("SELECT * FROM tb_pengetahuan WHERE jika='$row->kode_gejala'");  
        
        if($jawaban=='Ya'){
            if($row->ya_tanya){
                $kode_gejala = $row->ya_tanya;
            } else {
                $kode_diagnosa = $row->ya_diagnosa;
                $success = true;
            }
        } else {
            if($row->tidak_tanya){
                $kode_gejala = $row->tidak_tanya;
            } else {
                $kode_diagnosa = $row->tidak_diagnosa;
                $success = true;
            }
        } 
        
        if($success) {
            $row = $db->get_row("SELECT * FROM tb_diagnosa WHERE kode_diagnosa='$kode_diagnosa'");
        } else {
            $row = $db->get_row("SELECT * FROM tb_gejala WHERE kode_gejala='$kode_gejala'");
        }   
             
    } else {
        $start = true;
        $row = $db->get_row("SELECT * FROM tb_pengetahuan p INNER JOIN tb_gejala g ON g.kode_gejala=p.jika ORDER BY ID LIMIT 1");        
    }
    
    
?>
<div class="page-header">
    <h1>Konsultasi</h1>
</div>

<?php if($success) :?>
<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Hasil Konsultasi</h3></div>
    <div class="panel-body text-center">
        <p>Adapun penyakit yang diderita kucing adalah</p>
        <h3><?=$row->nama_diagnosa?></h3>
        <form action="simpan.php" method="post">
            <input type="hidden" name="kode_gejala" value="<?=$row->kode_gejala?>" />
            <p>&nbsp;</p>
            <p>
                <button name="new" class="btn btn-primary" value="1"><span class="glyphicon glyphicon-refresh"></span> Konsultasi Lagi</button>
            </p>
            <p>
                
                <a class="btn btn-danger" href="?m=history"><span class="glyphicon glyphicon history"></span> history</a>

            </p>
            <?php
require_once'functions.php';
if($_POST){
    header("location:index.php?m=Konsultasi");
}
?>
        </form>
    </div>
</div>    
<h3>Riwayat Pertanyaan</h3>
<div class="list-group">
    <?php 
    $rows = $db->get_results("SELECT * FROM tb_konsultasi k INNER JOIN tb_gejala g ON g.kode_gejala=k.kode_gejala");
    foreach($rows as $row):?>
    <div class="list-group-item"><?=$row->ID?>. Apakah <?=strtolower($row->nama_gejala)?>? <strong><?=$row->jawaban?></strong></div>
    <?php endforeach?>
</div>
<?php else:?>
<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Jawablah pertanyaan berikut ini</h3></div>
    <div class="panel-body">
        <h3>Apakah <?=strtolower($row->nama_gejala)?>?</h3>
        <form action="simpan.php" method="post">
            <input type="hidden" name="kode_gejala" value="<?=$row->kode_gejala?>" />
            <p>&nbsp;</p>
            <p>
                <button name="yes" class="btn btn-primary" value="1">Ya</button>
                <button name="no" class="btn btn-danger" value="1">Tidak</button> 
                <?php if(!$start):?>           
                <button name="new" class="btn btn-info pull-right" value="1">Batal</button>
                <?php endif?>
            </p>
        </form>
    </div>

</div>
<?php endif?>
    