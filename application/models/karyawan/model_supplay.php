<?php
class model_supplay extends ci_model{

	function lihat(){
		$this->db->get('faktursupplay');
	}

	function select_all(){
	$query=("select faktursupply.* , karyawan.nama_karyawan,obat.nama_obat,supplier.nama_supplier
			FROM faktursupply join karyawan on faktursupply.id_karyawan=karyawan.id_karyawan
			join obat on faktursupply.id_obat=obat.id_obat 
			join supplier on faktursupply.id_supplier=supplier.id_supplier");
		return $this->db->query($query);

	}
	function insert(){
		$data=array('tanggal'		=>date('Y-m-d'),
					'id_supplier'	=>$this->input->post('supplier'),
					'id_obat'		=>$this->input->post('obat'),
					'id_karyawan'	=>$this->input->post('karyawan'),
					'harga_'		=>$this->input->post('harga'),
					'jumlah_obat'	=>$this->input->post('stock'),
					

			);
		$this->db->insert('faktursupply',$data);
	}

	function edit(){
		$data=array('id_supplier'	=>$this->input->post('supplier'),
					'id_obat'		=>$this->input->post('obat'),
					'id_karyawan'	=>$this->input->post('karyawan'),
					'harga_'		=>$this->input->post('harga'),
					'jumlah_obat'	=>$this->input->post('stock'),

			);
		$this->db->where('no',$this->input->post('id'));
		$this->db->update('faktursupply',$data);
	}

}

?>