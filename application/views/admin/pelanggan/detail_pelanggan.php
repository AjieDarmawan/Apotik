<h3>Detail Pelanggan</h3>
		<input type="hidden" name="id" value="<?=$pelanggan['id_pelanggan']?>"></input>
		<table class="table table-stripped">

		<tr>
			<td>Nama pelanggan<td>
			<td width='75%'><?=$pelanggan['nama_pelanggan']?></td>
		</tr>
		<tr>
			<td>Alamat<td>
			<td width='50%'><?=$pelanggan['alamat']?></td>
		</tr>
		<tr>
			<td>Kode pelanggan<td>
			<td width='50%'><?=$pelanggan['kode_pelanggan']?></td>
		</tr>
		<tr>
			<td>Tanggal Bergabung<td>
			<td width='50%'><?=$pelanggan['tgl_daftar']?></td>
		</tr>
		<tr>
			<td>jenis kelamin<td>
			<td width='50%'><?=$pelanggan['jenis_kelamin']?></td>
		</tr>
		<tr>
			<td>Pekerjaan<td>
			<td width='50%'><?=$pelanggan['pekerjaan']?></td>
		</tr>
			
	<?= anchor('admin/pelanggan','Kembali',array('class'=>'btn btn-sm btn-success'))?>