<br>
<link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
<h2 class="textf">DATA PENGGUNA</h2>
<div class="art-postcontent">

<script type="text/javascript">
$(document).ready(function(){
  $("#TxtNama").focus();
  })
function validasi(form){
  if(form.TxtNama.value==""){
    alert("Masukkan Nama Kucing!");
    form.TxtNama.focus(); return false;
    }else if(form.cbojk.value==0){
    alert("Masukkan jenis kelamin !");
    form.cbojk.focus(); return false; 
    }else if(form.TxtUmur.value==""){
      alert("Masukkan umur anda !");
      form.TxtUmur.focus(); return false;
      }else if(form.TxtAlamat.value==""){
        alert("Masukkan alamat anda !");
        form.TxtAlamat.focus(); return false;
        }else if(form.textemail.value==""){
          alert("Masukkan email !");
          form.textemail.focus(); return false;
          }
    form.submit();
  }
</script>

<div class="container">
<form class="form-horizontal" onSubmit="return validasi(this)" method="post" name="form1" target="_self" action="?m=konsultasi">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama:</label>
      <div class="col-sm-6">
        <input name="TxtNama" id="TxtNama" type="text" size="35" maxlength="30" class="form-control" placeholder="Masukan Nama">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jk">Jenis Kelamin:</label>
      <div class="col-sm-3">
      <select name="cbojk" id="cbojk" class="custom-select" required>
      <option value="0" selected="selected">- Jenis Kelamin -</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Wanita">Wanita</option>
      </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="umur">Umur:</label>
      <div class="col-sm-1">
        <input name="TxtUmur" id="TxtUmur" type="text" size="2" maxlength="3" class="form-control" placeholder="-">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-5">
        <input type="text" name="textemail" id="textemail" size="25" maxlength="25" class="form-control" placeholder="Masukan Email" name="email">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="Submit" value="Daftar" class="btn btn-primary">Daftar</button>
        <button type="reset" name="Submit2" value="Reset" class="btn btn-default">Reset</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
<br>