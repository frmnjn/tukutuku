<?php 

class Upload extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$this->load->view('create_iklan, array('error' => ' ''));
	}

	public function aksi_upload(){
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000;
		$config['max_width']            = 10000;
		$config['max_height']           = 10000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('create_iklan', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('manage_iklan', $data);
		}
	}
	
}