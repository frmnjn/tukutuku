<?php 

class Home_member extends CI_Controller{
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function update_account_details(){
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
		redirect('home/account_details/'.$username);
	}

	function index(){
		$data['account'] = $this->m_data->tampil_data()->result();
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$this->load->view('home_member',$data);
	}

	function home_edit_account($id){
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$where = array('id_account' => $id);
		$data['account'] = $this->m_data->edit_data($where,'account')->result();
		$this->load->view('home_edit_account',$data);
	}

	function create_iklan_detail($id){
		$judul = $this->input->post('judul');
		$harga = $this->input->post('harga');
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');
		$id_account = $id;

		$nama_foto = $_FILES['nama_foto']['name'];
		$asal = $_FILES['nama_foto']['tmp_name'];
		copy($asal, 'images/'.$nama_foto);

		$data = array(
			'judul' => $judul,
			'harga' => $harga,
			'kategori' => $kategori,
			'deskripsi' => $deskripsi,
			'id_account' => $id_account,
			'foto_barang' => 'images/'.$nama_foto
			);
		$this->m_data->input_data($data,'iklan');
		redirect("home/account_details_by_id/$id");
	}

	function create_account_detail(){
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'fullname' => $fullname,
			'email' => $email,
			'username' => $username,
			'password' => $password
			);
		$this->m_data->input_data($data,'account');
		redirect('home_admin/manage_accunt');
	}

	function create_iklan($id){
		if($this->session->userdata('status') != "login"){
			$data = array(
			'kiw' => "n",
			'id_account' => $id
			);
		} else {
			$data = array(
			'kiw' => "y",
			'id_account' => $id
			);
		}
		//$data['kategori'] = $this->m_data->tampil_data_kategori()->result();
		$this->load->view('home_create_iklan', $data);
	}

	function manage_iklan($id_account){
		if($this->session->userdata('status') != "login"){
			$data = array(
			'kiw' => "n",
			'id_account' => $id_account, 
			'iklan' => $this->m_data->tampil_data_iklan_details_by_id($id_account)->result()
			);
		} else {
			$data = array(
			'kiw' => "y",
			'id_account' => $id_account,
			'iklan' => $this->m_data->tampil_data_iklan_details_by_id($id_account)->result()
			);
		}
		//$data['iklan'] = $this->m_data->tampil_data_iklan_details_by_id($id_account)->result();
		$this->load->view('home_view_iklan',$data);
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
		$this->load->view('home_edit_account',$data);
	}

	function lihat_kategori(){
		$data['kategori'] = $this->m_data->tampil_data_kategori()->result();
		$this->load->view('lihat_kategori',$data);
	}

}