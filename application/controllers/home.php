<?php 

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index(){
		$data['iklan'] = $this->m_data->tampil_data()->result();
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$this->load->view('home',$data);
	}

	function account(){
		$data['account'] = $this->m_data->tampil_data_account()->result();
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$this->load->view('home_account',$data);
	}

	function account_details($username){
		$data['account'] = $this->m_data->tampil_data_account_details($username)->result();
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$this->load->view('home_account',$data);
	}

	function account_details_by_id($id_account){
		$data['account'] = $this->m_data->tampil_data_account_details_by_id($id_account)->result();
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$this->load->view('home_account',$data);
	}

	function login(){
		if($this->input->post('username') == "admin" && $this->input->post('password') == "admin"){
			redirect(base_url("home_admin"));
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = md5($password);

		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_data->cek_login("account",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			
			$this->session->set_userdata($data_session);
			
			redirect(base_url("home"));
			
		}
		else{
			echo "Username dan password salah !";
		}
		
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}

	function register(){
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
		redirect('home');
	}

	function category($kategori){
		$data['iklan'] = $this->m_data->tampil_data_iklan_details_by_kategori($kategori)->result();
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$this->load->view('home',$data);
	}

	function category_all(){
		$data['iklan'] = $this->m_data->tampil_data()->result();
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$this->load->view('home',$data);
	}

	function category_makanan(){
		$data['iklan'] = $this->m_data->tampil_data_iklan_details_by_kategori_makanan()->result();
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$this->load->view('home',$data);
	}

	function category_rumah(){
		$data['iklan'] = $this->m_data->tampil_data_iklan_details_by_kategori_rumah()->result();
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$this->load->view('home',$data);
	}

	function search(){ 
		$keyword = $this->input->get('keyword');
		$data['iklan'] = $this->m_data->tampil_data_iklan_details_by_keyword($keyword)->result();
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$this->load->view('home',$data);
	}

	function iklan_details(){
		$id_iklan = $this->uri->segment(3);
		$id_account = $this->uri->segment(4);
		$data['iklan'] = $this->m_data->tampil_data_iklan_details_by_id_iklan($id_iklan)->result(); 
		$data['account'] = $this->m_data->tampil_data_account_details_by_id($id_account)->result();
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$this->load->view('iklan_details',$data);
	}

	function send_message_admin($sender){
		$message = $this->input->post('message');
		$data = array(
			'id_account' => "1",
			'pesan' => $message,
			'pengirim' => $sender
			);
		$this->m_data->input_data($data,'pesan');

		redirect("home/account_details/$sender");
	}

	function send_message(){
		$sender = $this->uri->segment(3);
		$receiver = $this->uri->segment(4);
		$message = $this->input->post('message');
		$data = array(
			'id_account' => $receiver,
			'pesan' => $message,
			'pengirim' => $sender
			);
		$this->m_data->input_data($data,'pesan');

		redirect("home/account_details/$sender");
	}

	function view_message($username){
		$data['pesan'] = $this->m_data->tampil_data_pesan_details($username)->result();
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$this->load->view("view_message",$data);
	}

	function hapus_pesan(){
		$id = $this->uri->segment(3);
		$username = $this->uri->segment(4);
		$where = array('id_pesan' => $id);
		$this->m_data->hapus_data($where,'pesan');
		
		redirect("home/view_message/$username");
	}


}