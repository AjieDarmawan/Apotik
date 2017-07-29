<script type="text/javascript">
  function addbarang()
{
  var name = $('#nama').val();
  var tgl_masuk = $('#tgl_masuk').val();
  var kota = $('#kota').val();
  var no_tlpn = $('#no_tlpn').val();
  var alamat = $('#alamat').val();
  var number=/^[0-9]+$/;

      if(name==''){
        alert('Nama Tidak boleh kosong');
        $('#nama').focus();
        return false;
      }else if(tgl_masuk==''){
        alert('tgl_masuk Tidak boleh kosong');
        $('#tgl_masuk').focus();
        return false;
      }else if(kota==''){
        alert('kota Tidak boleh kosong');
        $('#kota').focus();
        return false;
      
      }
      else if(alamat==''){
              alert('alamat Tidak boleh kosong');
                $('#alamat').focus();
                 return false;
      }else{
        alert ('Data Berhasil di Edit');
      }
}
 
</script>


      
         <?php
         echo form_open('admin/karyawanedit');
         ?>
         <div class="form-horizontal form-label-left" novalidate="">                              
                      <span class="section">Edit Data karyawan</span>
                      <input type="hidden" name="id" value="<?=$karyawan['id_karyawan']?>"></input>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Lengkap<span class="required">*</span>
                        </label>  
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama" name="nama" required="required" placeholder="Masukan Nama Lengkap" 
                          class="form-control col-md-7 col-xs-12" value="<?=$karyawan['nama_karyawan']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tanggal Masuk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="tgl_masuk" name="tgl_masuk" placeholder="Tanggal Masuk" required="required" 
                          class="form-control col-md-7 col-xs-12" value="<?=$karyawan['tgl_masuk']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="radio" id="gender" checked name="gender" value="laki-laki" 
                          <?php if($karyawan['gender']=='laki-laki' )echo "checked='checked'" ?> >Laki-Laki</input>
                          <input type="radio" id="gender" name="gender" value="perempuan" <?php if($karyawan['gender']=='perempuan' )echo "checked='checked'" ?>>Perempuan</input>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kota<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kota" name="kota" required="required" 
                          placeholder="Masukan Kota Anda" class="form-control col-md-7 col-xs-12" value="<?=$karyawan['kota']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="radio" id="status" checked  name="status" value="Manager" <?php if($karyawan['status']=='Manager')echo "checked='checked'" ?>>Manager</input>
                          <input type="radio" id="status" name="status" value="Suverpaisor"<?php if($karyawan['status']=='Suverpaisor')echo "checked='checked'" ?>>Supervaisor</input>
                         <input type="radio" id="status" name="status" value="Karyawan"<?php if($karyawan['status']=='Karyawan')echo "checked='checked'" ?>>Karyawan</input>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3">no_tlpon</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="no_tlpn" type="text" name="no_tlpn"   
                          placeholder="Masukan No Telepon" class="form-control col-md-7 col-xs-12" required="required" value="<?=$karyawan['no_telpon']?>">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea type="text" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap" required="required" 
                          class="form-control col-md-7 col-xs-12"><?=$karyawan['alamat']?></textarea>
                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        <?=anchor('admin/karyawan','Kembali',array('class'=>'btn btn-sm btn-success'))?>
                        <button type="submit" name="submit" id="submit" onclick="addbarang()" class="btn btn-success btn-sm">Masuk</button>
                        </div>
                      </div>
                  <div>
              </form>
                