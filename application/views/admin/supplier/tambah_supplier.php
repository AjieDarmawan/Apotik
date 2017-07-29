<style type="text/css">
  #form{
    text-align: center;
      }

</style>


<script type="text/javascript">

   function validasi(){
    var kode      = $("#kode").val();
    var nama_obat = $("#nama_obat").val();
    var harga     = $("#harga").val();
    var stock     = $("#stock").val();
    var abjad     = /^[a-z A-Z]+$^/;
    var number    = /^[0-9]+$/;

   
   
    if(kode==''){
      alert('Masukan nama_supplier tidak boleh kosong');
      return false;
    }
   
        if(nama_obat==''){
          alert('Masukan Alamat tidak boleh kosong');
          return false;
        }
    
                if(harga==''){
                  alert('Masukan kota tidak boleh kosong');
                  return false;
                }
                   


                    else{
                      alert('Data berhasil ditambah');
                    }


}
</script>
<div id="fform">
        <?php
         echo  form_open('admin/suppliertambah',array('name'=>'form3'));
         ?>

         <div id ="form" class="form-horizontal form-label-left" novalidate="">                              
                      <span class="section">Tambah Data Supplier </span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Supplier<span class="required">*</span>
                        </label>  
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kode" name="nama_supplier" required placeholder="Masukan nama_supplier" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Alamat<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_obat" pattern="[a-z A-Z]+$" name="alamat" 
                            required pattern="[0-9]+$" oninvalid="this.setCustomValidity('input hanya boleh huruf a-z tanpa spasi')" 
                            placeholder="Alamat" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kota<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="text"  id="harga" name="kota" required  placeholder="Kota" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">no_telpon<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="number" id="stock"  name="no_telpon" required  placeholder="no telpon" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                    
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        <?=anchor('admin/Supplier','Kembali',array('class'=>'btn btn-sm btn-success'))?>
                        <button type="submit" name="submit" onclick="validasi()" class="btn btn-success btn-sm">Masuk</button>
                        </div>
                      </div>
                  <div>
              </form>
         </div>       