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
      alert('Masukan kode tidak boleh kosong');
      return false;
    }
   
        if(nama_obat==''){
          alert('Masukan nama_obat tidak boleh kosong');
          return false;
        }
    
                if(harga==''){
                  alert('Masukan harga tidak boleh kosong');
                  return false;
                }
                    if(stock==''){
              alert('Masukan stock tidak boleh kosong');
              return false;
            }


                    else{
                      alert('Data berhasil diedit');
                    }


}
</script>
<div id="fform">
        <?php
         echo  form_open('admin/supplayedit',array('name'=>'form3'));
         ?>

         <div id ="form" class="form-horizontal form-label-left" novalidate="">                              
                      <span class="section">Edit Data Supplay Masuk </span>
                      <input type="hidden" name="id" value="<?=$supplay['no']?>"></input>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penerima(karywan)<span class="required">*</span>
                        </label>  
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="karyawan" id="kode" class="form-control" >
                            <?php
                              foreach($karyawan as $k){
                                echo "<option value='$k->id_karyawan'";
                                echo  $supplay['id_karyawan']==$k->id_karyawan?'selected':'';
                                echo">$k->nama_karyawan</option>";
                              }

                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Obat<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="obat" id="obat" class="form-control" >
                              <?php
                              foreach($obat as $k){
                                echo "<option value='$k->id_obat'";
                                echo  $supplay['id_obat']==$k->id_obat?'selected':'';
                                echo ">$k->nama_obat</option>";
                              }

                            ?>
                          </select>
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Supplier<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="supplier" id="obat" class="form-control">
                            <?php
                              foreach($s as $k){
                                echo "<option value='$k->id_supplier'";
                                echo $supplay['id_supplier']==$k->id_supplier?'selected':'';
                                echo ">$k->nama_supplier</option>";
                              }

                            ?>
                          </select>
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah stock masuk<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="number" id="stock"  name="stock" required value="<?=$supplay['jumlah_obat']?>"  placeholder="jumlah Stock" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Harga<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="number" id="harga" value="<?=$supplay['harga_']?>" name="harga" required  placeholder="jumlah Stock" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        <?=anchor('admin/supplay','Kembali',array('class'=>'btn btn-sm btn-success'))?>
                        <button type="submit" name="submit" onclick="validasi()" class="btn btn-success btn-sm">Masuk</button>
                        </div>
                      </div>
                  <div>
              </form>
         </div>       