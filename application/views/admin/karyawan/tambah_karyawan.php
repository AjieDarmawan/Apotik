<script type="text/javascript">
  function addbarang()
  {
    
   var no_tlpn    =$('#no_tlpn').val();
     if(!$("#nama").val())
        {
          alert('maaf Nama tidak boleh kosong');
          $("#nama").focus();
          return false;
        }
          else if(!$("#tgl_masuk").val())
        {
          alert('maaf tgl_masuk tidak boleh kosong');
          $("#tgl_masuk").focus();
          return false;
        } 
          else if(!$("#gender").val())
        {
          alert('maaf gender tidak boleh kosong');
          $("#gender").focus();
          return false;
        }
        else if(!$("#kota").val())
        {
            alert('maaf kota tidak boleh kosong');
          $("#kota").focus();
          return false;
        }
        else if(no_tlpn.length!=12) {
            alert("no telepon harus 12 karakter");
          return false;
        }
         else if(!$("#alamat").val())
        {
            alert('maaf alamat tidak boleh kosong');
          $("#alamat").focus();
          return false;
        }
        else{
          alert('Data berhasil Ditambah');
        }
      
}

 
</script>


      
         <?php
         echo form_open('admin/karyawantambah');
         ?>
         <div class="form-horizontal form-label-left" novalidate="">                              
                      <span class="section">Tambah Data karyawan</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Nama Lengkap<span class="required">*</span>
                        </label>  
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama" name="nama" required placeholder="Masukan Nama Lengkap" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tanggal Masuk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="tgl_masuk" name="tgl_masuk" required  placeholder="Tanggal Masuk" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="radio" id="gender" checked name="gender" value="laki-laki">Laki-Laki</input>
                          <input type="radio" id="gender" name="gender" value="perempuan">Perempuan</input>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kota<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kota" name="kota" required placeholder="Masukan Kota Anda" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" required for="occupation">status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="radio" id="status" checked  name="status" value="Manager">Manager</input>
                          <input type="radio" id="status" name="status" value="Kontrak">Suverpaisor</input>
                          <input type="radio" id="status" name="status" value="Karyawan">Karyawan</input>
                          
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3">no_tlpon</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="no_tlpn" type="number" name="no_tlpn" required  pattern="{12}" placeholder="Masukan No Telepon" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea type="text" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap" required class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        <?=anchor('admin/karyawan','Kembali',array('class'=>'btn btn-sm btn-success'))?>
                        <button type="submit" name="submit" onclick="addbarang()" class="btn btn-success btn-sm">Masuk</button>
                        </div>
                      </div>
                  <div>
              </form>
                