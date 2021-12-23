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
        $this->load->view('landing/newhome');
    }
}

