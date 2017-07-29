<style type="text/css">
	#fform #hasil{
		background: #011010;
	}
</style>
<script src="<?=base_url()?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<!--<body onLoad="load_add_temp()"></body>
<script type="text/javascript">
	function load_add_temp()
	{
		$.ajax({
			type:"GET",
			url:"penjualantampil",
			data:"",
			success:function(html){
				$("#list").html(html);
			}
		});
	}

	 function beli(){
	 	var jumlah     = $("#idjml").val();
	 	var nama_obat  = $("#idnama_obat").val();
	 	var petugas    = $("#idpetugas").val();
	 	var resep      = $("#idresep").val();
	 	var pelanggan  = $("#idpelanggan").val();
		$.ajax({
        type:"GET",
        url:"penjualanbeli",
        data:"jumlah="+jumlah+"&nama_obat="+nama_obat+"&petugas="+petugas+"&resep="+resep+"&pelanggan="+pelanggan,
        success:function(html){
            alert('transaksi berhasil');
           load_add_temp();
            
        }
    })

		}

	 function selesai(){
	 	var jumlah     = $("#idjml").val();	 	
	 	$.ajax({
	 		type:"POST",
	 		url:"penjualanselesai",
	 		data:"jumlah="+jumlah,
	 		success:function(html){
	 			alert('Terimakasih');
	 			
	 		}
	 	});
	 	
	 }
	
</script>-->
<script type="text/javascript">
	function tes(){
		var total=$("#total").val();
		$.ajax({
			type:"POST",
			url:"penjualanselesai",
			data:"total="+total,
			success:function(html){
				alert ('Terimakasih');
			}
		});
	}

</script>
<style type="text/css">
	.tes{
		color: Black;
	}
	#cek{
		margin-left: 100px;
		text-align: center;
		word-spacing: 20px;

	}
</style>


 						<?php
							echo form_open('admin/penjualancari');
 						?>	
					 	<input type="text"  name="cari" placeholder="Masukan Kode Pelanggan">
					 	<button type="submit" name="submit" class="btn btn-sm btn-primary">Cari Pelanggan</button>
					   </form>


					   
<h3><p align="center">Form Transaksi Penjualan</p></h3>

	<?php
	echo form_open('admin/penjualan');
	?>
	<table class="table table-stripped">
		<tr>
			<td>Nama Obat<td>
			<td width='90%'>
				<select name='nama_obat' id="idnama_obat" class="form-control">
					<?php
						foreach($obat->result() as $l){
							echo "<option value='$l->id_obat'>$l->nama_obat</option>";
						}
					?>
				</select>
             </td>
		</tr>
			<tr>
				<td>Jumlah Beli<td>
				<td width='90%'>
					<input type="number" id="idjml" name="jumlah" class="form-control" required placeholder="Jumlah Yang dibeli " class="form-control col-md-7 col-xs-12">
             </td>
			</tr>
			   <tr>
				 <td>Pelanggan<td>
				 <td><input type="radio" checked id="idpelanggan" name="pelanggan" value="Pelanggan">Pelanggan
				 	 <input type="radio" id="idpelanggan" name="pelanggan" value="Bukan Pelanggan">Bukan Pelanggan</td>
				
					 	 
				 
			  </tr>
				<tr>
					<td>Jenis Obat<td>
					<td width='90%'>
					<select name='resep' id="idresep" class="form-control">
					<?php
						foreach($resep->result() as $r){
							echo "<option value='$r->id_resep'>$r->jenis_obat</option>";
						}
					?>
				</select>                                                       
					 </td>
	           </tr>	  		
			  		<tr>
				 		<td>Petugas<td>
				 		<td width="60%"><select name="petugas" id="idpetugas" class="form-control">
				 			
				 			<option value'Marjanah'>Marjanah</option>
				 			<option value'Romlah'>Romlah</option>		
				 		</select></td>
			  		</tr>
					  		<tr><td></td>
					  		<td colspan="2">
					  			<button type="submit"  name="submit"  class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o">Beli</i></button>
					  		
					  		
					  		</td></tr>
					  	</table>
<blink><p align="center">Pelanggan Mendapatkan diskon 10%</p></blink>



<table>
			<table class='table table-striped jambo_table bulk_action'>
                        <thead>
                          <tr class='headings'>
                           
                            <th class='column-title'>No</th>
                            <th class='column-title'>Nama Obat</th>
                            <th class='column-title'>Jumlah</th>
                            <th class='column-title'>Tanggal</th>
                            <th class='column-title'>Konsumen</th>
                            <th class='column-title'>Jenis obat</th>
                            <th class='column-title'>harga</th>
                            <th class='column-title'>Total</th>
                            <th class='column-title'>Total Bayar</th>           
                            <th class='column-title'>Action</th>
 
                          </tr>
                        </thead>
                        <?php
                        $no=1;
                        $tes=0;
                        foreach($lihat as $l){
 
					echo"<tr><td>$no</td>
                     		<td>$l->nama_obat</td>
                     		<td>$l->jumlah</td>
                     		<td>$l->tanggal</td>
                     		<td>$l->jenis_pelanggan</td>
                     		<td>$l->jenis_obat</td>
                     		<td>$l->harga</td>"; 
                     		$Total=$l->harga*$l->jumlah;                     		 
                     	echo"<td>$Total</td>";
                     		$pel=$l->jenis_pelanggan;
                     		$diskon='0.9%';
                     		if($pel=='Pelanggan'){
                     			$hasil =$Total*$diskon;
                     			
                     		}else{
                     			$hasil=$Total;
                     		}
                     	echo"<td id='hasil'>$hasil</td>
                     		<td>".anchor("admin/penjualanhapus/".$l->id_penjualan,'Hapus',array('onclick'=>'return confirm("Yakin ingin dihapus?")','class'=>"glyphicon glyphicon-trash"))."</td>";
                     	$tes=$tes+($hasil);
                     	?>  	
                    <?="</tr>";$no++;}?>
                  	 <tr><td colspan="8"><p align="right">Total Yang dibayar </p></td><td class="tes"><?="<strong>$tes</strong>"?></td></tr>
                  	</form>

                  	 <?php
                  	 echo form_open('admin/penjualanselesai','selesai');
                  	 ?>
                  	 <input type="hidden" name="total" value=<?=$tes?>></input>
                  	 <button type="submit" id="cek" class="btn btn-sm btn-danger"<i class="fa fa-pencil-square-o">Selesai</button>
	                 </form>
	                 





