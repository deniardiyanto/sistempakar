<link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
<h2 class="art-postheader">Data Pengguna</h2>
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

<form onSubmit="return validasi(this)" method="post" name="form1" target="_self" action="?m=konsultasi">
<table class="tab" width="415" style="border:0px;"  border="0" align="center">
    <tr> 
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr> 
      <td>Nama</td>
      <td> 
      <input name="TxtNama" id="TxtNama" type="text" size="35" maxlength="30"></td>
    </tr>
    <tr> 
      <td>Kelamin</td>
      <td> 
      <select name="cbojk" id="cbojk">
      <option value="0" selected="selected">- Jenis Kelamin -</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Wanita">Wanita</option>
      </select>
      </td>
    </tr>
    <tr> 
      <td>Umur</td>
      <td> 
      <input name="TxtUmur" id="TxtUmur" type="text" size="2" maxlength="3"></td>
    </tr>
   
    <tr>
      <td>Email</td>
      <td><input type="text" name="textemail" id="textemail" size="25" maxlength="25"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Daftar">
        <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>
 </div>
                <div class="cleared"></div>
                </div>

    <div class="cleared"></div>
    </div>
</div>



<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>