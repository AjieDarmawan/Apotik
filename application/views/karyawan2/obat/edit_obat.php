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
         echo  form_open('admin/obatedit');
         ?>

         <div id ="form" class="form-horizontal form-label-left" novalidate="">                              
                      <span class="section">Edit Data obat </span>
                      <input type="hidden" name="id" value="<?=$ob['id_obat']?>">?</input>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode obat<span class="required">*</span>
                        </label>  
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kode" name="kode_obat" 
                          value="<?=$ob['Kode_obat']?>" required placeholder="Masukan kode obat" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Obat<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_obat" value="<?=$ob['nama_obat']?>" pattern="[a-z A-Z]+$" name="nama_obat" 
                            required pattern="[0-9]+$" oninvalid="this.setCustomValidity('input hanya boleh huruf a-z tanpa spasi')" 
                            placeholder="Nama Obat" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="number"  id="harga" name="harga" required value="<?=$ob['harga']?>" placeholder="Masukan harga" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Stock<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="number" id="stock"  name="stock" required  value="<?=$ob['stock']?>" placeholder="jumlah Stock" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Nama Supllier<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="supplier" class="form-control">
                          <?php
                          foreach($supplier->result() as $s){
                            echo "<option value='$s->id_supplier'";
                            echo $ob['id_supplier']==$s->nama_supplier?'selected':'';
                            echo ">$s->nama_supplier</option>";
                          }
                          ?>
                       
                                                         
                          </select>


                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        <?=anchor('admin/obat','Kembali',array('class'=>'btn btn-sm btn-success'))?>
                        <button type="submit" name="submit" onclick="validasi()" class="btn btn-success btn-sm">Masuk</button>
                        </div>
                      </div>
                  <div>
              </form>
         </div>       