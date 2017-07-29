<script type="text/javascript">
   function validasi(){
    var identitas = $("#identitas").val();
    var nama_resep = $("#nama_resep").val();
    var nama_obat = $("#nama_obat").val();
   
    if(identitas==''){
      alert('Masukan identitas tidak boleh kosong');
      return false;
    }
    if(nama_resep==''){
      alert('Masukan nama_resep tidak boleh kosong');
      return false;
    }


    if(nama_obat==''){
      alert('Masukan nama_obat tidak boleh kosong');
      return false;
    }else{
      alert('Data berhasil ditambah');
    }


}
</script>

<?php
         echo form_open('admin/reseptambah');
         ?>
         <div class="form-horizontal form-label-left" novalidate="">                              
                      <span class="section">Tambah Data Resep </span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Identitas resep<span class="required">*</span>
                        </label>  
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  id="identitas" name="no" required placeholder="Masukan identitas resep" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Resep<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_resep" name="nama_resep" required  placeholder="Nama Resep" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Obat<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="j" class="form-control">
                               <?php
                               foreach($obat->result() as $o){
                                echo "<option value='$o->id_obat'>$o->nama_obat</option>";
                               }
                                
                               ?>
                            
                          </select>
                        </div>
                      </div>
                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Jenis Obat<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="jenis" class="form-control">
                              <option value=''>-pilih jenis obat-</option>
                              <option value="Kapsul">Kapsul</option>
                              <option value="Tablet">Tablet</option>
                              <option value="Cair">Cair</option>
                              <option value="dll">dll</option>
                                                         
                          </select>


                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        <?=anchor('admin/resep','Kembali',array('class'=>'btn btn-sm btn-success'))?>
                        <button type="submit" name="submit" onclick="validasi()" class="btn btn-success btn-sm">Masuk</button>
                        </div>
                      </div>
                  <div>
              </form>
                