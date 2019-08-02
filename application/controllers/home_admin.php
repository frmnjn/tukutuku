<?php 

class Home_admin extends CI_Controller{
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('home_admin');
	}

	function create_iklan_detail(){
		$id_penjual = $this->input->post('id_account');
		$judul = $this->input->post('judul');
		$harga = $this->input->post('harga');
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');

		$nama_foto = $_FILES['nama_foto']['name'];
		$asal = $_FILES['nama_foto']['tmp_name'];
		copy($asal, 'images/'.$nama_foto);

		$data = array(
			'id_account' => $id_penjual,
			'judul' => $judul,
			'harga' => $harga,
			'kategori' => $kategori,
			'deskripsi' => $deskripsi,
			'foto_barang' => 'images/'.$nama_foto
			);
		$this->m_data->input_data($data,'iklan');
		redirect('home_admin/manage_iklan');
	}

	function create_account_detail(){
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password_asli = $this->input->post('password');
		$password = md5($password);
		$nama_foto = "default-profile.jpg";
		$foto_account = "images/default-profile.jpg";
		$gender = $this->input->post('gender');
		$address = $this->input->post('address');
		$phone_number = $this->input->post('phone_number');

		$data = array(
			'fullname' => $fullname,
			'email' => $email,
			'username' => $username,
			'password' => $password,
			'password_asli' => $password_asli,
			'nama_foto' => $nama_foto,
			'foto_account' => $foto_account,
			'gender' => $gender,
			'address' => $address,
			'phone_number' => $phone_number
			);
		$this->m_data->input_data($data,'account');
		redirect('home_admin/manage_account');
	}

	function create_iklan(){
		$this->load->view('create_iklan');
	}

	function manage_iklan(){
		$data['iklan'] = $this->m_data->tampil_data()->result();
		$this->load->view('manage_iklan',$data);
	}

	function update_iklan(){
		$data['iklan'] = $this->m_data->tampil_data()->result();
		$this->load->view('update_iklan',$data);
	}

	function create_account(){
		$data['account'] = $this->m_data->tampil_data_account()->result();
		$this->load->view('create_account');
	}

	function manage_account(){
		$data['account'] = $this->m_data->tampil_data_account()->result();
		$this->load->view('manage_account',$data);
	}

	function update_account(){
		$data['account'] = $this->m_data->tampil_data_account()->result();
		$this->load->view('update_account',$data);
	}

}