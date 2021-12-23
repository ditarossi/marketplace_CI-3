<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
	function __construct(){
		parent::__construct();		
		$this->load->model('MAdmin');
        $this->load->helper('url');
		/*if($this->session->userdata('Status') != "Login"){
			redirect(base_url("Auth/index"));
		}*/
	}

    public function index(){
        $data['produk'] = $this->MAdmin->tampilProduk()->result();
        $this->load->view('template/index', $data);
    }

	//============PRODUK============
    function inputProduk(){
		$this->load->view('data/v_input');
	}

    function inputProduk_aksi(){
        $ID_Produk = $this->input->post('ID_Produk');
		$Nama_Produk = $this->input->post('Nama_Produk');
		$Jenis_Skincare = $this->input->post('Jenis_Skincare');
        $Brand = $this->input->post('Brand');
        $Manfaat = $this->input->post('Manfaat');
        $Ingredients = $this->input->post('Ingredients');
		$Harga = $this->input->post('Harga');
 
		$data = array(
			'ID_Produk' => $ID_Produk,
			'Nama_Produk' => $Nama_Produk,
			'Jenis_Skincare' => $Jenis_Skincare,
            'Brand' => $Brand,
            'Manfaat' => $Manfaat,
            'Ingredients' => $Ingredients,
			'Harga'=>$Harga
			);
		$this->MAdmin->inputProduk($data,'produk');
		redirect('Admin/index');
	}

	function hapusProduk($ID_Produk){
		$where = array('ID_Produk' => $ID_Produk);
		$this->MAdmin->hapusP($where,'produk');
		redirect('Admin/index');
	}

	function editProduk($ID_Produk){
		$where = array('ID_Produk' => $ID_Produk);
		$data['produk'] = $this->MAdmin->editP($where,'produk')->result();
		$this->load->view('data/v_edit',$data);
	}

	function editProduk_aksi(){
		$ID_Produk = $this->input->post('ID_Produk');
		$Nama_Produk = $this->input->post('Nama_Produk');
		$Jenis_Skincare = $this->input->post('Jenis_Skincare');
        $Brand = $this->input->post('Brand');
        $Manfaat = $this->input->post('Manfaat');
        $Ingredients = $this->input->post('Ingredients');
		$Harga = $this->input->post('Harga');
		$Gambar = $this->input->post('Gambar');

		$data = array(
			'ID_Produk' => $ID_Produk,
			'Nama_Produk' => $Nama_Produk,
			'Jenis_Skincare' => $Jenis_Skincare,
            'Brand' => $Brand,
            'Manfaat' => $Manfaat,
            'Ingredients' => $Ingredients,
			'Harga'=>$Harga,
			'Gambar'=>$Gambar
			);
	
		$where = array(
			'ID_Produk' => $ID_Produk
		);
	
		$this->MAdmin->editAksi($where,$data,'produk');
		redirect('Admin/index');
	}

	//============JENIS_SKINCARE============
	public function Jenis_Skincare(){
        $data['jenis_skincare'] = $this->MAdmin->tampilJenisSkincare()->result();
        $this->load->view('content/jenis_skincare', $data);
    }

	function inputJenis_Skincare(){
		$this->load->view('data/v_inputJenis_Skincare');
	}

	function inputJenisSkincare_aksi(){
        $ID_Jenis = $this->input->post('ID_Jenis');
		$Jenis = $this->input->post('Jenis');
		
		$data = array(
			'ID_Jenis' => $ID_Jenis,
			'Jenis' => $Jenis
			);
		$this->MAdmin->inputJenis_Skincare($data,'jenis_skincare');
		redirect('Admin/Jenis_Skincare');
	}

	function hapusJenis_Skincare($ID_Jenis){
		$where = array('ID_Jenis' => $ID_Jenis);
		$this->MAdmin->hapusJ($where,'jenis_skincare');
		redirect('Admin/Jenis_Skincare');
	}

	function editJenis_Skincare($ID_Jenis){
		$where = array('ID_Jenis' => $ID_Jenis);
		$data['jenis_skincare'] = $this->MAdmin->editJ($where,'jenis_skincare')->result();
		$this->load->view('data/v_editJenis_Skincare',$data);
	}

	function editJenisSkincare_aksi(){
		$ID_Jenis = $this->input->post('ID_Jenis');
		$Jenis = $this->input->post('Jenis');
		
		$data = array(
			'ID_Jenis' => $ID_Jenis,
			'Jenis' => $Jenis
			);
	
		$where = array(
			'ID_Jenis' => $ID_Jenis
		);
	
		$this->MAdmin->editJenis_Skincare($where,$data,'jenis_skincare');
		redirect('Admin/Jenis_Skincare');
	}

	//===========BRAND============
	public function Brand(){
        $data['brand'] = $this->MAdmin->tampilBrand()->result();
        $this->load->view('content/brand', $data);
    }

	function inputBrand(){
		$this->load->view('data/v_inputBrand');
	}

	function inputBrand_aksi(){
        $ID_Brand = $this->input->post('ID_Brand');
		$Nama_Brand = $this->input->post('Nama_Brand');
		$Jenis_Brand = $this->input->post('Jenis_Brand');
		
		$data = array(
			'ID_Brand' => $ID_Brand,
			'Nama_Brand' => $Nama_Brand,
			'Jenis_Brand' => $Jenis_Brand
			);
		$this->MAdmin->inputBrand($data,'brand');
		redirect('Admin/Brand');
	}

	function hapusBrand($ID_Brand){
		$where = array('ID_Brand' => $ID_Brand);
		$this->MAdmin->hapusB($where,'brand');
		redirect('Admin/Brand');
	}

	function editBrand($ID_Brand){
		$where = array('ID_Brand' => $ID_Brand);
		$data['brand'] = $this->MAdmin->editB($where,'brand')->result();
		$this->load->view('data/v_editBrand',$data);
	}

	function editBrand_aksi(){
		$ID_Brand = $this->input->post('ID_Brand');
		$Nama_Brand = $this->input->post('Nama_Brand');
		$Jenis_Brand = $this->input->post('Jenis_Brand');
		
		$data = array(
			'ID_Brand' => $ID_Brand,
			'Nama_Brand' => $Nama_Brand,
			'Jenis_Brand' => $Jenis_Brand
			);
	
		$where = array(
			'ID_Brand' => $ID_Brand
		);
	
		$this->MAdmin->editBrand($where,$data,'brand');
		redirect('Admin/Brand');
	}

	//=========PEMESANAN==========
	public function Pemesanan(){
        $data['pemesanan'] = $this->MAdmin->tampilPemesanan()->result();
        $this->load->view('content/pemesanan', $data);
    }

	function inputPemesanan(){
		$this->load->view('data/v_inputPemesanan');
	}

	function inputPemesanan_aksi(){
        $ID_Pemesanan = $this->input->post('ID_Pemesanan');
		$Nama_Produk = $this->input->post('Nama_Produk');
		$Jumlah = $this->input->post('Jumlah');
		$Metode_Pembayaran = $this->input->post('Metode_Pembayaran');
		
		$data = array(
			'ID_Pemesanan' => $ID_Pemesanan,
			'Nama_Produk' => $Nama_Produk,
			'Jumlah' => $Jumlah,
			'Metode_Pembayaran' => $Metode_Pembayaran
			);
		$this->MAdmin->inputPemesanan($data,'pemesanan');
		redirect('Admin/Pemesanan');
	}

	function hapusPemesanan($ID_Pemesanan){
		$where = array('ID_Pemesanan' => $ID_Pemesanan);
		$this->MAdmin->hapusPem($where,'pemesanan');
		redirect('Admin/Pemesanan');
	}

	function editPemesanan($ID_Pemesanan){
		$where = array('ID_Pemesanan' => $ID_Pemesanan);
		$data['pemesanan'] = $this->MAdmin->editPem($where,'pemesanan')->result();
		$this->load->view('data/v_editPemesanan',$data);
	}

	function editPemesanan_aksi(){
		$ID_Pemesanan = $this->input->post('ID_Pemesanan');
		$Nama_Produk = $this->input->post('Nama_Produk');
		$Jumlah = $this->input->post('Jumlah');
		$Metode_Pembayaran = $this->input->post('Metode_Pembayaran');
		
		$data = array(
			'ID_Pemesanan' => $ID_Pemesanan,
			'Nama_Produk' => $Nama_Produk,
			'Jumlah' => $Jumlah,
			'Metode_Pembayaran' => $Metode_Pembayaran
			);
	
		$where = array(
			'ID_Pemesanan' => $ID_Pemesanan
		);
	
		$this->MAdmin->editPemesanan($where,$data,'pemesanan');
		redirect('Admin/Pemesanan');
	}

	//==========PENGGUNA==============
	public function Pengguna(){
        $data['pengguna'] = $this->MAdmin->tampilPengguna()->result();
        $this->load->view('content/pengguna', $data);
    }

	function inputPengguna(){
		$this->load->view('data/v_inputPengguna');
	}

	function inputPengguna_aksi(){
        $ID_Pengguna = $this->input->post('ID_Pengguna');
		$Nama_Lengkap = $this->input->post('Nama_Lengkap');
		$Email = $this->input->post('Email');
		$Username = $this->input->post('Username');
		$Password = $this->input->post('Password');
		
		$data = array(
			'ID_Pengguna' => $ID_Pengguna,
			'Nama_Lengkap' => $Nama_Lengkap,
			'Email' => $Email,
			'Username' => $Username,
			'Password' => $Password
			);

		$this->MAdmin->inputPengguna($data,'pengguna');
		redirect('Admin/Pengguna');
	}

	function hapusPengguna($ID_Pengguna){
		$where = array('ID_Pengguna' => $ID_Pengguna);
		$this->MAdmin->hapusPeng($where,'pengguna');
		redirect('Admin/Pengguna');
	}

	function editPengguna($ID_Pengguna){
		$where = array('ID_Pengguna' => $ID_Pengguna);
		$data['pengguna'] = $this->MAdmin->editPeng($where,'pengguna')->result();
		$this->load->view('data/v_editPengguna',$data);
	}

	function editPengguna_aksi(){
		$ID_Pengguna = $this->input->post('ID_Pengguna');
		$Nama_Lengkap = $this->input->post('Nama_Lengkap');
		$Email = $this->input->post('Email');
		$Username = $this->input->post('Username');
		$Password = $this->input->post('Password');
		
		$data = array(
			'ID_Pengguna' => $ID_Pengguna,
			'Nama_Lengkap' => $Nama_Lengkap,
			'Email' => $Email,
			'Username' => $Username,
			'Password' => $Password
			);
	
		$where = array(
			'ID_Pengguna' => $ID_Pengguna
		);
	
		$this->MAdmin->editPengguna($where,$data,'pengguna');
		redirect('Admin/Pengguna');
	}

	//==========ADMIN============
	public function Admin(){
        $data['admin'] = $this->MAdmin->tampilAdmin()->result();
        $this->load->view('content/admin', $data);
    }

	function inputAdmin(){
		$this->load->view('data/v_inputAdmin');
	}

	function inputAdmin_aksi(){
        $ID_Petugas = $this->input->post('ID_Petugas');
		$Nama_Lengkap = $this->input->post('Nama_Lengkap');
		$Email = $this->input->post('Email');
		$Username = $this->input->post('Username');
		$Password = $this->input->post('Password');
		
		$data = array(
			'ID_Petugas' => $ID_Petugas,
			'Nama_Lengkap' => $Nama_Lengkap,
			'Email' => $Email,
			'Username' => $Username,
			'Password' => $Password
			);

		$this->MAdmin->inputAdmin($data,'admin');
		redirect('Admin/Admin');
	}

	function hapusAdmin($ID_Petugas){
		$where = array('ID_Petugas' => $ID_Petugas);
		$this->MAdmin->hapusA($where,'admin');
		redirect('Admin/Admin');
	}

	function editAdmin($ID_Petugas){
		$where = array('ID_Petugas' => $ID_Petugas);
		$data['admin'] = $this->MAdmin->editA($where,'admin')->result();
		$this->load->view('data/v_editAdmin',$data);
	}

	function editAdmin_aksi(){
		$ID_Petugas = $this->input->post('ID_Petugas');
		$Nama_Lengkap = $this->input->post('Nama_Lengkap');
		$Email = $this->input->post('Email');
		$Username = $this->input->post('Username');
		$Password = $this->input->post('Password');
		
		$data = array(
			'ID_Petugas' => $ID_Petugas,
			'Nama_Lengkap' => $Nama_Lengkap,
			'Email' => $Email,
			'Username' => $Username,
			'Password' => $Password
			);
	
		$where = array(
			'ID_Petugas' => $ID_Petugas
		);
	
		$this->MAdmin->editAdmin($where,$data,'admin');
		redirect('Admin/Admin');
	}

}

