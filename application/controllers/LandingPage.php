<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller {

    
	function __construct(){
		parent::__construct();		
		//$this->load->model('MAdmin');
        $this->load->helper('url');
        $this->load->model('MAdmin');
        $this->load->model('MLogin');
	}

    public function index(){
        $this->load->view('landing/home');
    }

	//=========LOGIN ADMIN=================
    public function loginAdmin(){
        $this->load->view('landing/formAdmin');
    }

    public function prosesAdmin()
    {
        $Username = $this->input->post('Username');
		$Password = $this->input->post('Password');
		$where = array(
			'username' => $Username,
			'Password' => md5($Password)
			);
		$cek = $this->MLogin->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'Nama' => $Username,
				'Status' => "Login"
				);
 
			$this->session->set_userdata($data_session);
 
            echo"<script>
            alert('Login sukses');
            window.location='".site_url('admin')."';
            </script>";
			//redirect(base_url("index.php/admin"));
 
		}else{
			//echo "Username dan password salah !";
            echo"<script>
            alert('Username dan password salah !');
            window.location='".site_url('LandingPage/logoutAdmin')."';
            </script>";
		}  
    }

    function logoutAdmin(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/LandingPage/loginAdmin'));
	}

	//===================LOGIN USER==================
	public function loginUser(){
        $this->load->view('landing/formUser');
    }

    public function prosesUser()
    {
        $Username = $this->input->post('Username');
		$Password = $this->input->post('Password');
		$where = array(
			'username' => $Username,
			'Password' => md5($Password)
			);
		$cek = $this->MLogin->cek_login("pengguna",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'Nama' => $Username,
				'Status' => "Login"
				);
 
			$this->session->set_userdata($data_session);
 
            echo"<script>
            alert('Login sukses');
            window.location='".site_url('user')."';
            </script>";
			//redirect(base_url("index.php/admin"));
 
		}else{
			//echo "Username dan password salah !";
            echo"<script>
            alert('Username dan password salah !');
            window.location='".site_url('LandingPage/logoutUser')."';
            </script>";
		}  
    }

    function logoutUser(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/LandingPage/loginUser'));
	}
}

