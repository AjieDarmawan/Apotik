<?php
class pelanggan extends ci_controller{
		function __construct(){
		parent:: __construct();
		$this->load->model(array('login_model','pelanggan/obat_model'));
		cek_session();
		
	}	

	
	function index(){

		$d['username'] = $this->session->userdata('username');
		$this->template->load('pelanggan/template','pelanggan/dashboard',$d);

			if($this->session->userdata('stts')=='admin')
			{
				$this->session->set_userdata(array('cek'=>'oke'));
				redirect('admin');
			}
			if($this->session->userdata('stts')=='karyawan'){			
				$this->session->set_userdata(array('cek'=>'oke'));
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan')
			{
				$this->session->set_userdata(array('cek'=>'oke'));
						
			}

		
		
	}

	function obat(){
			if($this->session->userdata('stts')=='admin')
			{
				redirect('admin');
			}
			if($this->session->userdata('stts')=='karyawan'){			
				redirect('karyawan');			
			}

			$data['username']=$this->session->userdata('username');
			$this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/pelanggan/obat/';
            $config['total_rows'] = $this->obat_model->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);
            
            $halaman = $halaman==''?0:$halaman;
		$data['obat']=$this->obat_model->select_all($halaman,$config['per_page'])->result();
		$this->template->load('pelanggan/template','pelanggan/obat/lihat_obat',$data);
	}
	function obatcari(){
		if($this->session->userdata('stts')=='admin')
			{
				redirect('admin');
			}
			if($this->session->userdata('stts')=='karyawan'){			
				redirect('karyawan');			
			}

			$data['username']=$this->session->userdata('username');
			$this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/pelanggan/obatcari/';
            $config['total_rows'] = $this->obat_model->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);
            
            $halaman = $halaman==''?0:$halaman;
		$data['obat']=$this->obat_model->cari($halaman,$config['per_page'])->result();
		$this->template->load('pelanggan/template','pelanggan/obat/cari_obat',$data);
	}

	function gantipassword()
	{		
	     	if($this->session->userdata('stts')=='admin')
			{
				redirect('admin');
			}
			if($this->session->userdata('stts')=='karyawan'){			
				redirect('karyawan');			
			}

		 
			$data['username']   = $this->session->userdata('username');	
			$this->template->load('pelanggan/template','pelanggan/ganti',$data);	
	}

	public function simpanpassword(){
		$stts = $this->session->userdata('stts');
		if($stts=='pelanggan')
		{
			$pass_lama = $this->input->post('lama');
			$pass_baru = $this->input->post('baru');
			$ulang     = $this->input->post('ulangi');
			$username  = $this->session->userdata('username');


			$cek=$this->db->get_where('login',array('password'=>$pass_lama));
				if($cek->num_rows()>0 )
			{
					if($pass_baru==$ulang)
					{
						$simpan=array('password'=>$pass_baru);
						$this->db->where('username',$username);
						$this->db->update('login',$simpan);
						$this->session->set_flashdata("save_akun","
						<div class='alert alert-info'>
										<button type='button' class='close' data-dismiss='alert'>
											<i class='icon-remove'></i>
										</button>
										<strong>Selamat!</strong>

										Anda berhasil mengubah password
										<br />
									</div>");
						redirect('pelanggan/gantipassword');
					}else
					{
						$this->session->set_flashdata("save_akun","
						<div class='alert alert-error'>
										<button type='button' class='close' data-dismiss='alert'>
											<i class='icon-remove'></i>
										</button>

										<strong>
											<i class='icon-remove'></i>
											Terjadi Kesalahan!
										</strong>

										Password yang Anda input tidak sama
										<br />
									</div>");
					redirect('pelanggan/gantipassword');

					}

				}
			else
			{
					$this->session->set_flashdata("save_akun","
				<div class='alert alert-error'>
										<button type='button' class='close' data-dismiss='alert'>
											<i class='icon-remove'></i>
										</button>

										<strong>
											<i class='icon-remove'></i>
											Terjadi Kesalahan!
										</strong>

										Password lama Anda salah, mohon periksa kembali password lama Anda
										<br />
									</div>");
				redirect('pelanggan/gantipassword');
			}

		}
		$this->template->load('pelanggan/template','pelanggan/ganti',$data);
	}




}

?>