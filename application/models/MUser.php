<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MUser extends CI_Model{

    function tampil_produk(){		
		return $this->db->get('Produk');
	}	
    
}