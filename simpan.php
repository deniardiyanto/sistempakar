<?php
require_once'functions.php';
if($_POST){
    if($_POST[yes])
        $db->query("INSERT INTO tb_konsultasi (kode_gejala, jawaban) VALUES ('$_POST[kode_gejala]', 'Ya')");
    elseif($_POST[no])
        $db->query("INSERT INTO tb_konsultasi (kode_gejala, jawaban) VALUES ('$_POST[kode_gejala]', 'Tidak')");
    elseif($_POST['new'])
        $db->query("TRUNCATE TABLE tb_konsultasi");
        
    header("location:index.php?m=konsultasi");
}
?>