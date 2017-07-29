

</script>
<?php echo $this->session->flashdata('save_akun');?>
<?php
         echo form_open('admin/simpanpassword');
         ?>
         <div class="form-horizontal form-label-left" novalidate="">                              
                      <span class="section">Ganti Password</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Password lama<span class="required">*</span>
                        </label>  
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="nama" name="lama" required placeholder="Password Lama" class="form-control col-md-7 col-xs-12">
                        </div>
                     
                      </div>
                    
                      <div class="item form-group">
                        <label class="control-label col-md-3">Password Baru</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="no_tlpn" type="password" name="baru" required   placeholder="Password Baru" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3">Ulangi Password Baru</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="no_tlpn" type="password" name="ulangi" required   placeholder="Ulangi Password" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>
                 
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        
                        <button type="submit" name="submit" onclick="tes()" class="btn btn-success btn-sm">Masuk</button>
                        </div>
                      </div>
                  <div>
              </form>
                