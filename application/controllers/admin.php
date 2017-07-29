<?php
class Admin extends ci_controller{	
	
	function __construct(){
		parent:: __construct();
		$this->load->model(array('login_model','admin/model_karyawan','admin/model_resep',
			'admin/obat_model','admin/supplier_model','admin/model_penjualan','admin/model_pelanggan',
			'admin/model_supplier','admin/model_supplay'));
		cek_session();
		
	}
	function index2(){
		$d['username'] = $this->session->userdata('username');
		$this->load->view('template',$d);
	}

	function index(){
		$d['username'] = $this->session->userdata('username');
		$this->template->load('admin/template','admin/dashboard',$d);

		if($this->session->userdata('stts')=='admin')
			{
				$this->session->set_userdata(array('cek'=>'oke'));
				
			}


			if($this->session->userdata('stts')=='karyawan'){			
				$this->session->set_userdata(array('cek'=>'oke'));
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan')
			{
				$this->session->set_userdata(array('cek'=>'oke'));
				redirect('pelanggan');			
			}

		
	}

	function karyawan(){
	
			if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}

		$data['username']=$this->session->userdata('username');
		    $this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/admin/karyawan/';
            $config['total_rows'] = $this->model_karyawan->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);
            
            $halaman = $halaman==''?0:$halaman;
            $this->session->set_userdata(array('status_login'=>'oke'));
		$data['karyawan']=$this->model_karyawan->select_all($halaman,$config['per_page'])->result();
		$this->template->load('admin/template','admin/karyawan/lihat_karyawan',$data);
	}
	function karyawantambah(){
		if(isset($_POST['submit']))       
		{
			$this->model_karyawan->tambahuser();
			$this->model_karyawan->tambah();
			redirect('admin/karyawan');
		}else{
			$data['username']=$this->session->userdata('username');
			$this->template->load('admin/template','admin/karyawan/tambah_karyawan',$data);	
		}
		
	}
	function karyawanedit(){
		if(isset($_POST['submit'])){
			$this->model_karyawan->edit();
			redirect('admin/karyawan');
		}
		else
			{
				$id=$this->uri->segment(3);
				$data['username']=$this->session->userdata('username');
				$data['karyawan']=$this->db->get_where('karyawan',array('id_karyawan'=>$id))->row_array();
				$this->template->load('admin/template','admin/karyawan/edit_karyawan',$data);
			}
	}

	function karyawanhapus(){

		$id=$this->uri->segment(3);
		$this->db->where('id_karyawan',$id);
		$this->db->delete('karyawan');
		redirect('admin/karyawan');

	}
	function karyawancari(){
			$data['username']=$this->session->userdata('username');
			$this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/admin/karyawancari/';
            $config['total_rows'] = $this->model_karyawan->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);          
            $halaman = $halaman==''?0:$halaman;
		$data['karyawan']=$this->model_karyawan->cari($halaman,$config['per_page'])->result();
		$this->template->load('admin/template','admin/karyawan/cari_karyawan',$data);
	}
		function resep(){
			if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}

		$data['username']=$this->session->userdata('username');
		   $this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/admin/resep/';
            $config['total_rows'] = $this->model_resep->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);
            
            $halaman = $halaman==''?0:$halaman;
		$data['resep']=$this->model_resep->select_all($halaman,$config['per_page'])->result();
		$this->template->load('admin/template','admin/resep/lihat_resep',$data);
	}
		
	function reseptambah(){
		if(isset($_POST['submit'])){
		
			$this->model_resep->tambah();
			redirect('admin/resep');		

		}else{
			$data['obat'] = $this->obat_model->lihat();
			$data['username']=$this->session->userdata('username');
			$this->template->load('admin/template','admin/resep/tambah_resep',$data);	

		}
	}	
	function resepedit(){
		if(isset($_POST['submit'])){
			$this->model_resep->edit();
			redirect('admin/resep');
		}
		else
			{
				$id=$this->uri->segment(3);
				$data['username'] =$this->session->userdata('username');
				$data['resep2']   = $this->model_resep->lihat()->result();
				$data['resep']    =$this->db->get_where('resep',array('id_resep'=>$id))->row_array();
                $data['obat']     =$this->obat_model->lihat();
				$this->template->load('admin/template','admin/resep/edit_resep',$data);
			}
	}
	function resephapus(){

		$id=$this->uri->segment(3);
		$this->db->where('id_resep',$id);
		$this->db->delete('resep');
		redirect('admin/resep');

	}
	function resepcari(){
		$data['username']=$this->session->userdata('username');
		   $this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/admin/resep/';
            $config['total_rows'] = $this->model_resep->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);
            
            $halaman = $halaman==''?0:$halaman;
		$data['resep']=$this->model_resep->cari($halaman,$config['per_page'])->result();
		$this->template->load('admin/template','admin/resep/cari_resep',$data);
	}

	function obat(){
		if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}
			$data['username']=$this->session->userdata('username');
			$this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/admin/obat/';
            $config['total_rows'] = $this->obat_model->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);
            
            $halaman = $halaman==''?0:$halaman;
		$data['obat']=$this->obat_model->select_all($halaman,$config['per_page'])->result();
		$this->template->load('admin/template','admin/obat/lihat_obat',$data);
	}
	function obattambah(){
		$this->load->model('admin/supplier_model');
		if(isset($_POST['submit'])){
			$this->obat_model->tambah();
			redirect('admin/obat');		

		}else{
			$this->load->model('admin/supplier_model');
			$data['supplier'] = $this->supplier_model->select_all();
			$data['username']=$this->session->userdata('username');
			$this->template->load('admin/template','admin/obat/tambah_obat',$data);	

		}

	}function obatedit(){
			if(isset($_POST['submit'])){
			$this->obat_model->edit();
			redirect('admin/obat');
		}
		else
			{
				$id=$this->uri->segment(3);
				$data['username']  =$this->session->userdata('username');
				$data['ob']        =$this->db->get_where('obat',array('id_obat'=>$id))->row_array();
				$data['supplier']  = $this->supplier_model->select_all();
                $data['obat']	   =$this->obat_model->lihat();
				$this->template->load('admin/template','admin/obat/edit_obat',$data);
			}

	}
	function obathapus(){

		$id=$this->uri->segment(3);
		$this->db->where('id_obat',$id);
		$this->db->delete('obat');
		redirect('admin/obat');
	}
	function obatcari(){
		if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}
			$data['username']=$this->session->userdata('username');
			$this->load->library('pagination');
            $config['base_url']   = base_url().'index.php/admin/obatcari/';
            $config['total_rows'] = $this->obat_model->lihat()->num_rows();
            $config['per_page'] = 10; 
            $this->pagination->initialize($config); 
            $data['paging']= $this->pagination->create_links();
            $halaman=$this->uri->segment(3);
            
            $halaman = $halaman==''?0:$halaman;
		$data['obat']=$this->obat_model->cari($halaman,$config['per_page'])->result();
		$this->template->load('admin/template','admin/obat/cari_obat',$data);
	}
	function Penjualan(){
		if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}
		if(isset($_POST['submit']))
		{
			 $this->model_penjualan->insert();

			   redirect('admin/penjualan');
			}else
		{
			$data['resep']	 	=$this->model_resep->lihat();
			$data['obat']	 	=$this->obat_model->lihat();
			$data['lihat']	 	=$this->model_penjualan->lihat()->result();
			$data['penjualan']	=$this->model_penjualan->select_all();
			$data['username']	=$this->session->userdata('username');
			$this->template->load('admin/template','admin/penjualan/lihat_penjualan',$data);
		}
	}
	
	function penjualanhapus(){
		$id=$this->uri->segment(3);
		$this->db->where('id_penjualan',$id);
		$this->db->delete('penjualan');
		redirect('admin/penjualan');
	}

	function penjualancari(){
			$this->model_penjualan->cari();
			$data['username']	=$this->session->userdata('username');
			$data['pelanggan']  = $this->model_pelanggan->lihat();			
			$this->template->load('admin/template','admin/pelanggan/cari_pelanggan',$data);
		


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
                     		<td><a href="<?= base_url('admin/penjualanhapus/'); echo "/".$l->id_penjualan;?>" 
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
       redirect('admin/penjualan');
		
		 	
	}
	function supplier()
	{
		if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}
		$data['supplier']   = $this->model_supplier->lihat();
		$data['username']	= $this->session->userdata('username');	
		$this->template->load('admin/template','admin/supplier/lihat_supplier',$data);
	}

	function suppliertambah()
	{
		if(isset($_POST['submit'])){
		$this->model_supplier->insert();
		redirect('admin/supplier');
		}else
		{
			$data['username']=$this->session->userdata('username');
			$this->template->load('admin/template','admin/supplier/tambah_supplier',$data);	

		}
		

	}
	function supplieredit(){
		if(isset($_POST['submit'])){
			$this->model_supplier->edit();
			redirect('admin/supplier');
		}
		else
			{
				$id=$this->uri->segment(3);
				$data['username']   =$this->session->userdata('username');
                $data['supplier']	=$this->db->get_where('supplier',array('id_supplier'=>$id))->row_array();
				$this->template->load('admin/template','admin/supplier/edit_supplier',$data);
			}


	}
	function supplierhapus(){
		$id=$this->uri->segment(3);
		$this->db->where('id_supplier',$id);
		$this->db->delete('supplier');
		redirect('admin/supplier');
	}
	
	function supplay(){
		if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}
		$data['supplay']   = $this->model_supplay->select_all();
		$data['username']  = $this->session->userdata('username');	
		$this->template->load('admin/template','admin/Supplay/lihat_supplay',$data);
	}
	function supplaytambah(){
		if(isset($_POST['submit'])){
			$this->model_supplay->insert();
			
			redirect('admin/supplay');
		}else{
		$data['karyawan']   = $this->model_karyawan->lihat()->result();
		$data['obat']       = $this->obat_model->lihat()->result();
		$data['s']          = $this->model_supplier->lihat()->result();
		$data['username']	= $this->session->userdata('username');	
		$this->template->load('admin/template','admin/Supplay/tambah_supplay',$data);
		}

	}function supplayedit(){
		if(isset($_POST['submit']))
		{
			$this->model_supplay->edit();
			redirect('admin/supplay');

		}else
		{
			$id=$this->uri->segment(3);
			$data['supplay']	= $this->db->get_where('faktursupply',array('no'=>$id))->row_array();
			$data['karyawan']   = $this->model_karyawan->lihat()->result();
			$data['obat']       = $this->obat_model->lihat()->result();
			$data['s']          = $this->model_supplier->lihat()->result();
			$data['username']   = $this->session->userdata('username');	
			$this->template->load('admin/template','admin/Supplay/edit_supplay',$data);	
		}
		
	}
	function supplayhapus(){
		$id=$this->uri->segment(3);
		$this->db->where('no',$id);
		$this->db->delete('faktursupply');
		redirect('admin/supplay');
	}

	function pelanggan(){
		if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}
		$data['pelanggan']  = $this->model_pelanggan->lihat();
		$data['username']   = $this->session->userdata('username');	
	    $this->template->load('admin/template','admin/pelanggan/lihat_pelanggan',$data);	
	}

	function pelanggantambah(){
		$this->load->helper('string');
		$kode=random_string('alnum', 8);
		if(isset($_POST['submit']))
		{
			$this->model_pelanggan->insert($kode);
			$this->model_pelanggan->insertlogin();
			redirect('admin/pelanggan');

		}else{
		$data['username']   = $this->session->userdata('username');	
	    $this->template->load('admin/template','admin/pelanggan/tambah_pelanggan',$data);	
		}
	}
	function pelangganedit(){
		if(isset($_POST['submit']))
		{
			$this->model_pelanggan->edit();
			redirect('admin/pelanggan');

		}else
		{
			$id=$this->uri->segment(3);
			$data['pelanggan']	= $this->db->get_where('pelanggan',array('id_pelanggan'=>$id))->row_array();
			$data['username']   = $this->session->userdata('username');	
			$this->template->load('admin/template','admin/pelanggan/edit_pelanggan',$data);	
		}
	}
	function pelangganhapus(){
		$id=$this->uri->segment(3);
		$this->db->where('id_pelanggan',$id);
		$this->db->delete('pelanggan');
		redirect('admin/pelanggan');
	}	

	function pelanggandetail(){
			$id=$this->uri->segment(3);
			$data['pelanggan']	= $this->db->get_where('pelanggan',array('id_pelanggan'=>$id))->row_array();
			$data['username']   = $this->session->userdata('username');	
			$this->template->load('admin/template','admin/pelanggan/detail_pelanggan',$data);	
		
	}

	function tp(){
		if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}
		$data['tp'] 		= $this->db->get('penjualan_detail');
		$data['username']   = $this->session->userdata('username');	
		$this->template->load('admin/template','admin/penjualan/transaksi_penjualan',$data);	
	}
	function tp2(){
		if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}
		$tanggal1 =$this->input->post('tanggal1');
		$tanggal2 =$this->input->post('tanggal2'); 
		$query    = "select * from penjualan_detail where tanggal and tanggal between '$tanggal1' and '$tanggal2'";
		$data['tp'] 		= $this->db->query($query);
		$data['username']   = $this->session->userdata('username');	
		$this->template->load('admin/template','admin/penjualan/transaksi_penjualan',$data);	
	}

	function ts(){
		if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}
		$query  			= "select tanggal,k.nama_karyawan,s.nama_supplier,sum(f.harga_*f.jumlah_obat) as total
							   FROM faktursupply as f ,karyawan as k, supplier as s 
							   where f.id_karyawan=k.id_karyawan and f.id_supplier=s.id_supplier group by f.no";
		$data['tp'] 		= $this->db->query($query);
		$data['username']   = $this->session->userdata('username');	
		$this->template->load('admin/template','admin/penjualan/transaksi_supplier',$data);
	}
	function ts2(){
		if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}
		$tanggal1 =$this->input->post('tanggal1');
		$tanggal2 =$this->input->post('tanggal2');
		$query  			= "select tanggal,k.nama_karyawan,s.nama_supplier,sum(f.harga_*f.jumlah_obat) as total
							   FROM faktursupply as f ,karyawan as k, supplier as s 
							   where f.id_karyawan=k.id_karyawan and f.id_supplier=s.id_supplier and f.tanggal between '$tanggal1' and '$tanggal2' group by f.no";
		$data['tp'] 		= $this->db->query($query);
		$data['username']   = $this->session->userdata('username');	
		$this->template->load('admin/template','admin/penjualan/transaksi_supplier',$data);
	}

	function laporan()
	{
		if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}
	$this->load->model('admin/model_laporan');    
    foreach($this->model_laporan->grafik_penjualan()->result_array() as $row)
   {
	    $data['grafik'][]=(float)$row['Januari'];
	    $data['grafik'][]=(float)$row['Februari'];
	    $data['grafik'][]=(float)$row['Maret'];
	    $data['grafik'][]=(float)$row['April'];
	    $data['grafik'][]=(float)$row['Mei'];
	    $data['grafik'][]=(float)$row['Juni'];
	    $data['grafik'][]=(float)$row['Juli'];
	    $data['grafik'][]=(float)$row['Agustus'];
	    $data['grafik'][]=(float)$row['September'];
	    $data['grafik'][]=(float)$row['Oktober'];
	    $data['grafik'][]=(float)$row['November'];
	    $data['grafik'][]=(float)$row['Desember'];
	}
		$data['username']   = $this->session->userdata('username');	
		$this->template->load('admin/template','admin/laporan/Grafik',$data);
	}

	function LaporanS(){
		if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}
		$this->load->model('admin/model_laporan');    
    foreach($this->model_laporan->grafik_supplier()->result_array() as $row)
   {
	    $data['grafik'][]=(float)$row['Januari'];
	    $data['grafik'][]=(float)$row['Februari'];
	    $data['grafik'][]=(float)$row['Maret'];
	    $data['grafik'][]=(float)$row['April'];
	    $data['grafik'][]=(float)$row['Mei'];
	    $data['grafik'][]=(float)$row['Juni'];
	    $data['grafik'][]=(float)$row['Juli'];
	    $data['grafik'][]=(float)$row['Agustus'];
	    $data['grafik'][]=(float)$row['September'];
	    $data['grafik'][]=(float)$row['Oktober'];
	    $data['grafik'][]=(float)$row['November'];
	    $data['grafik'][]=(float)$row['Desember'];
	}
		$data['username']   = $this->session->userdata('username');	
		$this->template->load('admin/template','admin/laporan/Grafiks',$data);
	}

	function gantipassword()
	{
		 	if($this->session->userdata('stts')=='karyawan'){				
				redirect('karyawan');			
			}
			if($this->session->userdata('stts')=='pelanggan'){
				redirect('pelanggan');			
			}
			$data['username']   = $this->session->userdata('username');	
			$this->template->load('admin/template','admin/laporan/ganti',$data);	
	}

	public function simpanpassword(){
		$stts = $this->session->userdata('stts');
		if($stts=='admin')
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
						redirect('admin/gantipassword');
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
					redirect('admin/gantipassword');

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
				redirect('admin/gantipassword');
			}

		}
		$this->template->load('admin/template','admin/laporan/ganti',$data);
	}



			
		
		
}


?>