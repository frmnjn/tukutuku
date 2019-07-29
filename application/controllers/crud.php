<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('index');
	}


	function tambah_iklan(){
		$judul = $this->input->post('judul');
		$harga = $this->input->post('harga');
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');
		$data = array(
			'judul' => $judul,
			'harga' => $harga,
			'kategori' => $kategori,
			'deskripsi' => $deskripsi,
			);
		$this->m_data->input_data($data,'iklan');
		redirect('home_admin/manage_iklan');
	}

	function edit_iklan($id_iklan){
		$where = array('id_iklan' => $id_iklan);
		$data['iklan'] = $this->m_data->edit_data($where,'iklan')->result();
		$this->load->view('update_iklan_detail',$data);
	}

	function update_iklan(){
		$id_iklan = $this->input->post('id_iklan');
		$id_account = $this->input->post('id_account');
		$judul = $this->input->post('judul');
		$harga = $this->input->post('harga');
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');
		
		$nama_foto = $_FILES['nama_foto']['name'];
		$asal = $_FILES['nama_foto']['tmp_name'];
		copy($asal, 'images/'.$nama_foto);

		$data = array(
			'id_iklan' => $id_iklan,
			'id_account' => $id_account,
			'judul' => $judul,
			'harga' => $harga,
			'kategori' => $kategori,
			'deskripsi' => $deskripsi,
			'foto_barang' => 'images/'.$nama_foto
			);

		$where = array(
			'id_iklan' => $id_iklan
			);

		$this->m_data->update_data($where,$data,'iklan');
		redirect('home_admin/manage_iklan');
	}

	function hapus_iklan($id){
		$where = array('id_iklan' => $id);
		$this->m_data->hapus_data($where,'iklan');
		redirect('home_admin/manage_iklan');
	}

	function edit_account($id){
		$where = array('id_account' => $id);
		$data['account'] = $this->m_data->edit_data($where,'account')->result();
		$this->load->view('update_account_detail',$data);
	}

	

	function update_account(){
		$id_account = $this->input->post('id_account');
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = md5($password);
		$foto_account = "images/default-profile.jpg";
		$gender = $this->input->post('gender');
		$address = $this->input->post('address');
		$phone_number = $this->input->post('phone_number');

		$nama_foto = $_FILES['nama_foto']['name'];
		$asal = $_FILES['nama_foto']['tmp_name'];
		copy($asal, 'images/'.$nama_foto);

		$data = array(
			'id_account' => $id_account,
			'fullname' => $fullname,
			'email' => $email,
			'username' => $username,
			'password' => $password,
			'foto_account' => 'images/'.$nama_foto,
			'gender' => $gender,
			'address' => $address,
			'phone_number' => $phone_number
			);

		$where = array(
			'id_account' => $id_account
			);

		$this->m_data->update_data($where,$data,'account');
		redirect('home_admin/manage_account');
	}

	function hapus_account($id){
		$where = array(
			'id_account' => $id,
			);
		$this->m_data->hapus_data($where,'iklan');
		$this->m_data->hapus_data($where,'account');
		
		redirect('home_admin/manage_account');
	}

}