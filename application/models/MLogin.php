<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model{

    function cek_user($Email, $Password){		
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('Email', $Email);
		$this->db->where('Password', $Password);
		$query = $this->db->get();
		return $query;
	}	
    
}