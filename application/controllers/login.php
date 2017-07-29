<?php
class login extends ci_controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('login');
	}

	function masuk(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	$cek = $this->login_model->cek($username,$password);
	if($cek->num_rows()==1){
		foreach($cek->result() as $c)
		{
			$sess_data['username']		=$c->username;
			$sess_data['nama_lengkap']	=$c->nama_lengkap;
			$sess_data['password']		=$c->password;
			$sess_data['last_login']	=$c->last_login;
			$sess_data['stts']			=$c->stts;
			$this->session->set_userdata($sess_data);

		}if($this->session->userdata('stts')=='admin')
			{
				$this->session->set_userdata(array('status_login'=>'oke'));
				redirect('admin');
			}


			if($this->session->userdata('stts')=='karyawan'){			
				$this->session->set_userdata(array('status_login'=>'oke'));
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan')
			{
				$this->session->set_userdata(array('status_login'=>'oke'));
				redirect('pelanggan');			
			}
			


	}
	else
			{
				$this->session->set_flashdata('info',
					'<div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                     Maaf username atau passwordnya salah
                  </div>');


				$this->load->view('login');
			}


	}





	function keluar(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

?>