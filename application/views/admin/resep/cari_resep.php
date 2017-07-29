 <?php
                                    echo form_open('admin/resepcari');
                                    ?>
                                        <div class="input-group">
                                            <input type="text" name="keyword" requuired class="form-control" placeholder="Pencarian ...">
                                            <span class="input-group-btn">
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm text-muted"> 
                                     <i class="fa fa-search"></i></button>
                                      <?=anchor('admin/obat','Refresh',array('class'=>'btn btn-sm btn-primary'))?>
                                                
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
                          
                            
                            <th colspan="2" class="column-title no-link last"><span class="nobr"><p align="center">Action</p></span>
                            </th>
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
                            <td>$r->jenis_obat</td>
                            
                            <td>".anchor("admin/resepedit/".$r->id_resep,
                           "<span class=' glyphicon glyphicon-tags'> Edit</span>",array('title'=>'edit data'))."</td>";?>
                          <td><a href="<?= base_url('admin/resephapus/'); echo "/".$r->id_resep;?>" 
                          class=" glyphicon glyphicon-trash" onclick="return confirm('Yakin ingin dihapus?') " > Hapus</a></td>

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