
                <?=anchor('admin/pelanggantambah','<i class=" fa fa-desktop ">Tambah pelanggan</i>',array('class'=>'btn btn-primary btn-sm'))?>

                  <div class="x_content">                    
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">No</th>
                            <th class="column-title">Nama Pelanggan</th>
                            <th class="column-title">Kode Pelanggan</th>           
                            <th class="column-title">Tgl Daftar</th>
                            <th class="column-title">alamat</th>
                            <th class="column-title">Jenis Kelamin</th>
                            <th class="column-title">Pekerjaan </th>
                            <th class="column-title">No hp</th>
                            <th colspan="3" class="column-title no-link last"><span class="nobr"><center>Action</center></span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php
                        $no=1;
                          foreach($pelanggan->result()as $p){
                            echo "<tr>
                                <td>".$no++."</td>
                                <td>$p->nama_pelanggan</td>
                                <td>$p->kode_pelanggan</td>
                                <td>$p->tgl_daftar</td>
                                <td>$p->alamat</td>
                                <td>$p->jenis_kelamin</td>
                                <td>$p->pekerjaan</td>
                                <td>$p->no_hp</td>
                                <td>".anchor('admin/pelanggandetail/'.$p->id_pelanggan,'<i class="fa fa-eye">Detail',array('class'=>'btn btn-success btn-sm'))."</td>
                                <td>".anchor('admin/pelangganedit/'.$p->id_pelanggan,'<span class="glyphicon glyphicon-tags"> Edit',array('class'=>'btn btn-danger btn-sm'))."</td>
                                <td>".anchor('admin/pelangganhapus/'.$p->id_pelanggan,'<i class="fa fa-trash-o"> Hapus',array('class'=>'btn btn-primary btn-sm'))."</td>
                                  </tr>";
                          }
                        ?>
                       
                       </tbody>

                      </table>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>