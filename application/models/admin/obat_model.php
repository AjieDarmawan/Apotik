<?php
class obat_model extends ci_model
{

	function select_all($halaman,$batas){	
		return $this->db->query("select o.*,s.nama_supplier
								from obat as o,supplier as s 
								where o.id_supplier=s.id_supplier
								limit $halaman, $batas");
	}

	function lihat()
	{
		return $this->db->get('obat');
	}

	function tambah()
	{
		$data=array ('Kode_obat' =>$this->input->post('kode_obat'),
					'nama_obat'  =>$this->input->post('nama_obat'),
					'harga'	     =>$this->input->post('harga'),
					'stock'      =>$this->input->post('stock'),
					'id_supplier'=>$this->input->post('supplier')
					);
		$this->db->insert('obat',$data);
	}

	function edit()
	{
		$data=array ('Kode_obat'  =>$this->input->post('kode_obat'),
					'nama_obat'  =>$this->input->post('nama_obat'),
					'harga'	     =>$this->input->post('harga'),
					'stock'      =>$this->input->post('stock'),
					'id_supplier'=>$this->input->post('supplier')
					);
		$this->db->where('id_obat',$this->input->post('id'));
		$this->db->update('obat',$data);
	}	

	function cari($halaman,$batas){	
		$keyword=$this->input->post('keyword');
		return $this->db->query("select o.*,s.nama_supplier
								from obat as o,supplier as s 
								where o.id_supplier=s.id_supplier and  nama_obat like '%$keyword%'
								limit $halaman, $batas");
	}

	
}
?>