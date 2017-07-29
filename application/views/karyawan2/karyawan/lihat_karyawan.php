 <?php
                                    echo form_open('karyawan/karyawancari');
                                    ?>
                                        <div class="input-group">
                                            <input type="text" name="keyword" requuired class="form-control" placeholder="Pencarian ...">
                                            <span class="input-group-btn">
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm text-muted"> 
                                     <i class="fa fa-search"></i></button>
                                                
                                            </span>
                                        </div>
                                    </form>

               

                  <div class="x_content">                    
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">No</th>
                            <th class="column-title">Nama Karyawan</th>
                            <th class="column-title">Tgl_masuk</th>           
                            <th class="column-title">Kota</th>
                            <th class="column-title">no telepon</th>
                            <th class="column-title">Jenis Kelamin</th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Alamat</th>
                           
                            
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php
                        $no=1;
                        foreach ($karyawan as $k){
                      echo"<tr class='even pointer'>
                      
                            <td>$no</td>
                            <td >$k->nama_karyawan</td>
                            <td >$k->tgl_masuk</td>
                            <td >$k->kota</td>
                            <td >$k->no_telpon</td>
                            <td >$k->gender</td>
                            <td >$k->status</td>
                            <td >$k->alamat</td>
                            
                            
                          </tr>";$no++;
                          }?>

                       </tbody>

                      </table>
                      <?= $paging ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>