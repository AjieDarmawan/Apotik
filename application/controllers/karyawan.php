<?php
class karyawan extends ci_controller{

	function __construct(){
		parent:: __construct();
		$this->load->model(array('login_model','karyawan/model_karyawan','karyawan/model_resep',
			'karyawan/model_pelanggan','karyawan/obat_model','karyawan/model_supplier',
			'karyawan/model_supplay','karyawan/model_penjualan'));
			cek_session();
			
	}

	function index(){
		$d['username'] = $this->session->userdata('username');
		$this->template->load('karyawan2/template','karyawan2/dashboard',$d);

		if($this->session->userdata('stts')=='admin'){				
				redirect('admin');	
			}
			if($this->session->userdata('stts')=='karyawan'){								
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');	
			}
		
		//$this->load->view('template');
		
	}
	function karyawan(){
			if($this->session->userdata('stts')=='admin'){				
				redirect('admin');	
			}
			if($this->session->userdata('stts')=='karyawan'){								
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');	
			}
			$data['username']=$this->session->userdata('username');
		    $this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/karyawan/karyawan/';
            $config['total_rows'] = $this->model_karyawan->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);
            
            $halaman = $halaman==''?0:$halaman;
		$data['karyawan']=$this->model_karyawan->select_all($halaman,$config['per_page'])->result();
		$this->template->load('karyawan2/template','karyawan2/karyawan/lihat_karyawan',$data);
	}
		function karyawancari(){
				if($this->session->userdata('stts')=='admin'){				
				redirect('admin');	
			}
			if($this->session->userdata('stts')=='karyawan'){								
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');	
			}
			$data['username']=$this->session->userdata('username');
			$this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/karyawan/karyawancari/';
            $config['total_rows'] = $this->model_karyawan->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);          
            $halaman = $halaman==''?0:$halaman;
		$data['karyawan']=$this->model_karyawan->cari($halaman,$config['per_page'])->result();
		$this->template->load('karyawan2/template','karyawan2/karyawan/cari_karyawan',$data);
	}
	function resep(){
			if($this->session->userdata('stts')=='admin'){				
				redirect('admin');	
			}
			if($this->session->userdata('stts')=='karyawan'){								
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');	
			}
		$data['username']=$this->session->userdata('username');
		   $this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/karyawan/resep/';
            $config['total_rows'] = $this->model_resep->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);
            
            $halaman = $halaman==''?0:$halaman;
		$data['resep']=$this->model_resep->select_all($halaman,$config['per_page'])->result();
		$this->template->load('karyawan2/template','karyawan2/resep/lihat_resep',$data);
	}
	function resepcari(){
		$data['username']=$this->session->userdata('username');
		   $this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/karyawan/resep/';
            $config['total_rows'] = $this->model_resep->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);
            
            $halaman = $halaman==''?0:$halaman;
		$data['resep']=$this->model_resep->cari($halaman,$config['per_page'])->result();
		$this->template->load('karyawan2/template','karyawan2/resep/cari_resep',$data);
	}
	function pelanggan(){
			if($this->session->userdata('stts')=='admin'){				
				redirect('admin');	
			}
			if($this->session->userdata('stts')=='karyawan'){								
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');	
			}
		$data['pelanggan']  = $this->model_pelanggan->lihat();
		$data['username']   = $this->session->userdata('username');	
	    $this->template->load('karyawan2/template','karyawan2/pelanggan/lihat_pelanggan',$data);	
	}
	function pelanggantambah(){
		$this->load->helper('string');
		$kode=random_string('alnum', 8);
		if(isset($_POST['submit']))
		{
			$this->model_pelanggan->insert($kode);
			$this->model_pelanggan->insertlogin();
			redirect('karyawan/pelanggan');

		}else{
		$data['username']   = $this->session->userdata('username');	
	    $this->template->load('karyawan2/template','karyawan2/pelanggan/tambah_pelanggan',$data);	
		}
	}
	function pelanggandetail(){
			$id=$this->uri->segment(3);
			$data['pelanggan']	= $this->db->get_where('pelanggan',array('id_pelanggan'=>$id))->row_array();
			$data['username']   = $this->session->userdata('username');	
			$this->template->load('karyawan2/template','karyawan2/pelanggan/detail_pelanggan',$data);	
		
	}	function obat(){
			if($this->session->userdata('stts')=='admin'){				
				redirect('admin');	
			}
			if($this->session->userdata('stts')=='karyawan'){								
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');	
			}
			$data['username']=$this->session->userdata('username');
			$this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/karyawan/obat/';
            $config['total_rows'] = $this->obat_model->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);
            
            $halaman = $halaman==''?0:$halaman;
		$data['obat']=$this->obat_model->select_all($halaman,$config['per_page'])->result();
		$this->template->load('karyawan2/template','karyawan2/obat/lihat_obat',$data);
	}
	function obatcari(){
			$data['username']=$this->session->userdata('username');
			$this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/karyawan/obatcari/';
            $config['total_rows'] = $this->obat_model->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);
            
            $halaman = $halaman==''?0:$halaman;
		$data['obat']=$this->obat_model->cari($halaman,$config['per_page'])->result();
		$this->template->load('karyawan2/template','karyawan2/obat/cari_obat',$data);
	}
	function supplier()
	{
			if($this->session->userdata('stts')=='admin'){				
				redirect('admin');	
			}
			if($this->session->userdata('stts')=='karyawan'){								
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');	
			}
		$data['supplier']   = $this->model_supplier->lihat();
		$data['username']	= $this->session->userdata('username');	
		$this->template->load('karyawan2/template','karyawan2/supplier/lihat_supplier',$data);
	}

	function supplay(){
			if($this->session->userdata('stts')=='admin'){				
				redirect('admin');	
			}
			if($this->session->userdata('stts')=='karyawan'){								
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');	
			}
		$data['supplay']   = $this->model_supplay->select_all();
		$data['username']  = $this->session->userdata('username');	
		$this->template->load('karyawan2/template','karyawan2/Supplay/lihat_supplay',$data);
	}
	function supplaytambah(){
		if(isset($_POST['submit'])){
			$this->model_supplay->insert();
			
			redirect('karyawan/supplay');
		}else{
		$data['karyawan']   = $this->model_karyawan->lihat()->result();
		$data['obat']       = $this->obat_model->lihat()->result();
		$data['s']          = $this->model_supplier->lihat()->result();
		$data['username']	= $this->session->userdata('username');	
		$this->template->load('karyawan2/template','karyawan2/Supplay/tambah_supplay',$data);
		}
	}	
	function Penjualan(){
			if($this->session->userdata('stts')=='admin'){				
				redirect('admin');	
			}
			if($this->session->userdata('stts')=='karyawan'){								
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');	
			}

		if(isset($_POST['submit']))
		{
			 $this->model_penjualan->insert();

			   redirect('karyawan/penjualan');
			}else
		{
			$data['resep']	 	=$this->model_resep->lihat();
			$data['obat']	 	=$this->obat_model->lihat();
			$data['lihat']	 	=$this->model_penjualan->lihat()->result();
			$data['penjualan']	=$this->model_penjualan->select_all();
			$data['username']	=$this->session->userdata('username');
			$this->template->load('karyawan2/template','karyawan2/penjualan/lihat_penjualan',$data);
		}
	}
	function penjualanhapus(){
		$id=$this->uri->segment(3);
		$this->db->where('id_penjualan',$id);
		$this->db->delete('penjualan');
		redirect('karyawan/penjualan');
	}

	function penjualancari(){
			$this->model_penjualan->cari();
			$data['username']	=$this->session->userdata('username');
			$data['pelanggan']  = $this->model_pelanggan->lihat();			
			$this->template->load('karyawan2/template','karyawan2/pelanggan/cari_pelanggan',$data);
		


	}
	function penjualantampil()
	{
		echo "<table>
			<table class='table table-striped jambo_table bulk_action'>
                        <thead>
                          <tr class='headings'>
                           
                            <th class='column-title'>No</th>
                            <th class='column-title'>Nama Obat</th>
                            <th class='column-title'>Jumlah</th>
                            <th class='column-title'>Tanggal</th>
                            <th class='column-title'>Konsumen</th>
                            <th class='column-title'>Jenis obat</th>
                            <th class='column-title'>harga</th>
                            <th class='column-title'>Total</th>
                            <th class='column-title'>Total Bayar</th>           
                            <th class='column-title'>Action</th>
 
                          </tr>
                        </thead>";                        	 
             $data=$this->model_penjualan->lihat()->result();
                       $no=1;

				foreach($data as $l){

					echo"<tr><td>$no</td>
                     		<td>$l->nama_obat</td>
                     		<td>$l->jumlah</td>
                     		<td>$l->tanggal</td>
                     		<td>$l->jenis_pelanggan</td>
                     		<td>$l->jenis_obat</td>
                     		<td>$l->harga</td>"; 
                     		$Total=$l->harga*$l->jumlah;                     		 
                     	echo"<td>$Total</td>";
                     		$pel=$l->jenis_pelanggan;
                     		$diskon='0.9%';
                     		if($pel=='Pelanggan'){
                     			$hasil =$Total*$diskon;
                     			
                     		}else{
                     			$hasil=$Total;
                     		}
                     	echo"<td id='hasil'>$hasil</td>";?>
                     		<td><a href="<?= base_url('karyawan/penjualanhapus/'); echo "/".$l->id_penjualan;?>" 
                          class=" glyphicon glyphicon-trash" onclick="return confirm('Yakin ingin dihapus?') " > Hapus</a></td>

                    <?="</tr>";$no++;

                     		}	                         	 
	}
	function penjualanselesai()
	{
		$tanggal = date('y-m-d');
        $user    = $this->session->userdata('username');
        $id_op   = $this->db->get_where('operator',array('nama_operator'=>$user))->row_array();
        $total   = $this->input->post('total');
        $data    = array(
        			'tanggal'=>$tanggal,
        			'total_bayar'=>$total);
        $this->model_penjualan->update_status();
        $this->db->insert('penjualan_detail',$data); 
       redirect('karyawan/penjualan');
		
		 	
	}

	function gantipassword()
	{
		 		if($this->session->userdata('stts')=='admin'){				
				redirect('admin');	
			}
			if($this->session->userdata('stts')=='karyawan'){								
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');	
			}
			$data['username']   = $this->session->userdata('username');	
			$this->template->load('karyawan2/template','karyawan2/laporan/ganti',$data);	
	}

	public function simpanpassword(){
		$stts = $this->session->userdata('stts');
		if($stts=='karyawan')
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
						redirect('karyawan/gantipassword');
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
					redirect('karyawan/gantipassword');

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
				redirect('karyawan/gantipassword');
			}

		}
		$this->template->load('karyawan2/template','karyawan2/laporan/ganti',$data);
	}



}

?>