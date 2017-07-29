<?php
class model_penjualan extends ci_model{

	function select_all(){
		$this->db->get('penjualan');
	}
	
	function lihat(){
		$query="select penjualan.*,resep.jenis_obat,obat.nama_obat,obat.harga
				FROM penjualan  join resep on penjualan.id_resep=resep.id_resep
				join  obat on penjualan.id_obat=obat.id_obat and penjualan.status='0'
				";
			return $this->db->query($query);
	}

	function insert(){
		$diskon    = '0.9%';
		$nama_obat =$this->input->post('nama_obat');
		$jumlah	   =$this->input->post('jumlah');
		$petugas   =$this->input->post('petugas');
		$resep	   =$this->input->post('resep');
		$pelanggan =$this->input->post('pelanggan');
		$total     =$this->input->post('total');
				
				$data=array('id_obat'		=>$nama_obat,
							'jumlah'		=>$jumlah,
							'petugas'		=>$petugas,
							'jenis_pelanggan'=>$pelanggan,
							'tanggal'		=>date('Y-m-d'),
							'id_resep'		=>$resep,
							'status'=>'0',);
		$this->db->insert('penjualan',$data);
	}
	


	function cari(){
		$keyword	=	$this->input->post('cari');
		$sql        = "select * FROM pelanggan WHERE kode_pelanggan like '$keyword'";
		return $this->db->query($sql);
		
	}
	
	function update_status(){
	   
       $last_id = $this->db->query("select id_penjualan_detail from penjualan_detail order by id_penjualan_detail DESC")->row_array();
	   $this->db->query("update penjualan set status='1' where status='0'");
	}
	

}
?>