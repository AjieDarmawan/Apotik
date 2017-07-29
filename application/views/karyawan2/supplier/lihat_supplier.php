

               

                  <div class="x_content">                    
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">No</th>
                            <th class="column-title">Nama Supplier</th>
                            <th class="column-title">Alamat</th> 
                            <th class="column-title">Kota</th>
                            <th class="column-title">No_tlpon</th>
                                
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php
                        $no=1;
                        foreach ($supplier->result() as $s){
                          echo"<tr>
                            <td>".$no++."</td>
                               <td>$s->nama_supplier</td>
                               <td>$s->alamat</td>
                               <td>$s->kota</td>
                               <td>$s->no_tlpn</td>
                              
                              
                                    
                          </tr>";

                        }?>
                       </tbody>

                      </table>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>