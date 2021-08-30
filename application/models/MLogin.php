<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model{

    function cek_login($admin,$where){		
		return $this->db->get_where($admin,$where);
	}	
    
}