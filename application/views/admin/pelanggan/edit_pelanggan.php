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
        
        
         else if(!$("#alamat").val())
        {
            alert('maaf alamat tidak boleh kosong');
          $("#alamat").focus();
          return false;
        }
        else{
          alert('Data berhasil Diedit');
        }
      
}

 
</script>


      
         <?php
         echo form_open('admin/pelangganedit');
         ?>
         <div class="form-horizontal form-label-left" novalidate="">                              
                      <span class="section">Tambah Data Pelanggan</span>
                      <input type="hidden" name="id" value=<?=$pelanggan['id_pelanggan']?>></input>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Nama Lengkap<span class="required">*</span>
                        </label>  
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama" name="nama_pelanggan" value="<?=$pelanggan['nama_pelanggan']?>" 
                          required placeholder="Masukan Nama Lengkap" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="radio" id="gender" checked name="gender" value="laki-laki"
                          <?php if($pelanggan['jenis_kelamin']=='laki-laki') echo "checked='checked'" ?>>Laki-Laki</input>
                          <input type="radio" id="gender" name="gender" value="perempuan"
                           <?php if($pelanggan['jenis_kelamin']=='perempuan') echo "checked='checked'" ?>>Perempuan</input>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">pekerjaan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kota" name="pekerjaan" value="<?=$pelanggan['pekerjaan']?>"  required placeholder="Masukan pekerjaan Anda" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    
                      <div class="item form-group">
                        <label class="control-label col-md-3">no_tlpon</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="no_tlpn" type="number" name="no_tlpn" required  pattern="{12}" value="<?=$pelanggan['no_hp']?>"  placeholder="Masukan No Telepon" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea type="text" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap" required class="form-control col-md-7 col-xs-12"><?=$pelanggan['alamat']?> </textarea>
                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        <?=anchor('admin/pelanggan','Kembali',array('class'=>'btn btn-sm btn-success'))?>
                        <button type="submit" name="submit" onclick="addbarang()" class="btn btn-success btn-sm">Masuk</button>
                        </div>
                      </div>
                  <div>
              </form>
                