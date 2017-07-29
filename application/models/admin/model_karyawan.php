<?php
class model_karyawan extends ci_model{

	function select_all($halaman,$batas){
		//return $this->db->query("select * from karyawan limit $halaman, $batas");
		return $this->db->query("select * from karyawan limit $halaman,$batas");
  
	}

	function lihat(){
		return $this->db->get('karyawan');
	}
	function tambah(){
		$data=array('nama_karyawan'=>$this->input->post('nama'),
			'tgl_masuk'=>$this->input->post('tgl_masuk'),
			'alamat'=>$this->input->post('alamat'),
			'gender'=>$this->input->post('gender'),
			'kota'=>$this->input->post('kota'),
			'status'=>$this->input->post('status'),
			'no_telpon'=>$this->input->post('no_tlpn')
			);
		$this->db->insert('karyawan',$data);
	}

	
	function tambahuser(){
		$data=array('username'=>$this->input->post('nama'),
			'nama_lengkap'=>$this->input->post('nama'),
			'password'=>$this->input->post('nama'),
			'last_login'=>'',
			'stts'=>'karyawan',
			
			);
		$this->db->insert('login',$data);
	}

	function edit(){
		$data=array('nama_karyawan'=>$this->input->post('nama'),
			'tgl_masuk'=>$this->input->post('tgl_masuk'),
			'alamat'=>$this->input->post('alamat'),
			'gender'=>$this->input->post('gender'),
			'kota'=>$this->input->post('kota'),
			'status'=>$this->input->post('status'),
			'no_telpon'=>$this->input->post('no_tlpn')
			);

		 $this->db->where('id_karyawan',$this->input->post('id'));
	     $this->db->update('karyawan',$data);
	}
	function cari($halaman,$batas){
		$keyword=$this->input->post('keyword');
		$sql="SELECT * FROM karyawan WHERE nama_karyawan like '%$keyword%' limit $halaman,$batas";
		return $this->db->query($sql);
	}
}
?>