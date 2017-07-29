 <?php
                                    echo form_open('karyawan/resepcari');
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
                            <th class="column-title">No Resep</th>
                            <th class="column-title">Nama Resep</th>
                            <th class="column-title">Nama Obat</th>
                            <th class="column-title">Jenis obat</th>           
                          
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php
                     $no=1;
                        foreach ($resep as $r){
                      echo"<tr class='even pointer'>
                      
                            <td>$no</td>
                            <td>$r->no_resep</td>
                            <td>$r->nama_resep</td>
                            <td>$r->nama_obat</td>
                            <td>$r->jenis_obat</td>";  
                      ?>                            
                    <?php

                     echo"</tr>";$no++;
                          }?>

                       </tbody>

                      </table>
                      <?= $paging ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>