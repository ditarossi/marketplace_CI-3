<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __construct(){
		parent::__construct();		
		//$this->load->model('MAdmin');
        $this->load->helper('url');
        //$this->load->model('MAdmin');
        $this->load->model('MLogin');
	}

    public function index(){
        $this->load->view('landing/signin');
    }
    function auth(){
        $Email = $this->input->post('Email', true);
        $Password = $this->input->post('Password', true);
        $result = $this->MLogin->cek_user($Email, $Password);

        if($result->num_rows() > 0 ){
            $data = $result->row_array();
            $Username = $data['Username'];
            $Email = $data['Email'];
            $Level = $data['Level'];
            $sesdata = array(
                'Username' => $Username,
                'Email' => $Email,
                'Level' => $Level,
            );
            $this->session->set_userdata($sesdata);
            if($Level === "1"){
                echo "<script>alert('Login Successfull!')</script>";
                redirect('Admin');
            } else {
                echo "<script>alert('Login Successfull!')</script>";
                redirect('User');
            }
        } else {
            echo "<script>alert('Login terlebih dahulu');history.go(-1);</script>";
        }
        $this->load->view('landing/signin');
    }
    function logout(){
        $this->session->sess_destroy();
        echo "<script>alert('Logout Successfull!')</script>";
        redirect('LandingPage');
    }
}

