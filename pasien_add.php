<br>
<link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
<h2 class="textf">DATA PASIEN</h2>
<div class="art-postcontent">

<script type="text/javascript">
$(document).ready(function(){
  $("#nama_pgn").focus();
  })
function validasi(form){
  if(form.nama_pgn.value==""){
    alert("Masukkan Nama Anjing!");
    form.nama_pgn.focus(); return false;
    }else if(form.jn_klm.value==0){
    alert("Masukkan jenis kelamin!");
    form.jn_klm.focus(); return false; 
    }else if(form.umr.value==""){
    alert("Masukkan umur!");
    form.umr.focus(); return false;
    }else if(form.mail.value==""){
    alert("Masukkan email !");
    form.mail.focus(); return false;
    }
    form.submit();
  }
</script>

<div class="container">
<?php if($_POST) include 'aksi.php';?>
<form class="form-horizontal" onSubmit="return validasi(this)" method="post" name="form1">
    <div class="form-group">
      <label class="control-label col-sm-2" for="id_pgn">ID Pengguna:</label>
      <div class="col-sm-1">
        <input name="id_pgn" id="id_pgn" type="text" size="35" class="form-control" value="<?=set_value('id_pgn', kode_oto('id_pengguna', 'pengguna', 'P', 2))?>" readonly="readonly">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama:</label>
      <div class="col-sm-6">
        <input name="nama_pgn" id="nama_pgn" type="text" size="35" maxlength="30" class="form-control" placeholder="Masukan Nama">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jk">Jenis Kelamin:</label>
      <div class="col-sm-3">
      <select name="jn_klm" id="jn_klm" class="custom-select" required>
      <option value="0" selected="selected">- Jenis Kelamin -</option>
      <option value="j">Jantan</option>
      <option value="b">Betina</option>
      </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="umur">Umur:</label>
      <div class="col-sm-2">
        <input name="umr" id="umr" type="text" size="1" maxlength="3" class="form-control" placeholder="Tahun">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-5">
        <input type="text" name="mail" id="mail" size="25" maxlength="25" class="form-control" placeholder="nama@mail.com">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="Submit" value="Daftar" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Daftar</button>
        <button type="reset" name="Submit2" value="Reset" class="btn btn-default">Reset</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
<br>