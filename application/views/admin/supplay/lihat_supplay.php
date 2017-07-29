

                <?=anchor('admin/supplaytambah','<i class=" fa fa-desktop ">Tambah Data</i>',array('class'=>'btn btn-primary btn-sm'))?>

                  <div class="x_content">                    
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">Tanggal</th>
                            <th class="column-title">karyawan</th>
                            <th class="column-title">Supplier</th> 
                            <th class="column-title">Nama obat</th>
                            <th class="column-title">jumlah </th>
                            <th class="column-title">harga</th>
                             <th class="column-title">Total</th>
                           

                                       
                          
                            
                            <th colspan="2" class="column-title no-link last"><span class="nobr"><p align="center">Action</p></span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                       <?php
                        foreach($supplay->result() as $s){
                          echo"<tr>
                            <td>$s->tanggal</td>
                            <td>$s->nama_karyawan</td>
                            <td>$s->nama_supplier</td>
                            <td>$s->nama_obat</td>
                            <td>$s->jumlah_obat</td>
                            <td>$s->harga_</td>
                            <td>".$s->harga_*$s->jumlah_obat."</td>
                           <td>".anchor("admin/supplayedit/".$s->no,
                           "<span class=' glyphicon glyphicon-tags'> Edit</span>",array('title'=>'edit data'))."</td>
                             <td width='10%'>".anchor('admin/supplayhapus/'.$s->no,
                          "<span class=' glyphicon glyphicon-trash'> Delete</span>",array('title'=>'delete data'))."</td>
                          </tr>";
                          }?>
                       
                       </tbody>

                      </table>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>