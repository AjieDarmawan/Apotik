<?php
class Apotik_model extends ci_Model
{
	public function getLoginData($u,$p)
	{
		
		$q_cek_login = $this->db->get_where('login',array('username'=>$u,'password'=>$p));
		
		if(count($q_cek_login->result())>0)
		{
			foreach($q_cek_login->result() as $qck)
			{
				if($qck->stts=='karyawan')
				{
					$q_ambil_data=$this->db->get_where('petugas',array('nama_karyawan'=>$u));
					foreach($q_ambil_data->result() as $qad)
					{
						$sess_data['logged_in'] 	= 'yes';
						$sess_data['nama_karyawan'] = $qad->nama_karyawan;
						$sess_data['alamat'] 	    = $qad->alamat;
						$sess_data['kota'] 		    = $qad->kota;
						$sess_data['stts'] 		    = 'karyawan';
						$sess_data['no_telpon'] 	= $qad->no_telpon;
						
						$this->session->set_userdata($sess_data);	
					}
					header('location:'.base_url('karyawan'));
				}else if($qck->stts=='member')
				{
				   $q_ambil_data=$this->db->get_where('pelanggan',array('nama_pelanggan'=>$u));
					foreach($q_ambil_data->result() as $qad)
					{
						$sess_data['logged_in'] 	 = 'yes';
						$sess_data['nama_pelanggan'] = $qad->nama_pelanggan;
						$sess_data['alamat'] 	     = $qad->alamat;
						$sess_data['jenis_kelamin']  = $qad->jenis_kelamin;
						$sess_data['pekerjaan'] 	 = $qad->pekerjaan;
						$sess_data['id_resep'] 	     = $qad->id_resep;
						$sess_data['stts'] 		     = 'pelanggan';
						
						$this->session->set_userdata($sess_data);	
					}
					header('location:'.base_url('member'));
				}else if($qck->stts=='member')
				{
					 $q_ambil_data=$this->db->get_where('login',array('username'=>$u));
					foreach($q_ambil_data->result() as $qad)
					{
						$sess_data['logged_in'] 	 	= 'yes';
						$sess_data['username'] 			= $qad->username;
						$sess_data['nama_lengkap'] 	    = $qad->nama_lengkap;
						$sess_data['password']  		= $qad->password;
						$sess_data['last_login'] 	 	= $qad->last_login;
						$sess_data['stts'] 		     	= 'admin';
						
						$this->session->set_userdata($sess_data);
					}
					header('location:'.base_url('admin'));
				}	
			}			
	
		}
	}

}
?>