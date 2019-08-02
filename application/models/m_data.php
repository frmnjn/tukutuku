<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('iklan');
	}

	function tampil_data_account(){
		return $this->db->get('account');
	}

	function tampil_data_account_details($username){
		return $this->db->query("select * from account where username = \"$username\"");
	}

	function tampil_data_pesan_details($id){
		return $this->db->query("select * from pesan where id_account = \"$id\"");
	}

	function tampil_data_account_details_by_id($id_account){
		return $this->db->query("select * from account where id_account = \"$id_account\"");
	}

	function tampil_data_iklan_details_by_id($id_account){
		return $this->db->query("select * from iklan where id_account = \"$id_account\"");
	}

	function tampil_data_iklan_details_by_id_iklan($id_iklan){
		return $this->db->query("select * from iklan where id_iklan = \"$id_iklan\"");
	}

	function tampil_data_iklan_details_by_kategori($kategori){
		return $this->db->query("select * from iklan where kategori = \"$kategori\"");
	}

	function tampil_data_iklan_details_by_kategori_makanan(){
		return $this->db->query("select * from iklan where kategori = \"Makanan & Minuman\"");
	}

	function tampil_data_iklan_details_by_kategori_rumah(){
		return $this->db->query("select * from iklan where kategori = \"Rumah Tangga\"");
	}

	function tampil_data_iklan_details_by_keyword($keyword){
		return $this->db->query("select * from iklan where judul LIKE \"%$keyword%\"");
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}