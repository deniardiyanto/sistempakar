<?php
require_once'functions.php';
$demo = false;
/*
$urls  = array(
    'diagnosa_tambah' => 'diagnosa',
    'diagnosa_ubah' => 'diagnosa',
    'diagnosa_hapus' => 'diagnosa',
    
    'gejala_tambah' => 'gejala',
    'gejala_ubah' => 'gejala',
    'gejala_hapus' => 'gejala',
    
    'pengetahuan_tambah' => 'pengetahuan',
    'pengetahuan_ubah' => 'pengetahuan',
    'pengetahuan_hapus' => 'pengetahuan',
       
);*/

 
    /** LOGIN */ 
    // if ($mod=='login'){
    //     $user = esc_field($_POST[user]);
    //     $pass = esc_field($_POST[pass]);
        
    //     $row = $db->get_row("SELECT * FROM tb_admin WHERE user='$user' AND pass='$pass'");
    //     if($row){
    //         $_SESSION[login] = $row->user;
    //         redirect_js("index.php");
    //     } else{
    //         print_msg("Salah kombinasi username dan password.");
    //     }          
    // } elseif($act=='logout'){
    //     unset($_SESSION[login]);
    //     header("location:index.php");
    // } elseif ($mod=='password'){
    //     $pass1 = $_POST[pass1];
    //     $pass2 = $_POST[pass2];
    //     $pass3 = $_POST[pass3];
        
    //     $row = $db->get_row("SELECT * FROM tb_admin WHERE user='$_SESSION[login]' AND pass='$pass1'");        
        
    //     if($pass1=='' || $pass2=='' || $pass3=='')
    //         print_msg('Field bertanda * harus diisi.');
    //     elseif(!$row)
    //         print_msg('Password lama salah.');
    //     elseif( $pass2 != $pass3 )
    //         print_msg('Password baru dan konfirmasi password baru tidak sama.');
    //     else{        
    //         $db->query("UPDATE tb_admin SET pass='$pass2' WHERE user='$_SESSION[login]'");                    
    //         print_msg('Password berhasil diubah.', 'success');
    //     }
    // } 
    
    /** DIAGNOSA */
    if($mod=='pasien_add'){
        $id_pgn = $_POST['id_pgn'];
        $nama_pgn = $_POST['nama_pgn'];
        $jn_klm = $_POST['jn_klm'];
        $umr = $_POST['umr'];
        $mail = $_POST['mail'];
        if($id_pgn=='' || $nama_pgn=='' || $jn_klm=='' || $umr=='' || $mail=='')
            print_msg("Field tidak boleh kosong!");
        else{
            $db->query("INSERT INTO pengguna (id_pengguna, nama_pengguna, jn_kelamin, umur, email) VALUES ('$id_pgn', '$nama_pgn', '$jn_klm', '$umr', '$mail')");                       
            redirect_js("index.php?m=konsultasi");
        }
    }
    
    /** PENGETAHUAN TAMBAH */ 
    else if ($mod=='pengetahuan_tambah'){
        $jika = $_POST[jika];
        $ya_tanya = $_POST[ya_tanya];
        $ya_diagnosa = $_POST[ya_diagnosa];
        $tidak_tanya = $_POST[tidak_tanya];
        $tidak_diagnosa = $_POST[tidak_diagnosa];
                
        $ada = $db->get_row("SELECT * FROM tb_pengetahuan WHERE jika='$jika' AND ID<>'$_GET[ID]'");
        
        if($jika=='' || ($ya_tanya=='' && $ya_diagnosa=='') || ($tidak_tanya=='' && $tidak_diagnosa==''))
            print_msg("Pilih <strong>JIKA</strong>, salah satu <strong>YA MAKA</strong>, salah satu <strong>TIDAK MAKA</strong>!");
        elseif($jika == $ya_tanya || $jika==$tidak_tanya)
            print_msg("Field <strong>JIKA</strong> tidak boleh sama dengan <strong>YA MAKA TANYA</strong> atau <strong>TIDAK MAKA TANYA</strong>!");
        elseif($ada)             
            print_msg("Pengetahuan sudah ada!");
        else{
            if( $ya_tanya != '' )
                $ya_diagnosa = '';
            if( $tidak_tanya != '' )
                $tidak_diagnosa = '';    
                
            $db->query("INSERT INTO tb_pengetahuan (jika, ya_tanya, ya_diagnosa, tidak_tanya, tidak_diagnosa) 
                VALUES ('$jika', '$ya_tanya', '$ya_diagnosa', '$tidak_tanya', '$tidak_diagnosa')");
            
            redirect_js("index.php?m=pengetahuan");
        }   
    }else if ($mod=='pengetahuan_ubah'){
        $jika = $_POST[jika];
        $ya_tanya = $_POST[ya_tanya];
        $ya_diagnosa = $_POST[ya_diagnosa];
        $tidak_tanya = $_POST[tidak_tanya];
        $tidak_diagnosa = $_POST[tidak_diagnosa];
                
        $ada = $db->get_row("SELECT * FROM tb_pengetahuan WHERE jika='$jika' AND ID<>'$_GET[ID]'");
        
        if($jika=='' || ($ya_tanya=='' && $ya_diagnosa=='') || ($tidak_tanya=='' && $tidak_diagnosa==''))
            print_msg("Pilih <strong>JIKA</strong>, salah satu <strong>YA MAKA</strong>, salah satu <strong>TIDAK MAKA</strong>!");
        elseif($jika == $ya_tanya || $jika==$tidak_tanya)
            print_msg("Field <strong>JIKA</strong> tidak boleh sama dengan <strong>YA MAKA TANYA</strong> atau <strong>TIDAK MAKA TANYA</strong>!");
        elseif($ada)             
            print_msg("Pengetahuan sudah ada!");
        else{
            if( $ya_tanya != '' )
                $ya_diagnosa = '';
            if( $tidak_tanya != '' )
                $tidak_diagnosa = '';
            $db->query("UPDATE tb_pengetahuan SET jika='$jika', ya_tanya='$ya_tanya', ya_diagnosa='$ya_diagnosa', tidak_tanya='$tidak_tanya', tidak_diagnosa='$tidak_diagnosa' WHERE ID='$_GET[ID]'");
            redirect_js("index.php?m=pengetahuan");
        }  
    } else if ($act=='pengetahuan_hapus'){
        $db->query("DELETE FROM tb_pengetahuan WHERE ID='$_GET[ID]'");
        header("location:index.php?m=gejala");
    }