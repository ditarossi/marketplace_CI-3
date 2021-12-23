<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
	function __construct(){
		parent::__construct();		
		//$this->load->model('MAdmin');
        $this->load->helper('url');
        $this->load->model('MAdmin');
        $this->load->model('MLogin');
        /*if($this->session->userdata('Status') != "Login"){
			redirect(base_url("Auth/index"));
		}*/
	}

    public function index(){
        //$brg['Produk']=$this->MUser->tampil_produk()->result();
        $this->load->view('User/homeUser');
    }

    //belum digunakan
    public function katalog(){
        $data['produk'] = $this->MUser->tampil_produk()->result();
        $this->load->view('User/katalog', $data);
    }

}

