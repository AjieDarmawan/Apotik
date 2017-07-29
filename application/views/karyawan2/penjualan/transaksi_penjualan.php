<h3>Laporan Transaksi</h3>
<?php
echo form_open('admin/tp2');
?>
<table class="table table-bordered">
    <tr><td>
            <div class="col-sm-2">
                <input type="text" name="tanggal1" class="form-control" placeholder="Tanggal Mulai">
            </div>
            <div class="col-sm-2">
                <input type="text" name="tanggal2" class="form-control" placeholder="Tanggal Selesai">
            </div>
   </td></tr>
    <tr><td><button type="submit" class="btn btn-primary btn-sm" name="submit">Proses</button></td></tr>
 </table>
</form>
<hr>
<table class="table table-bordered">
    <tr><td>No</td><td>Tanggal Transaksi</td><td>Total Transaksi</td></tr>
    <?php
    $no=1;
    $total=0;
    foreach($tp->result() as $t ){
    	echo "<tr><td>".$no++."</td>
    			<td>$t->tanggal</td>
    			<td>$t->total_bayar</td>
    			
    		</tr>";
    		 $total=$total+($t->total_bayar);
    }
    ?>
    <tr><td colspan="2">Total</td><td><?="<strong>$total</strong>";?></td></tr>
    
</table>
