<?php
class model_resep extends ci_model{

	function select_all($halaman,$batas){
		//return $this->db->query("select * from karyawan limit $halaman, $batas");
		return $this->db->query("select r.*,o.nama_obat
			 from resep as r, obat as o
			 where r.id_obat = o.id_obat
			 limit $halaman,$batas");
  
	}

	function lihat(){
		return $this->db->get('resep');
	}
	function tambah(){
		$data=array('no_resep'=>$this->input->post('no'),
			'nama_resep'=>$this->input->post('nama_resep'),
			'id_obat'=>$this->input->post('j'),
			'jenis_obat'=>$this->input->post('jenis'),
			
			);
		$this->db->insert('resep',$data);
	}

	function test($id){
		return $this->db->get_where('resep',array('id_resep'=>$id))->row_array();
	}
		
	

	function edit(){
		$data=array('no_resep'=>$this->input->post('no'),
			'nama_resep'=>$this->input->post('nama_resep'),
			'id_obat'=>$this->input->post('j'),
			'jenis_obat'=>$this->input->post('jenis'),
			
			);

		 $this->db->where('id_resep',$this->input->post('id'));
	     $this->db->update('resep',$data);
	}
	function cari($halaman,$batas){
		$keyword=$this->input->post('keyword');
		//return $this->db->query("select * from karyawan limit $halaman, $batas");
		return $this->db->query("select r.*,o.nama_obat
			 from resep as r, obat as o
			 where r.id_obat = o.id_obat and  nama_resep like '%$keyword%'
			 limit $halaman,$batas");
  
	}
}
?>