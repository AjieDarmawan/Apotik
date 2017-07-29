<?php
class model_pelanggan extends ci_model{

	function lihat(){
		return $this->db->get('pelanggan');
	}

	function insert($kode){
		$data=array('nama_pelanggan'	=>$this->input->post('nama_pelanggan'),
					'kode_pelanggan'	=>$kode,
					'alamat'			=>$this->input->post('alamat'),
					'no_hp'				=>$this->input->post('no_tlpn'),
					'tgl_daftar'		=>$this->input->post('daftar'),
					'jenis_kelamin'		=>$this->input->post('gender'),
					'pekerjaan'			=>$this->input->post('pekerjaan'),

			);
		$this->db->insert('pelanggan',$data);
	}
	function insertlogin(){
		$data=array('username'			=>$this->input->post('nama_pelanggan'),
					'nama_lengkap'		=>$this->input->post('nama_pelanggan'),
					'password'			=>$this->input->post('nama_pelanggan'),
					'last_login'		=>'',
					'stts'				=>'pelanggan');
		$this->db->insert('login',$data);

	}
	function edit(){
		$data=array('nama_pelanggan'	=>$this->input->post('nama_pelanggan'),
					'alamat'			=>$this->input->post('alamat'),
					'no_hp'				=>$this->input->post('no_tlpn'),
					'jenis_kelamin'		=>$this->input->post('gender'),
					'pekerjaan'			=>$this->input->post('pekerjaan'),

			);
		$this->db->where('id_pelanggan',$this->input->post('id'));
		$this->db->update('pelanggan',$data);	
	}
	
}
?>