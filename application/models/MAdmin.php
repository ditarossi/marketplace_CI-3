<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAdmin extends CI_Model{
	//============PRODUK============
	function tampilProduk(){
		return $this->db->get('produk');
		$this->db->join('Jenis_Skincare','Jenis_Skincare.ID_Jenis=Produk.Jenis_Skincare');		
       	$this->db->join('Brand', 'Brand.ID_Brand=Produk.Brand');
	}

    function inputProduk($data,$produk){
		$this->db->insert($produk,$data);
	}

	function hapusP($where,$produk){
		$this->db->where($where);
		$this->db->delete($produk);
	}

	function editP($where,$produk){		
		return $this->db->get_where($produk,$where);
	}

	function editAksi($where,$data,$produk){
		$this->db->where($where);
		$this->db->update($produk,$data);
	}

	//===========JENIS_SKINCARE============
	function tampilJenisSkincare(){
		return $this->db->get('jenis_skincare');
	}

	function inputJenis_Skincare($data,$jenis_skincare){
		$this->db->insert($jenis_skincare,$data);
	}

	function hapusJ($where,$jenis_skincare){
		$this->db->where($where);
		$this->db->delete($jenis_skincare);
	}

	function editJ($where,$jenis_skincare){		
		return $this->db->get_where($jenis_skincare,$where);
	}

	function editJenis_Skincare($where,$data,$jenis_skincare){
		$this->db->where($where);
		$this->db->update($jenis_skincare,$data);
	}

	//=============BRAND=============
	function tampilBrand(){
		return $this->db->get('brand');
	}

	function inputBrand($data,$brand){
		$this->db->insert($brand,$data);
	}

	function hapusB($where,$brand){
		$this->db->where($where);
		$this->db->delete($brand);
	}

	function editB($where,$brand){		
		return $this->db->get_where($brand,$where);
	}

	function editBrand($where,$data,$brand){
		$this->db->where($where);
		$this->db->update($brand,$data);
	}

	//==========PEMESANAN===========
	function tampilPemesanan(){
		return $this->db->get('pemesanan');
		$this->db->join('Pemesanan', 'Produk.ID_Produk=Pemesanan.Nama_Produk');
	}

	function inputPemesanan($data,$pemesanan){
		$this->db->insert($pemesanan,$data);
	}

	function hapusPem($where,$pemesanan){
		$this->db->where($where);
		$this->db->delete($pemesanan);
	}

	function editPem($where,$pemesanan){		
		return $this->db->get_where($pemesanan,$where);
	}

	function editPemesanan($where,$data,$pemesanan){
		$this->db->where($where);
		$this->db->update($pemesanan,$data);
	}

	//=========PENGGUNA=========
	function tampilPengguna(){
		return $this->db->get('pengguna');
	}

	function inputPengguna($data,$pengguna){
		$this->db->insert($pengguna,$data);
	}

	function hapusPeng($where,$pengguna){
		$this->db->where($where);
		$this->db->delete($pengguna);
	}

	function editPeng($where,$pengguna){		
		return $this->db->get_where($pengguna,$where);
	}

	function editPengguna($where,$data,$pengguna){
		$this->db->where($where);
		$this->db->update($pengguna,$data);
	}

	//========ADMIN=================
	function tampilAdmin(){
		return $this->db->get('admin');
	}

	function inputAdmin($data,$admin){
		$this->db->insert($admin,$data);
	}

	function hapusA($where,$admin){
		$this->db->where($where);
		$this->db->delete($admin);
	}

	function editA($where,$admin){		
		return $this->db->get_where($admin,$where);
	}

	function editAdmin($where,$data,$admin){
		$this->db->where($where);
		$this->db->update($admin,$data);
	}
}