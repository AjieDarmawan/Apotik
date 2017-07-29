
                                  <?php
                                    echo form_open('admin/karyawancari');
                                    ?>
                                        <div class="input-group">
                                            <input type="text" name="keyword" requuired class="form-control" placeholder="Pencarian ...">
                                            <span class="input-group-btn">
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm text-muted"> 
                                                                             <i class="fa fa-search"></i></button>
                                        <?=anchor('admin/karyawan','Refresh',array('class'=>'btn btn-sm btn-primary'))?>

                                                
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
                            <th class="column-title">Kota</th>
                            <th class="column-title">no telepon</th>
                            <th class="column-title">Jenis Kelamin</th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Alamat</th>
                            <th colspan="2" class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
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
                            <td >$k->kota</td>
                            <td >$k->no_telpon</td>
                            <td >$k->gender</td>
                            <td >$k->status</td>
                            <td >$k->alamat</td>
                            <td>".anchor("admin/karyawanedit/".$k->id_karyawan,
                           "<span class=' glyphicon glyphicon-tags'> Edit</span>",array('title'=>'edit data'))."</td>
                             <td width='10%'>".anchor('admin/karyawanhapus/'.$k->id_karyawan,
                          "<span class=' glyphicon glyphicon-trash'> Delete</span>",array('title'=>'delete data'))."</td>
                          </tr>";$no++;
                          }?>

                       </tbody>

                      </table>
                     <?=$paging?>
                    </div>
                  </div>
                </div>
              </div>
            </div>