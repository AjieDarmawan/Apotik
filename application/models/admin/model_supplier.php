<?php
class model_supplier extends ci_model
{
	function lihat(){
		return $this->db->get('supplier');
	}
	function insert(){
		$data=array('nama_supplier'=>$this->input->post('nama_supplier'),
			'alamat'=>$this->input->post('alamat'),
			'kota'=>$this->input->post('kota'),
			'no_tlpn'=>$this->input->post('no_telpon'),

			);
		$this->db->insert('supplier',$data);
	}
	function edit(){
		$data=array('nama_supplier'=>$this->input->post('nama_supplier'),
			'alamat'=>$this->input->post('alamat'),
			'kota'=>$this->input->post('kota'),
			'no_tlpn'=>$this->input->post('no_tlpn'),
			);
		
		$this->db->where('id_supplier',$this->input->post('id'));
		$this->db->update('supplier',$data);		

	}


}
?>